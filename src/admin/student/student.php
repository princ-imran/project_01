<?php
namespace App\admin\student;
session_start();
use App\Connection;
use PDOException;
class Student extends Connection{
    private $roll;
    private $name;
    private $email;
    private $phone;
    private $department;
    public function set($data = array()){
        if(array_key_exists('roll',$data)){
            $this->roll = $data['roll'];
        }
        if(array_key_exists('name',$data)){
            $this->name = $data['name'];
        }
        if(array_key_exists('email',$data)){
            $this->email = $data['email'];
        }
        if(array_key_exists('phone',$data)){
            $this->phone = $data['phone'];
        }
        if(array_key_exists('department',$data)){
            $this->department = $data['department'];
        }
        //return $this;
    }
    public function store(){
        try {
            $stmt = $this->con->prepare("INSERT INTO `student_info`(`roll`,`name`,`email`,`phone`,`department`) VALUES(:r,:n,:e,:p,:d)");
            $result = $stmt->execute(array(
                ':r' => $this->roll,
                ':n' => $this->name,
                ':e' => $this->email,
                ':p' => $this->phone,
                ':d' => $this->department
            ));
            if($result){
                $_SESSION['msg'] = 'DATA successfully Inserted!!';
                header('location: index.php');
            }            
        }
        catch (PDOException $e){
                print "Error!: " . $e->getMessage() . "<br>";
                die();
            }
    }
    
}
?>