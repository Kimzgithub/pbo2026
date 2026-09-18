<?php


require_once '../Site/HomePage.php';
require_once '../Site/Admin/HomePage.php';


$hp = new \App\Site\Guest\HomePage();
$hp->tampil();
