<?php 

include_once 'function/main.php';
include_once 'app/config/static.php';

class LandingController {
    static function index()
    {
        return view('landing/landing_layout', ['url' => 'landing_page']);
    }
    static function fresh()
    {
        $seeder = new Seeder(new Database());
        if($seeder->fresh()) {
            echo 'FRESH!';exit;
        }
        echo 'NOT FRESH!';exit;
    }
}