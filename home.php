
  <?php
   session_start();  
   if(!isset($_SESSION['username']))
     header('location:http://localhost/login/login.php');
   
 
 ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
 <link rel="stylesheet" href="style/home.css"/>
</head>
<body>
  <h1>WELCOME to BOOK MANAGEMENT SYSTEM</h1> 
<div class="container"> 
<h2>hello,<?php echo $_SESSION['username'];?></h2> 
 
 <table>
      <tr>
          <th><h2>View List of book</h2></th>
           <th><a class="btn1 btn"href="view.php">click here</a></th>
    </tr>
<tr>
<th><h2>Update List of book</h2></th>
          <th><a class="btn2 btn"href="updateform.php">click here</a></th>
</tr>
  <tr>
  <th> <h2>DeleteList of book</h2></th>
      <th><a class="btn3 btn" href="deleteform.php">click here</a></th>     
  </tr> 
 <tr>
 <th><h2>Insert List of book</h2></th>
      <th><a class="btn4 btn" href="insertform.php">click here</a></th>
 </tr>
 <tr>
  <td  style="text-align:center"colspan='4'><a  class="btn5 btn"href='login/logout.php'>logout</a></td>   
</tr>
</table>



  
     

  
    
</div>
</body>
</html>