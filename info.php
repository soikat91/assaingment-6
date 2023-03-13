<?php
date_default_timezone_set('Asia/Dhaka');

if($_SERVER['REQUEST_METHOD']=='POST'){
    
    $name=$_POST['name'];
    $email=$_POST['email'];
    $password=$_POST['password'];
    $image=$_FILES['image'];

    if(empty($name) || empty($email) || empty($password) || empty($image)){      
        
        echo "All fields are Required";       
    } 

    if(!filter_var($email,FILTER_VALIDATE_EMAIL)){
        echo "Email Format is not Valid ";
    }

  $uploadsDirectory = 'uploads/';

  $profilePictureName =uniqid().'_'.date('Y.m.d_H-i-s'). '_' .$image["name"];
  $profilePicturePath = $uploadsDirectory . $profilePictureName;

  if (!move_uploaded_file($image['tmp_name'], $profilePicturePath)) {
    die('Failed to upload profile picture.');
  }

  $userdata=array($name,$email,$profilePictureName);

  $fileName=fopen('users.csv','a');

  fputcsv($fileName,$userdata);
  fclose($fileName);
 
  session_start();
  setcookie('name',$name);
  header('Location:displayInfo.php');
  exit();

}



