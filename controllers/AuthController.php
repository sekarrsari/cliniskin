<?php 

include_once 'function/main.php';
include_once 'app/config/static.php';

class AuthController {
    private static $baseurl = '/cliniskin/';
    static function login()
    {
        if(isset($_COOKIE['remember-cust'])) {
            $_SESSION['id'] = $_COOKIE['remember-cust'];
            redirect('beranda-cust');
            die;
        }
        if(isset($_COOKIE['remember-dokter'])) {
            $_SESSION['id'] = $_COOKIE['remember-dokter'];
            redirect('beranda-dokter');
            die;
        }
        if(isset($_COOKIE['remember-staff'])) {
            $_SESSION['id'] = $_COOKIE['remember-staff'];
            redirect('beranda-staff');
            die;
        }
        return view('auth/auth_layout', ['url' => 'login']);
    }

    static function doLogin()
    {
        $model_user = new User();
        $result = $model_user->find($_POST['email'],'email');
        if($result && $result['password'] == $_POST['password']){
            $_SESSION['id'] = $result['id'];
            if(isset($_POST['remember'])) {
                setcookie('remember-' . $result['role'],$_SESSION['id'],time() + 86400);
            }
            redirect(self::$baseurl . 'beranda-' . $result['role']);
        }
        redirectWith(self::$baseurl . 'login',json_encode(['message' => 'Username atau password salah']));
    }
    static function registrasi()
    {
        return view('auth/auth_layout', ['url' => 'registrasi']);
    }
    static function doRegistrasi()
    {
        $model_user = new User();
        $result = $model_user->create([
            'nama' => $_POST['nama'],
            'no_telp' => $_POST['no_telp'],
            'email' => $_POST['email'],
            'alamat' => $_POST['alamat'],
            'password' => $_POST['password'],
        ]);
        if($result) {
            redirect(self::$baseurl . 'login');
        }
        redirectWith(self::$baseurl . 'registrasi',json_encode(['message' => 'Registrasi gagal']));
    }
    static function logout() {
        if(isset($_COOKIE['remember-cust'])) unset($_COOKIE['remember-cust']);
        if(isset($_COOKIE['remember-dokter'])) unset($_COOKIE['remember-dokter']);
        if(isset($_COOKIE['remember-staff'])) unset($_COOKIE['remember-staff']);
        session_destroy();
        redirect(self::$baseurl);
    }
}