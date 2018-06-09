<?php
namespace App\helpers;
use PDO;
use PDOException;
/**
* Images Class
*/
class Images extends Connection
{
	
	public function upload(){

        $img_name = $_FILES['image']['name'];
        $img_tmp_name = $_FILES['image']['tmp_name'];
        $genName = substr(md5(uniqid()),0,10);
        $tmp = explode('.',$img_name);        
		$extName = end($tmp);
        $_POST['image']  = $genName.'.'.$extName;
        move_uploaded_file($img_tmp_name,'../../../models/admin/images/'.$_POST['image']);

        return $_POST['image'];

    }
}