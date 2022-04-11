<?php
ini_set('display_startup_errors', 1);
ini_set('display_errors', 1);
error_reporting(-1);


$host_parent = $_SERVER['HTTP_HOST'];
$currentCookieParams = session_get_cookie_params(); 
@header('Access-Control-Allow-Origin: http://'.$host_parent);
$rootDomain = $host_parent; 
session_set_cookie_params( 
    $currentCookieParams["lifetime"], 
    $currentCookieParams["path"], 
    $rootDomain, 
    $currentCookieParams["secure"], 
    $currentCookieParams["httponly"] 
); 

session_name('bpilan'); 
@session_start(); 


$veritabani = 'pilanlidiyet_bpdb21';
$vt_kullanici = 'pilanlidiyet_dbusPilan';
$vt_sifre = 'emM6Fn@h(]c@';
$vt_host = "localhost";


$db = new mysqli($vt_host, $vt_kullanici, $vt_sifre, $veritabani);
$db->set_charset("utf8"); 

?>