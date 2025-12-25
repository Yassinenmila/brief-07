<?php 
session_start();

require_once __DIR__. "/data/SGBD.php";

require_once __DIR__ . "/assets/library.php";

$data= json_decode(file_get_contents(__DIR__."/data/data_service.json"));

$pages=['about','contact','home','services','login','sign_up','profil'];
 
$page=trim($_SERVER['REQUEST_URI'],  '/');

$page=$page?:'home';

if(!in_array($page,$pages)){
    $page='404';
}

 require_once __DIR__ .'/templates/layout.php';

?>