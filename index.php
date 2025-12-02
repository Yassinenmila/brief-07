<?php 
include_once __DIR__ . "/assets/library.php";

$pages=['about','contact','home','services'];

$data= json_decode(file_get_contents(__DIR__."/data/data_service.json"));



$page=page_manipul($pages,'home');

 include __DIR__ .'/templates/layout.php';

?>