<?php 

include_once 'function/main.php';
include_once 'app/config/static.php';

class DokterController {
    static function appointment_dokter()
    {
        return view('dokter/dokter_layout', ['url' => 'appointment/appointment_dokter']);
    }

    static function detail_appointment()
    {
        return view('dokter/dokter_layout', ['url' => 'appointment/detail_appointment']);
    }

    static function profile_dokter()
    {
        $model_user = new User();
        $user = $model_user->find($_SESSION['id']);
        return view('dokter/dokter_layout', ['url' => 'profile/profile_dokter', 'user' => $user]);
    }

    static function list_treatment()
    {
        return view('dokter/dokter_layout', ['url' => 'services/list_treatment']);
    }

    static function list_dokter()
    {
        return view('dokter/dokter_layout', ['url' => 'services/list_dokter']);
    }

}