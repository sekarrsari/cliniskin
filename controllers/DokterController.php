<?php 

include_once 'function/main.php';
include_once 'app/config/static.php';

class DokterController {
    private static $baseurl = '/cliniskin/';

    static function appointment_dokter()
    {
        $db = new Database();
        $sql = <<<SQL
            SELECT a.id, a.tanggal, a.jam, d.nama AS dokter, j.jenis FROM appointment a
            JOIN jenis_treatment j ON a.id_jenis_treatment = j.id
            JOIN user d ON a.id_dokter = d.id
            JOIN user c ON a.id_dokter = c.id
        SQL;
        $appointments = $db->executeNoBind($sql,true);
        return view('dokter/dokter_layout', ['url' => 'appointment/appointment_dokter','appointments' => $appointments]);
    }

    static function detail_appointment()
    {
        $id = $_GET['id'];
        $db = new Database();
        $sql = <<<SQL
        SELECT a.id, a.status, c.nama as nama, c.no_telp, a.tanggal, a.jam, a.keluhan, d.nama AS dokter, j.jenis FROM appointment a
        JOIN jenis_treatment j ON a.id_jenis_treatment = j.id
        JOIN user d ON a.id_dokter = d.id
        JOIN user c ON a.id_cust = c.id
        WHERE a.id = $id
        SQL;
        $appointment = $db->executeNoBind($sql);
        return view('dokter/dokter_layout', ['url' => 'appointment/detail_appointment','appointment' => $appointment]);
    }

    static function profile_dokter()
    {
        $db = new Database();
        $sql = <<<SQL
        SELECT * FROM user u
        JOIN jenis_treatment j ON u.spesialis = j.id
        SQL;
        $user = $db->executeNoBind($sql);
        return view('dokter/dokter_layout', ['url' => 'profile/profile_dokter', 'user' => $user]);
    }

    static function list_treatment()
    {
        $model_treatment = new JenisTreatment();
        $treatments = $model_treatment->all();
        return view('dokter/dokter_layout', ['url' => 'services/list_treatment', 'treatments' => $treatments]);
    }
    static function search_treatment()
    {
        $letters = $_GET['letters'];
        $db = new Database();
        $sql = "SELECT * FROM jenis_treatment WHERE LOWER(jenis) LIKE LOWER('%$letters%') ";
        $treatments = $db->executeNoBind($sql,true);
        return view('dokter/dokter_layout', ['url' => 'services/list_treatment', 'treatments' => $treatments]);
    }
    static function list_dokter()
    {
        $db = new Database();
        $sql = "SELECT u.*,j.* FROM user u JOIN jenis_treatment j ON u.spesialis = j.id WHERE role = 'dokter'";
        $dokters = $db->executeNoBind($sql,true);
        return view('dokter/dokter_layout', ['url' => 'services/list_dokter','dokters' => $dokters]);
    }
    static function search_dokter()
    {
        $letters = $_GET['letters'];
        $db = new Database();
        $sql = "SELECT u.*,j.* FROM user u JOIN jenis_treatment j ON u.spesialis = j.id WHERE LOWER(nama) LIKE LOWER('%$letters%') AND role = 'dokter'";
        $dokters = $db->executeNoBind($sql,true);
        return view('dokter/dokter_layout', ['url' => 'services/list_dokter', 'dokters' => $dokters]);
    }

}