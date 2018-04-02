<?php
namespace App\helpers;
use PDO;
use PDOException;
/**
* Images Class
*/
class Images extends Connection
{
	
	public function image_upload($file){
		$file_name = $_FILES[$file]['name'];
		$tmp_name = $_FILES[$file]['tmp_name'];
	}
}