  <?php

    $conn=mysqli_connect('localhost','root','','db1');
    
     $q="SELECT * from book";
    
    $result=mysqli_query($conn,$q);
 
   $num = mysqli_num_rows($result); 


?>

<!DOCTYPE html>
 <html lang="en">
 <head>
     <meta charset="UTF-8">
     <meta http-equiv="X-UA-Compatible" content="IE=edge">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <title>Document</title>
      <link rel="stylesheet"  href ="./style/view-style.css"/> 
    </head>
 <body>
      <h1>Book record management</h1>
    <table id='tables'>
         <tr>
              <th>BOOK ID</th>
              <th>TITLE</th>
              <th>PRICE</th>
              <th>AUTHOR</th>
         </tr>
        <?php 
           for($i=1;$i<=$num;$i++)
           {

           $row=mysqli_fetch_array($result);
           
           ?>
          <tr>
               <td><?php echo $row['bookid']?></td>
                <td><?php echo $row['TITLE']?></td>
                <td><?php echo $row['PRICE']?></td>
               <td><?php echo $row['author']?></td>
            </tr>
            
        <?Php
           }
        ?>
    
   </table>
   <br>
  do you want to return home page<a href="home.php">click here</a>
</body>
</html>