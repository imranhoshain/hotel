<?php
include_once '../../../vendor/autoload.php';
$admin = new App\admin\auth\Auth();
$images = new App\helpers\Images();
$_POST['image'] = $images->upload();
$admin->set($_POST)->store();
