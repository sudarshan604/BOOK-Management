var span1= document.getElementById('span1'); 

var passCheck=document.getElementById('span2');

var passCheck1=document.getElementById('span3');

var checkForm=document.getElementById('btn');

checkForm.addEventListener('click',function(e)
{
   //pattern for name
  let pattName =/^[\w]{1}[a-zA-Z(0-9)?]{1,9}$/;
  let userName= document.getElementById('name').value;

  if(pattName.test(userName))
  {
 
   span1.innerHTML= "<h2>**pttern mtch</h2>"; 
  span1.style.color='green';

}        
 else
{    
 //stop the defult event
e.preventDefault();
 span1.innerHTML= "<h2>**only match tart with word charatcer(alphanumeric&undercore) & a-zA-Z and optional 0-9 digit only 10 chrcter </h2>" 
 span1.style.color='red';     
}

});

checkForm.addEventListener('click',function(e)
{
   //pattern for password
 
   var pattPassword = /^[\w]{6}$/;
   var userPassword=document.getElementById('password').value;
   var userPassword1=document.getElementById('password1').value;

  


   if(userPassword1!= userPassword)
  {
  
    passCheck.innerHTML= "<h2>**pasword not match</h2>"; 
      passCheck.style.color='red';
     passCheck1.innerHTML= "<h2>**pasword not match</h2>"; 
       passCheck1.style.color='red';
     e.preventDefault();
    }
  else if(pattPassword.test(userPassword))
  {
 
    passCheck.innerHTML= "<h2>**pttern mtch</h2>"; 
    passCheck.style.color='green';
  passCheck1.innerHTML= "<h2>**pattern match</h2>"; 
  passCheck1.style.color='green';
}        
 else
{    
 //stop the defult event

 passCheck.innerHTML= "<h2>**incorrect pattern match should be be  6 long word chrcter</h2>" 
 passCheck.style.color='red';     
 passCheck1.innerHTML= "<h2>**incorrect pattern only match should be  6 long word chrcter</h2>" 
 passCheck1.style.color='red';     


 e.preventDefault();
}
});




