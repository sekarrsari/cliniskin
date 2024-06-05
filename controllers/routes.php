<?php 

// landing
Router::url('', 'get', 'LandingController::index');

// auth
Router::url('login', 'get', 'AuthController::login');

Router::url('registrasi', 'get', 'AuthController::registrasi');
Router::url('registrasi-dokter', 'get', 'AuthController::registrasi_dokter');
Router::url('registrasi-staff', 'get', 'AuthController::registrasi_staff');
Router::url('registrasi-cust', 'get', 'AuthController::registrasi_cust');

// Beranda
Router::url('beranda-dokter', 'get', 'BerandaController::beranda_dokter');
Router::url('beranda-cust', 'get', 'BerandaController::beranda_cust');
Router::url('beranda-staff', 'get', 'BerandaController::beranda_staff');