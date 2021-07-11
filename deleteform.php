
  


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
      <form action="deletion.php" method="POST">
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
               <td><input type="checkbox" value="<?php echo$row['bookid']?>" name='del<?php echo$i; ?>'/></td>
            </tr>
            
        <?Php
           }
        ?>
          <tr colspan="5"> <td><input type="submit" value="delete">
        </td></tr>
        </table>
        </form>
</body>
</html>