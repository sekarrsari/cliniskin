<?php 

include_once 'function/main.php';
include_once 'app/config/static.php';

class CustController {
    static function appointment_cust()
    {
        return view('customer/cust_layout', ['url' => 'appointment/appointment_cust']);
    }

    static function create_appointment()
    {
        return view('customer/cust_layout', ['url' => 'appointment/create_appointment']);
    }

    static function profile_cust()
    {
        return view('customer/cust_layout', ['url' => 'profile/profile_cust']);
    }

    static function list_treatment()
    {
        return view('customer/cust_layout', ['url' => 'services/list_treatment']);
    }

    static function list_dokter()
    {
        return view('customer/cust_layout', ['url' => 'services/list_dokter']);
    }

}