<?php
namespace App\admin\auth;
use App\helpers\Connection;
use PDO;
Use PDOException;
/**
 * Login authorization class
 */
class Auth extends Connection
{
    private $id;
    private $username;
    private $email;
    private $password;
    private $confirm;
    private $image;
    private $terms;
    //Set Method
    public function set($data = array())
    {
        if (array_key_exists('id', $data)) {
            $this->id = $data['id'];
        }
        if (array_key_exists('username', $data)) {
            $this->username = $data['username'];
        }
        if (array_key_exists('email', $data)) {
            $this->email = $data['email'];
        }
        if (array_key_exists('password', $data)) {
            $this->password = $data['password'];
        }
        if (array_key_exists('confirm', $data)) {
            $this->confirm = $data['confirm'];
        }
        if (array_key_exists('image', $data)) {
            $this->image = $data['image'];
        }
        if (array_key_exists('terms', $data)) {
            $this->terms = $data['terms'];
        }
        return $this;
    }

    //User Insert Database
    public function store()
    {
        try {
            $stmt = $this->con->prepare("INSERT INTO `auth`(`username`, `email`, `password`, `confirm`, `image`, `terms`) VALUES(:username, :email, :password, :confirm, :image, :terms)");
            
            $result = $stmt->execute(array(
                ':username' => $this->username,
                ':email' => $this->email,
                ':password' => $this->password,
                ':confirm' => $this->confirm,
                ':image' => $this->image,
                ':terms' => $this->terms
                
            ));
            
            if ($result) {
                $_SESSION['insert'] = ' Registration successfully !!';
                header('location: sign-in.php');
            }
        }
        catch (PDOException $e) {
            print "Error!: " . $e->getMessage() . "<br/>";
            die();
        }
    }
    
    
    //All User show
    public function index()
    {
        try {
            
            $stmt = $this->con->prepare("SELECT * FROM `auth` WHERE `deleted_at` = '0000-00-00 00:00:00'"); //update table name
            $stmt->execute();
            return $stmt->fetchAll(PDO::FETCH_ASSOC);
            
        }
        catch (PDOException $e) {
            print "Error!: " . $e->getMessage() . "<br/>";
            die();
        }
    }

    public function login(){
        try {

            $stm =  $this->con->prepare("SELECT * FROM `auth` WHERE :email IN (username, email) AND password=:password");
            $stm->bindValue(':email', $this->username, PDO::PARAM_STR);
            $stm->bindValue(':email', $this->email, PDO::PARAM_STR);
            $stm->bindValue(':password', $this->password, PDO::PARAM_STR);
            $stm->execute();
            $registration = $stm->fetch(PDO::FETCH_ASSOC);            

            if(!empty($registration['id'])){
                $_SESSION['email'] = $registration['email'];             
                $_SESSION['username'] = $registration['username'];             
                $_SESSION['image'] = $registration['image'];             
                               
                header('location: ../../../admin.php');
            }
        }
        catch (PDOException $e) {
            print "Error!: " . $e->getMessage() . "<br/>";
            die();
        }
     }

    
    /**********Temporary Data Delete Function***********/
    
    public function tmp_delete($id)
    {
        try {
            $query = ("UPDATE `fund` SET `deleted_at` = NOW() WHERE unique_id = :id");
            $stmt  = $this->con->prepare($query);
            $stmt->bindValue(':id', $id, PDO::PARAM_STR);
            $stmt->execute();
            if ($stmt) {
                $_SESSION['delete'] = 'Data successfully Updated !!';
                header('location: index.php');
            }
            
        }
        catch (Exception $e) {
            print "Error!: " . $e->getMessage() . "<br/>";
            die();
        }
        
    }
    
    
    
    public function trash()
    {
        try {
            
            $stm = $this->con->prepare("SELECT * FROM `fund` WHERE `deleted_at` != '0000-00-00 00:00:00'");
            $stm->execute();
            return $stm->fetchAll(PDO::FETCH_ASSOC);
            
        }
        catch (PDOException $e) {
            print "Error!: " . $e->getMessage() . "<br/>";
            die();
        }
    }
    
    
    
    public function restore($id)
    {
        try {
            $query = ("UPDATE `fund` SET `deleted_at` = '0000-00-00 00:00:00' WHERE unique_id = :id");
            $stmt  = $this->con->prepare($query);
            $stmt->bindValue(':id', $id, PDO::PARAM_STR);
            $stmt->execute();
            if ($stmt) {
                $_SESSION['delete'] = 'Data successfully Updated !!';
                header('location: trash.php');
            }
            
        }
        catch (Exception $e) {
            print "Error!: " . $e->getMessage() . "<br/>";
            die();
        }
        
    }
    
}