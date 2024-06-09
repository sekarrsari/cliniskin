<?php 

include_once 'function/main.php';
include_once 'app/config/static.php';

class StaffController {
    private static $baseurl = '/cliniskin/';

    static function appointment_staff()
    {
        return view('staff/staff_layout', ['url' => 'appointment/appointment_staff']);
    }

    static function detail_appointment()
    {
        return view('staff/staff_layout', ['url' => 'appointment/detail_appointment']);
    }

    static function profile_staff()
    {
        $model_user = new User();
        $user = $model_user->find($_SESSION['id']);
        return view('staff/staff_layout', ['url' => 'profile/profile_staff', 'user' => $user]);
    }

    static function list_treatment()
    {
        return view('staff/staff_layout', ['url' => 'services/list_treatment']);
    }

    static function list_dokter()
    {
        return view('staff/staff_layout', ['url' => 'services/list_dokter']);
    }

}