<?php
if(isset($_POST['register'])){


    require 'connection.php';
    
    
    $name = $_POST['Name'];
    $age = $_POST['Age'];
    $gender = $_POST['gen'];
    $Dob = $_POST['date'];
    $address = $_POST['adrs'];
    $phoneno = $_POST['phno'];
    $email = $_POST['mail'];
    $username = $_POST['name'];
    $password = $_POST['pass'];
    $cpassword = $_POST['cpass'];

    if(empty($name) || empty($age) || empty($gender) || empty($Dob) || empty($address) || empty($phoneno) || empty($email) || empty($username) || empty($password) || empty($cpassword))
    {
        header("Location: ../register.html?error=emptyfields");
        exit();
    }
   
    elseif($password!==$cpassword){
        header("Location: ../register.html?error=passwordcheck");
exit(); 
    }

    else{
     $sql = "INSERT INTO cust_details(Name,Age,Gender,Dob,Address,Phone_num,Email,Username,Password,Cpassword) VALUES($name,$age,$gender,$Dob,$address,$phoneno,$email,$username,$password,$cpassword)";
     $run = mysqli_query($conn,$sql);
     
        }
    }

        ?>