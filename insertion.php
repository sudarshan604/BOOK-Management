<?php
$title=$_POST['title'];
$price=$_POST['price'];
$author=$_POST['author'];

 $conn=mysqli_connect('localhost','root','','db1');

 // ********* uncomment to create table and database ********
  
 
 
   $sql="CREATE DATABASE db1";
   
  $result = mysqli_query($conn,$sql);
 if($result)
  {
      echo'succefully create database';
  }

 $sql="CREATE TABLE book(bookid INT(6) NOT NULL AUTO_INCREMENT,
 TITLE VARCHAR(20)NOT NULL,
 PRICE FLOAT(7,2) NOT NULL,
 author VARCHAR(20),PRIMARY KEY(bookid)
 )";

  $result=mysqli_query($conn,$sql);

  if($result)
  {
      echo'table created';
  }
  else
    echo mysqli_error($conn);


    $q = "INSERT INTO book(title,price,author) values('$title',$price,'$author')";
   
 $status=mysqli_query($conn,$q);
  mysqli_close($conn);
?>

 <!DOCTYPE html>
 <html lang="en">
 <head>
     <meta charset="UTF-8">
     <meta http-equiv="X-UA-Compatible" content="IE=edge">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <title>Document</title>
 </head>
 <body>
      <h1>Book record management</h1>
      
      <p><?php if($status)
           echo 'Record inserted';
          else
            echo 'insertion failed';
      
      ?></p>
  do you want to insert more record?<a href="insertform.php">Click here</a> 
  <br>
  do you want to return home page<a href="home.php">click here</a>
</body>
 </html>
