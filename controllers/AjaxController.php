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
        $sql = "SELECT a.tanggal, a.jam, d.nama AS dokter, j.jenis FROM appointment a JOIN jenis_treatment j ON a.id_jenis_treatment = j.id JOIN user d ON a.id_dokter = d.id JOIN user c ON a.id_cust = c.id WHERE (a.id_cust = $id) AND ((a.tanggal LIKE '%$letters%') OR (a.jam LIKE '%$letters%') OR (LOWER(d.nama) LIKE '%$letters%') OR (j.jenis LIKE '%$letters%'));";
        $database = new Database();
        $appointments = $database->executeNoBind($sql,true);
        echo json_encode($appointments);
    }
    static function searchDate()
    {
        if(empty($_POST['letters'])) {
            echo json_encode([]);
        } else {
            $id = $_SESSION['id'];
            $date = explode('/',$_POST['letters']);
            $letters = implode('-',[$date[2],$date[1],$date[0]]);
            $sql = " SELECT a.tanggal, a.jam, d.nama AS dokter, j.jenis FROM appointment a JOIN jenis_treatment j ON a.id_jenis_treatment = j.id JOIN user d ON a.id_dokter = d.id JOIN user c ON a.id_cust = c.id WHERE a.tanggal LIKE '%$letters%' AND c.id = $id";
            $database = new Database();
            $appointments = $database->executeNoBind($sql,true);
            echo json_encode($appointments);
        }
    }
    static function searchTime() 
    {
        $keyword = $_POST['keyword'];
        if(empty($keyword)) {
            echo json_encode('');
        } else {
            $id = $_POST['id'];
            switch ($keyword) {
                case 'last-day':
                    $sql = "SELECT a.tanggal, a.jam, d.nama AS dokter, j.jenis FROM appointment a JOIN jenis_treatment j ON a.id_jenis_treatment = j.id JOIN user d ON a.id_dokter = d.id JOIN user c ON a.id_cust = c.id WHERE CURDATE() = a.tanggal AND a.id_cust = $id;";
                    break;
                case '7':
                    $sql = "SELECT a.tanggal, a.jam, d.nama AS dokter, j.jenis FROM appointment a JOIN jenis_treatment j ON a.id_jenis_treatment = j.id JOIN user d ON a.id_dokter = d.id JOIN user c ON a.id_cust = c.id WHERE (a.tanggal BETWEEN DATE_ADD(NOW(), INTERVAL -7 DAY) AND NOW()) AND a.id_cust = $id;";
                    break;
                case '30':
                    $sql = "SELECT a.tanggal, a.jam, d.nama AS dokter, j.jenis FROM appointment a JOIN jenis_treatment j ON a.id_jenis_treatment = j.id JOIN user d ON a.id_dokter = d.id JOIN user c ON a.id_cust = c.id WHERE (a.tanggal BETWEEN DATE_ADD(NOW(), INTERVAL -30 DAY) AND NOW()) AND a.id_cust = $id;";
                    break;
                case 'last-month':
                    $sql = "SELECT a.tanggal, a.jam, d.nama AS dokter, j.jenis FROM appointment a JOIN jenis_treatment j ON a.id_jenis_treatment = j.id JOIN user d ON a.id_dokter = d.id JOIN user c ON a.id_cust = c.id WHERE MONTH(CURDATE())-1 = MONTH(a.tanggal) AND a.id_cust = $id;";
                    break;
                case 'last-year':
                    $sql = "SELECT a.tanggal, a.jam, d.nama AS dokter, j.jenis FROM appointment a JOIN jenis_treatment j ON a.id_jenis_treatment = j.id JOIN user d ON a.id_dokter = d.id JOIN user c ON a.id_cust = c.id WHERE YEAR(CURDATE())-1 = YEAR(a.tanggal) AND a.id_cust = $id;";
                    break;
            }
            $database = new Database();
            $appointments = $database->executeNoBind($sql,true);
            echo json_encode($appointments);
        }
    }
}

?>