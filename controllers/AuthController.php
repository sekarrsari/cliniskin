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
            redirect(self::$baseurl . 'beranda-' . $result['role']);
        }
        redirectWith(self::$baseurl . 'login',json_encode(['message' => 'Username atau password salah']));
    }
    static function registrasi()
    {
        return view('auth/auth_layout', ['url' => 'registrasi']);
    }

}