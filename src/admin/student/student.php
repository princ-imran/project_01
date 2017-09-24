<?php
namespace App\admin\student;
if(!isset($_SESSION)){
    session_start();
}
use App\Connection;
use PDO;
use PDOException;
class Student extends Connection{
    private $roll;
    private $name;
    private $email;
    private $phone;
    private $department;
    private $id;
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
        if(array_key_exists('id',$data)){
            $this->id = $data['id'];
        }
        return $this;
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
                $_SESSION['store'] = 'DATA successfully Inserted!!';
                header('location: index.php');
            }            
        }
        catch (PDOException $e){
                print "Error!: " . $e->getMessage() . "<br>";
                die();
            }
    }
    public function index(){
        try {
            $query = ("SELECT * FROM `student_info`");
            $stmt = $this->con->prepare($query);
            $stmt->execute();
            return $stmt->fetchAll(PDO::FETCH_ASSOC);
            
        }
        catch (PDOException $e){
            print "Error!: " . $e->getMassage() . "<br>";
            die();
        }
    }
    public function view($id){
        try {
            $query = ("SELECT * FROM `student_info` WHERE id = :id");
            $stmt = $this->con->prepare($query);
            $stmt->bindValue(':id', $id, PDO::PARAM_INT);
            $stmt->execute();
            return $stmt->fetch(PDO::FETCH_ASSOC);
        }
        catch (PDOException $e){
            print "Error!: " . $e->getMessage() . "<br>";
            die();
        }
        
    }
    public function delete($id){
        try {
            $query = ("DELETE FROM `student_info` WHERE id = :id");
            $stmt = $this->con->prepare($query);
            $stmt->bindValue(':id', $id, PDO::PARAM_INT);
            $stmt->execute();
        
        if($stmt){
            $_SESSION['delete'] = "DATA has been DELECTED";
            header('location: index.php');
        }
    }
        catch (PDOExcepteion $e){
            print "Error!: " .$e->getMessage() . "<br>";
        }
    }
    public function update(){
        try {
            $query = ("UPDATE `student_info` SET `roll` = :roll, `name` = :name, `email` = :email, `phone` = :phone, `department` = :department WHERE `student_info`.`id` = :id;");
            $stmt = $this->con->prepare($query);
            $stmt->bindValue(':roll', $this->roll, PDO::PARAM_INT);
            $stmt->bindValue(':name', $this->name, PDO::PARAM_INT);
            $stmt->bindValue(':email', $this->email, PDO::PARAM_INT);
            $stmt->bindValue(':phone', $this->phone, PDO::PARAM_INT);
            $stmt->bindValue(':department', $this->department, PDO::PARAM_INT);
            $stmt->bindValue(':id', $this->id, PDO::PARAM_INT);
            $stmt->execute();
            if($stmt){
                $_SESSION['update'] = "Data update Successfully";
                header('location: index.php'); 
            }
        }
        catch (PDOException $e){
            print "ERROR!: " . $e->getMessage() . "<br>";
        }
        
    }
    
}
?>