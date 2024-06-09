<?php

function view($page, $data = [])
{
    extract($data);
    include 'resources/views/' . $page . '.php';
}
function redirect(string $url): void
{
    header('Location: ' . $url);
    exit; 
}
function redirectWith(string $url, string $message): void
{
    $_SESSION['alert'] = $message;
    header('Location: ' . $url);
    exit; 
}

class Router
{
    public static $urls = [];

    function __construct()
    {
        $url = implode(
            '/',
            array_filter(
                explode(
                    '/',
                    str_replace(
                        $_ENV['BASEDIR'],
                        '',
                        parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH)
                    )
                ),
                'strlen'
            )
        );

        if (!in_array($url, self::$urls['routes'])) {
            header('Location: ' . BASEURL);
        }

        $call = self::$urls[$_SERVER['REQUEST_METHOD']][$url];
        $call();
    }
    public static function url($url, $method, $callback)
    {
        if ($url == '/') {
            $url = '';
        }
        self::$urls[strtoupper($method)][$url] = $callback;
        self::$urls['routes'][] = $url;
        self::$urls['routes'] = array_unique(self::$urls['routes']);
    }
}

class Database
{
    private string $driver = 'mysql';
    protected \PDO|null $connection = null;

    private function connect(): void
    {
        try {
            $connection = new \PDO($this->driver . ':'.'host=' .$_ENV['DB_HOST'] .';dbname=' . $_ENV['DB_NAME'], $_ENV['DB_USER'], $_ENV['DB_PASS']);
            $this->connection = $connection;
        } catch (\PDOException $e) {
            throw $e;   
        }
    }
    private function close(): void
    {
        $this->connection = null;
    }
    public function executeQuery(string $sql, array $data = [], bool $fetch_all = false): array|bool
    {
        $this->connect();
        $this->connection->setAttribute(\PDO::ATTR_ERRMODE, \PDO::ERRMODE_EXCEPTION);
        $statement = $this->connection->prepare($sql);
        $statement->execute($data);
        if($fetch_all) {
            $result = $statement->fetchAll(\PDO::FETCH_ASSOC);
        } else {
            $result = $statement->fetch(\PDO::FETCH_ASSOC);
        }
        $this->close();
        return $result;
    }
    public function executeNonQuery(string $sql, array $data = [], $get_id = false): bool|int
    {
        $this->connect();
        $this->connection->setAttribute(\PDO::ATTR_ERRMODE, \PDO::ERRMODE_EXCEPTION);
        $statement = $this->connection->prepare($sql);
        $statement->execute($data);
        if($get_id) {
            $result = intval($this->connection->lastInsertId());
        } else {
            $result = $statement->rowCount();
        }
        $this->close();
        return $result;
    }
    public function executeNoBind(string $sql, bool $fetch_all = false): array|bool
    {
        $this->connect();
        $this->connection->setAttribute(\PDO::ATTR_ERRMODE, \PDO::ERRMODE_EXCEPTION);
        $statement = $this->connection->query($sql);
        if($fetch_all) {
            $result = $statement->fetchAll(\PDO::FETCH_ASSOC);
        } else {
            $result = $statement->fetch(\PDO::FETCH_ASSOC);
        }
        $this->close();
        return $result;
    }
    public function create(string $table, array $data, $get_id = false): bool|int
    {
        try {
            $columns_str = [];
            $bind_str = [];
            foreach ($data as $column => $value) {
                $columns_str[] = $column;
                $bind_str[] = ":$column";
            }
            $columns_str = implode(', ',$columns_str);
            $bind_str = implode(', ',$bind_str);
            $sql = "INSERT INTO $table ($columns_str) VALUES ($bind_str);";
            $result = $this->executeNonQuery($sql,$data,$get_id);
            return $result;
        } catch (\PDOException $e) {
            throw $e;
        }
    }
    public function update(string $table, array $data, int $id): bool
    {
        try {
            $query = [];
            foreach ($data as $column => $value) {
                $query[] = "$column = :$column";
            }
            $query_str = implode(', ',$query);
            $sql = "UPDATE $table SET ". $query_str ." WHERE id = :id;";
            $data['id'] = $id;
            $result = $this->executeNonQuery($sql,$data);
            return $result;
        } catch (\PDOException $e) {
            throw $e;
        }
    }
    public function delete(string $table, int $id): bool
    {
        try {
            $sql = "DELETE FROM $table WHERE id = :id";
            $data = ['id' => $id];
            $result = $this->executeNonQuery($sql,$data);
            return $result;
        } catch (\PDOException $e) {
            return false;
        }
    }
    public function readOne(string $table, array $condition = [], string $columns = '*'): array|false
    {
        try {
            $sql = "SELECT ". $columns ." FROM $table WHERE ". $condition[0] . " " . $condition[1] . " :" . $condition[0] ." ;";
            $data = [$condition[0] => $condition[2]];
            $result = $this->executeQuery($sql,$data);
            return $result?? null;
        } catch (\PDOException $e) {
            throw $e;
        }
    }
    public function readMany(string $table, array $condition = [], string $columns = '*'): array|null
    {
        try {
            $condition_str = count($condition) > 0 ? implode(' ',$condition) : '1 = 1';
            $sql = "SELECT ". $columns ." FROM $table WHERE $condition_str;";
            $result = $this->executeQuery($sql,fetch_all:true);
            return $result?? null;
        } catch (\PDOException $e) {
            throw $e;
        }
    }
}
class Seeder
{
    private Database $db;
    public function __construct(Database $db) 
    {
        $this->db = $db;
    }
    public function clear()
    {
        $this->db->executeNonQuery('DELETE FROM user; ALTER TABLE user AUTO_INCREMENT = 1');
    }
    public function new()
    {
        //USER
        $this->db->create('user',[
            'id' => 1,
            'nama' =>  'deaa',
            'no_telp' => '081649554149',
            'email' => 'dea@a',
            'alamat' => 'Lorem, ipsum dolor sit amet consectetur adipisicing elit. Delectus corrupti culpa nostrum omnis impedit commodi. Quis id fugit repudiandae quia!',
            'password' => '123',
            'role' => 'staff',
        ]);
        $this->db->create('user',[
            'id' => 2,
            'nama' =>  'valen',
            'no_telp' => '082649554149',
            'email' => 'valen@a',
            'alamat' => 'Lorem, ipsum dolor sit amet consectetur adipisicing elit. Delectus corrupti culpa nostrum omnis impedit commodi. Quis id fugit repudiandae quia!',
            'password' => '123',
            'role' => 'cust',
        ]);
        $this->db->create('user',[
            'id' => 3,
            'nama' =>  'sekar',
            'no_telp' => '083649554149',
            'email' => 'sekar@a',
            'alamat' => 'Lorem, ipsum dolor sit amet consectetur adipisicing elit. Delectus corrupti culpa nostrum omnis impedit commodi. Quis id fugit repudiandae quia!',
            'password' => '123',
            'role' => 'dokter',
        ]);
        
    }
    public function fresh()
    {
        try {
            $this->clear();
            $this->new();
            return true;
        } catch (\PDOException $e) {
            throw $e;
        }
    }
}
function urlpath($path)
{
    require_once 'app/config/static.php';
    return BASEURL . $path;
}

