<?php
include_once '../../../vendor/autoload.php';
$users = new App\front\auth\Auth();
$users->set($_POST)->store();
