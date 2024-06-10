<?php 

include_once 'function/main.php';
include_once 'app/config/static.php';

class StaffController {
    private static $baseurl = '/cliniskin/';

    static function appointment_staff()
    {
        $db = new Database();
        $sql = <<<SQL
            SELECT a.tanggal, a.jam, d.nama AS dokter, j.jenis FROM appointment a
            JOIN jenis_treatment j ON a.id_jenis_treatment = j.id
            JOIN user d ON a.id_dokter = d.id
            JOIN user c ON a.id_dokter = c.id
        SQL;
        $appointments = $db->executeNoBind($sql,true);
        return view('staff/staff_layout', ['url' => 'appointment/appointment_staff','appointments' => $appointments]);
    }

    static function detail_appointment()
    {
        $db = new Database();
        $sql = <<<SQL
        SELECT a.id, a.status, c.nama as nama, c.no_telp, a.tanggal, a.jam, a.keluhan, d.nama AS dokter, j.jenis FROM appointment a
        JOIN jenis_treatment j ON a.id_jenis_treatment = j.id
        JOIN user d ON a.id_dokter = d.id
        JOIN user c ON a.id_dokter = c.id
        SQL;
        $appointment = $db->executeNoBind($sql);
        return view('staff/staff_layout', ['url' => 'appointment/detail_appointment', 'appointment' => $appointment]);
    }

    static function profile_staff()
    {
        $model_user = new User();
        $user = $model_user->find($_SESSION['id']);
        return view('staff/staff_layout', ['url' => 'profile/profile_staff', 'user' => $user]);
    }

    static function list_treatment()
    {
        $model_treatment = new JenisTreatment();
        $treatments = $model_treatment->all();
        return view('staff/staff_layout', ['url' => 'services/list_treatment', 'treatments' => $treatments]);
    }
    static function search_treatment()
    {
        $letters = $_GET['letters'];
        $db = new Database();
        $sql = "SELECT * FROM jenis_treatment WHERE LOWER(jenis) LIKE LOWER('%$letters%') ";
        $treatments = $db->executeNoBind($sql,true);
        return view('staff/staff_layout', ['url' => 'services/list_treatment', 'treatments' => $treatments]);
    }
    static function list_dokter()
    {
        $db = new Database();
        $sql = "SELECT u.*,j.* FROM user u JOIN jenis_treatment j ON u.spesialis = j.id WHERE role = 'dokter'";
        $dokters = $db->executeNoBind($sql,true);
        return view('staff/staff_layout', ['url' => 'services/list_dokter','dokters' => $dokters]);
    }
    static function search_dokter()
    {
        $letters = $_GET['letters'];
        $db = new Database();
        $sql = "SELECT u.*,j.* FROM user u JOIN jenis_treatment j ON u.spesialis = j.id WHERE LOWER(nama) LIKE LOWER('%$letters%') AND role = 'dokter'";
        $dokters = $db->executeNoBind($sql,true);
        return view('staff/staff_layout', ['url' => 'services/list_dokter', 'dokters' => $dokters]);
    }
    static function update_appointment()
    {
        $model_appointment = new Appointment();
        $result = $model_appointment->update([
            'status' => $_POST['status']
        ],$_POST['id']);
        if($result) {
            redirect(self::$baseurl . 'beranda-staff/appointment');
        }
        redirectWith(self::$baseurl . 'beranda-staff/appointment/detail',json_encode(['message' => 'Appointment gagal']));
    }
    static function appointment_chart()
    {
        return view('staff/staff_layout', ['url' => 'appoint/list_dokter']);
    }
}