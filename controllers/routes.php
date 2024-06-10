<?php 

// landing
Router::url('', 'get', 'LandingController::index');

// auth
Router::url('login', 'get', 'AuthController::login');
Router::url('login', 'post', 'AuthController::doLogin');

// Registrasi
Router::url('registrasi', 'get', 'AuthController::registrasi');
Router::url('registrasi', 'post', 'AuthController::doRegistrasi');

// Beranda
Router::url('beranda-dokter', 'get', 'BerandaController::beranda_dokter');
Router::url('beranda-cust', 'get', 'BerandaController::beranda_cust');
Router::url('beranda-staff', 'get', 'BerandaController::beranda_staff');

// Appointment
Router::url('beranda-cust/appointment', 'get', 'CustController::appointment_cust');
Router::url('create-appointment', 'post', 'CustController::doCreateAppointment');
Router::url('beranda-dokter/appointment', 'get', 'DokterController::appointment_dokter');
Router::url('beranda-staff/appointment', 'get', 'StaffController::appointment_staff');

// Create Appointment
Router::url('beranda-cust/appointment/create', 'get', 'CustController::create_appointment');
// Detail Appointment
Router::url('beranda-staff/appointment/detail', 'get', 'StaffController::detail_appointment');
Router::url('beranda-dokter/appointment/detail', 'get', 'DokterController::detail_appointment');

// Profile
Router::url('beranda-cust/profile', 'get', 'CustController::profile_cust');
Router::url('beranda-dokter/profile', 'get', 'DokterController::profile_dokter');
Router::url('beranda-staff/profile', 'get', 'StaffController::profile_staff');

// Servies
// List Treatment
Router::url('beranda-cust/list-treatment', 'get', 'CustController::list_treatment');
Router::url('beranda-dokter/list-treatment', 'get', 'DokterController::list_treatment');
Router::url('beranda-staff/list-treatment', 'get', 'StaffController::list_treatment');
// List Dokter
Router::url('beranda-cust/list-dokter', 'get', 'CustController::list_dokter');
Router::url('beranda-dokter/list-dokter', 'get', 'DokterController::list_dokter');
Router::url('beranda-staff/list-dokter', 'get', 'StaffController::list_dokter');

//Utils
Router::url('fresh', 'get', 'LandingController::fresh');
Router::url('search', 'post', 'AjaxController::search');
Router::url('search-date', 'post', 'AjaxController::searchDate');

//Logout
Router::url('logout', 'get', 'AuthController::logout');
