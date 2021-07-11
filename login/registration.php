<?php 
  $name=$_POST['username'];
  $pass=$_POST['userpassword'];


   $conn=mysqli_connect('localhost','root','');
  $sql="CREATE DATABASE db2";
   
  $result = mysqli_query($conn,$sql);
 if($result)
  {
      echo'succefully create database';
  }
 $conn=mysqli_connect('localhost','root','','db2');


$sql="CREATE TABLE createac(sn INT(6) NOT NULL AUTO_INCREMENT,
 name varchar(20) NOT NULL,
 password CHAR(60) NOT NULL,
PRIMARY KEY(sn)
 )";

  $result=mysqli_query($conn,$sql);

  if($result)
  {
      echo'table created';
  }
  else
    echo "error-->".mysqli_error($conn);

   if(isset($_POST['btn']))
   {
    $q = "INSERT INTO createac(name,password) values('$name','$pass')";

     $sql=mysqli_query($conn,$q);

   }
  if($sql)
    {
        echo 'succfully inserted';
    }

?>