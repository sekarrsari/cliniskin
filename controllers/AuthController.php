<?php 

include_once 'function/main.php';
include_once 'app/config/static.php';

class AuthController {
    static function login()
    {
        return view('auth/auth_layout', ['url' => 'login']);
    }

    static function registrasi()
    {
        return view('auth/auth_layout', ['url' => 'registrasi']);
    }

    static function registrasi_dokter()
    {
        return view('auth/auth_layout', ['url' => 'registrasi_dokter']);
    }

    static function registrasi_staff()
    {
        return view('auth/auth_layout', ['url' => 'registrasi_staff']);
    }

    static function registrasi_cust()
    {
        return view('auth/auth_layout', ['url' => 'registrasi_cust']);
    }
}