<?php 

include_once 'function/main.php';
include_once 'app/config/static.php';

class CustController {
    private static $baseurl = '/cliniskin/';

    static function appointment_cust()
    {
        $db = new Database();
        $id = $_SESSION['id'];
        $sql = <<<SQL
            SELECT a.tanggal, a.jam, d.nama AS dokter, j.jenis FROM appointment a
            JOIN jenis_treatment j ON a.id_jenis_treatment = j.id
            JOIN user d ON a.id_dokter = d.id
            JOIN user c ON a.id_dokter = c.id
            WHERE $id = a.id_cust
        SQL;
        $appointments = $db->executeNoBind($sql,true);
        return view('customer/cust_layout', ['url' => 'appointment/appointment_cust','appointments' => $appointments]);
    }

    static function create_appointment()
    {
        $model_jenis_treatment = new JenisTreatment();
        $model_user = new User();
        $jenis_treatments = $model_jenis_treatment->all();
        $dokters = $model_user->findAll('role','\'dokter\'');
        $user = $model_user->find($_SESSION['id']);
        return view('customer/cust_layout', ['url' => 'appointment/create_appointment', 
        'jenis_treatments' => $jenis_treatments, 
        'dokters' => $dokters,
        'user' => $user
    ]);
    }

    static function doCreateAppointment()
    {
        $model_appointment = new Appointment();
        $date = explode('/',$_POST['tanggal']);
        $date = implode('-',[$date[2],$date[0],$date[1]]);
        $result = $model_appointment->create([
            'keluhan' => $_POST['keluhan'],
            'tanggal' => $date,
            'jam' => $_POST['jam'],
            'id_cust' => $_SESSION['id'],
            'id_dokter' => $_POST['dokter'],
            'id_jenis_treatment' => $_POST['jenis_treatment']
        ]);
        if($result) {
            redirect(self::$baseurl . 'beranda-cust/appointment');
        }
        redirectWith(self::$baseurl . 'beranda-cust/appointment/create',json_encode(['message' => 'Appointment gagal']));
    }

    static function profile_cust()
    {
        $model_user = new User();
        $user = $model_user->find($_SESSION['id']);
        return view('customer/cust_layout', ['url' => 'profile/profile_cust', 'user' => $user]);
    }

    static function list_treatment()
    {
        $model_treatment = new JenisTreatment();
        $treatments = $model_treatment->all();
        return view('customer/cust_layout', ['url' => 'services/list_treatment', 'treatments' => $treatments]);
    }
    static function search_treatment()
    {
        $letters = $_GET['letters'];
        $db = new Database();
        $sql = "SELECT * FROM jenis_treatment WHERE LOWER(jenis) LIKE LOWER('%$letters%') ";
        $treatments = $db->executeNoBind($sql,true);
        return view('customer/cust_layout', ['url' => 'services/list_treatment', 'treatments' => $treatments]);
    }

    static function list_dokter()
    {
        $db = new Database();
        $sql = "SELECT u.*,j.* FROM user u JOIN jenis_treatment j ON u.spesialis = j.id WHERE role = 'dokter'";
        $dokters = $db->executeNoBind($sql,true);
        // var_dump($dokters);die;
        return view('customer/cust_layout', ['url' => 'services/list_dokter','dokters' => $dokters]);
    }
    static function search_dokter()
    {
        $letters = $_GET['letters'];
        $db = new Database();
        $sql = "SELECT u.*,j.* FROM user u JOIN jenis_treatment j ON u.spesialis = j.id WHERE LOWER(nama) LIKE LOWER('%$letters%') AND role = 'dokter'";
        $dokters = $db->executeNoBind($sql,true);
        return view('customer/cust_layout', ['url' => 'services/list_dokter', 'dokters' => $dokters]);
    }

}