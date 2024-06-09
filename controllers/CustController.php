<?php 

include_once 'function/main.php';
include_once 'app/config/static.php';

class CustController {
    private static $baseurl = '/cliniskin/';

    static function appointment_cust()
    {
        return view('customer/cust_layout', ['url' => 'appointment/appointment_cust']);
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
        return view('customer/cust_layout', ['url' => 'services/list_treatment']);
    }

    static function list_dokter()
    {
        return view('customer/cust_layout', ['url' => 'services/list_dokter']);
    }

}