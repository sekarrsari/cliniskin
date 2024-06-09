<?php 

include_once 'function/main.php';
include_once 'app/config/static.php';

class AuthController {
    private static $baseurl = '/cliniskin/';
    static function login()
    {
        return view('auth/auth_layout', ['url' => 'login']);
    }

    static function doLogin()
    {
        $model_user = new User();
        $result = $model_user->find($_POST['email'],'email');
        if($result && $result['password'] == $_POST['password']){
            $_SESSION['id'] = $result['id'];
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
        session_destroy();
        redirect(self::$baseurl);
    }
}