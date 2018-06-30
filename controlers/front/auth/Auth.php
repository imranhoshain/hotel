<?php
namespace App\front\auth;
use App\helpers\Connection;
use PDO;
Use PDOException;
/**
 * Login authorization class
 */
class Auth extends Connection
{
    private $id;
    private $name;
    private $email;
    private $phone;
    private $password;
    private $confirm;    
    private $terms;
    //Set Method
    public function set($data = array())
    {
        if (array_key_exists('id', $data)) {
            $this->id = $data['id'];
        }
        if (array_key_exists('name', $data)) {
            $this->name = $data['name'];
        }
        if (array_key_exists('email', $data)) {
            $this->email = $data['email'];
        } 
        if (array_key_exists('phone', $data)) {
            $this->phone = $data['phone'];
        }
        if (array_key_exists('password', $data)) {
            $this->password = $data['password'];
        }
        if (array_key_exists('confirm', $data)) {
            $this->confirm = $data['confirm'];
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
            $stmt = $this->con->prepare("INSERT INTO `users`(`name`, `email`, `phone`, `password`, `confirm`, `terms`) VALUES(:name, :email, :phone, :password, :confirm, :terms)");
            
            $result = $stmt->execute(array(
                ':name' => $this->name,
                ':email' => $this->email,
                ':phone' => $this->phone,
                ':password' => $this->password,
                ':confirm' => $this->confirm,                
                ':terms' => $this->terms
                
            ));
            
            if ($result) {
                $_SESSION['insert'] = ' Registration successfully !!';
                header('location: login.php');
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
            
            $stmt = $this->con->prepare("SELECT * FROM `users` WHERE `deleted_at` = '0000-00-00 00:00:00'"); //update table name
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

            $stm =  $this->con->prepare("SELECT * FROM `users` WHERE :email IN (email, phone) AND password=:password");
            $stm->bindValue(':email', $this->phone, PDO::PARAM_STR);
            $stm->bindValue(':email', $this->email, PDO::PARAM_STR);
            $stm->bindValue(':password', $this->password, PDO::PARAM_STR);
            $stm->execute();
            $users = $stm->fetch(PDO::FETCH_ASSOC);            

            if(!empty($users['id'])){

                $_SESSION['email'] = $users['email'];
                $_SESSION['phone'] = $users['email'];

                header('location: ../../../views/front/auth/index.php');
            }
        }
        catch (PDOException $e) {
            print "Error!: " . $e->getMessage() . "<br/>";
            die();
        }
     }

}