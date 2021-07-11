<html>
   <head> 
   <link rel="stylesheet" href="../style/register.css"> 

  <style>
      #heading{ 
  text-align: center;
  color: white;
  text-transform: uppercase;
  padding: 1px;
  font-family: 'Raleway', cursive;
  font-weight: 100;
  position: relative;
  background: -webkit-linear-gradient(left, black, #eee, black);
  background: -moz-linear-gradient(left, black, #eee, black);
  background: -ms-linear-gradient(left, black, #eee, black);
  background: -o-linear-gradient(left, black, #eee, black);
}
  </style>
  </head>
   <body>
   <h1 id="heading">Book management system</h1>
    
   <div class="container">  
     <h1>Register page</h1> 
   <form action="registration.php" method='post'>
      <p>fill up the form with correct value</p>
    <table>
     
       <tr>
         <td>Username</td>
      <td> <input type="text" id='name'name="username">
      <span id="span1"></span> </td>       
      
    </tr>
     
       <tr>
         <td>Password</td>
      <td> <input type="password" id='password'name="userpassword">
      <span id="span2"></span>
    </td>       
       </tr>
       <tr>
         <td>retype Password</td>
      <td> <input type="password" id='password1' name="userpassword">
      <span id="span3"></span>
    </td>       
       </tr>
       <tr>
         <td></td>
      <td> <input type="submit" id='btn'name="btn" value="signup"></td>       
       </tr>
     
    
     </table>
   
   
   </form>

   <h3>already register do you want to login
         
         <a href="../index.html">click here</a>
    </h3>   
</div>
   
<script src="validate.js"></script>  

</body>
 
 </html>