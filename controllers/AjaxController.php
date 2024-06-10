<?php

include_once 'function/main.php';
include_once 'app/config/static.php';

class AjaxController
{
    private static $baseurl = '/cliniskin/';

    static function search()
    {
        $letters = $_POST['letters'];
        $id = $_SESSION['id'];
        $sql = " SELECT a.tanggal, a.jam, d.nama AS dokter, j.jenis FROM appointment a JOIN jenis_treatment j ON a.id_jenis_treatment = j.id JOIN user d ON a.id_dokter = d.id JOIN user c ON a.id_cust = c.id WHERE (a.id_cust = $id) AND (a.tanggal LIKE '%$letters%' OR a.jam LIKE '%$letters%') OR LOWER(d.nama) LIKE '%$letters%' OR j.jenis LIKE '%$letters%'";
        $database = new Database();
        $appointments = $database->executeNoBind($sql,true);
        echo json_encode($appointments);
    }
    static function searchDate()
    {
        if(empty($_POST['letters'])) {
            echo json_encode('');
        } else {
            $date = explode('/',$_POST['letters']);
            $letters = implode('-',[$date[2],$date[1],$date[0]]);
            $sql = " SELECT a.tanggal, a.jam, d.nama AS dokter, j.jenis FROM appointment a JOIN jenis_treatment j ON a.id_jenis_treatment = j.id JOIN user d ON a.id_dokter = d.id JOIN user c ON a.id_cust = c.id WHERE a.tanggal LIKE '%$letters%'";
            $database = new Database();
            $appointments = $database->executeNoBind($sql,true);
            echo json_encode($appointments);
        }
    }
}

?>