function setFlashMessage($type, $message)
{
    if (!isset($_SESSION['user'])) {
        $_SESSION['guest_' . $type] = $message;
    } else {
        $_SESSION[$type . '_' . $_SESSION['user']['id']] = $message;
    }
}

function displayFlashMessages($type)
{
    if (!isset($_SESSION['user'])) {
        $messageKey = 'guest_' . $type;
        if (isset($_SESSION[$messageKey])) {
            echo '<div class="alert alert-' . $type . ' alert-dismissible fade show absolute" role="alert">';
            echo $_SESSION[$messageKey];
            echo '<button type="button" class="btn-close custom-close-button" data-bs-dismiss="alert" aria-label="Close">';
            echo '</button>';
            echo '</div>';
            unset($_SESSION[$messageKey]);
        }
    } else {
        $messageKey = $type . '_' . $_SESSION['user']['id'];
        if (isset($_SESSION[$messageKey])) {
            echo '<div class="alert alert-' . $type . ' alert-dismissible fade show absolute" role="alert">';
            echo $_SESSION[$messageKey];
            echo '<button type="button" class="btn-close custom-close-button" data-bs-dismiss="alert" aria-label="Close">';
            echo '</button>';
            echo '</div>';
            unset($_SESSION[$messageKey]);
        }
    }
}

function compressToWebP($source, $destination, $quality = 20)
{
    $info = getimagesize($source);
    if ($info['mime'] == 'image/jpeg') {
        $image = imagecreatefromjpeg($source);
    } elseif ($info['mime'] == 'image/png') {
        $image = imagecreatefrompng($source);
    } else {
        return false;
    }
    imagepalettetotruecolor($image);
    return imagewebp($image, $destination, $quality);
}

function isCurrentPage($page)
{
    return strpos($_SERVER['REQUEST_URI'], '/' . $page) !== false ? 'active' : '';
}
