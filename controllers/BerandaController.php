<?php 

include_once 'function/main.php';
include_once 'app/config/static.php';

class BerandaController {
    static function beranda_dokter()
    {
        return view('beranda/dokter/dokter_layout', ['url' => 'beranda_dokter']);
    }

    static function beranda_cust()
    {
        return view('beranda/customer/cust_layout', ['url' => 'beranda_cust']);
    }

    static function beranda_staff()
    {
        return view('beranda/staff/staff_layout', ['url' => 'beranda_staff']);
    }
}