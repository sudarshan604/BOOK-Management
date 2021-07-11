<?php 
  $size = sizeof($_POST);

  $j=1;

   for($i=1;$i<=$size;$i++,$j++)
   {
      
     $index="del".$j;  
   if(isset($_POST[$index]))
   {
     $b_id[$i]=$_POST[$index];
   }
  else
      $i--;   
 }
 
 $conn=mysqli_connect('localhost','root','','db1');

 for($k=1;$k<=$size;$k++)
 { 
 $q="DELETE FROM book where bookid=".$b_id[$k];
 mysqli_query($conn,$q);
}
//   mysqli_close($conn); 
 ?>
 <!DOCTYPE html>
 <html lang="en">
 <head>
     <meta charset="UTF-8">
     <meta http-equiv="X-UA-Compatible" content="IE=edge">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <title>DEletion</title>
      <link rel="stylesheet"  href ="./style/view-style.css"/> 
    </head>
 <body>
      <h1>Book record management</h1>
    <P><?php echo $size."record deleted"?></p>

    go back to home page<a href="home.php">click here</a>
   
        
</body>
</html>