<?php 
 $size=sizeof($_POST);
  $record =$size/4;
  $conn=mysqli_connect('localhost','root','','db1');

  for($i=1;$i<=$record;$i++)
{
   $index1="bookid".$i;
    $bookid[$i]=$_POST[$index1];
    $index2="title".$i;
    $title[$i]=$_POST[$index2];
    $index3="price".$i;
    $price[$i]=$_POST[$index3];
    $index4="author".$i;
    $author[$i]=$_POST[$index4];
}
   
 
for($i=1;$i<=$record;$i++){ 
      
    $q="UPDATE book SET TITLE='$title[$i]',PRICE=$price[$i],author='$author[$i]'
  where bookid=$bookid[$i]";
  mysqli_query($conn,$q); 
}
?>
<!DOCTYPE html>
 <html lang="en">
 <head>
     <meta charset="UTF-8">
     <meta http-equiv="X-UA-Compatible" content="IE=edge">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <title>updation</title>
      <link rel="stylesheet"  href ="./style/view-style.css"/> 
    </head>
 <body>
      <h1>Book record management</h1>
    <P><?php echo $size."record updation"?></p>

    go back to home page<a href="home.php">click here</a>
   
        
</body>
</html>