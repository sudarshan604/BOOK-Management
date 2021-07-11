<?php     

session_start();


  $username=$_POST['username'];
 
 $userpassword=$_POST['userpassword'];
 
 
  
  $conn =mysqli_connect("localhost","root",'','db2');

  
 $sql ="SELECT *from createac where  name='$username' && password='$userpassword'";

 $result=mysqli_query($conn,$sql);
   if($result)
   {
     echo'connection succefully';
   }
   else
   {
     echo mysqli_error($conn1);
   }
 $num =mysqli_num_rows($result);
 
  
 if($num==1)
   {
   
    
    $_SESSION['username']=$username;
    header( 'Location:../home.php' );    

   }
  else
  {
   
     header('location:../index.html');   
  

  }


?>