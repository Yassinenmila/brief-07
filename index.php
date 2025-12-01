<?php 
include_once __DIR__ . "/assets/library.php";

$pages=['about','contact','home','services'];

$page=page_manipul($pages,'home');

 include __DIR__ .'/templates/layout.php';

?>