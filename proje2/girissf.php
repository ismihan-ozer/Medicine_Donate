<?php
   include("config.php");
   
   $message="";
   if($_SERVER["REQUEST_METHOD"] == "POST") {
      // username and password sent from form 
      
      $myusername = mysqli_real_escape_string($database,$_POST['username']);
      $mypassword = mysqli_real_escape_string($database,$_POST['password']); 
      $query = "SELECT * FROM user WHERE UserName = '$myusername' and Password = '$mypassword'";
	  if (!($result = mysqli_query($database,$query) ) )
       { print( "Could not execute query! <br />" );
         die( "</body></html>" );
       } //
	   
      $row = mysqli_fetch_array($result,MYSQLI_ASSOC);//$row = mysqli_fetch_array($result,MYSQLI_NUM);
      $count = mysqli_num_rows($result);
      // If result matched $myusername and $mypassword, table row must be 1 row
      if($count == 1) {


        
         $message = "Welcome $myusername";
         }
		 else {
         $message = "Your UserName or Password is invalid";
		 
      }
   }
?>
<html>
   
   <head>
      <title>Login Page</title>
      
      <style type = "text/css">
          body {  
        margin: 0;  
        padding: 0;  
        background-color:#6abadeba;  
        font-family: 'Arial';  
    }  
    .login{  
            width: 382px;  
            overflow: hidden;  
            margin: auto;  
            margin: 20 0 0 450px;  
            padding: 80px;  
            background: #23463f;  
            border-radius: 15px ;  
              
    }  
    h2{  
        text-align: center;  
        color: #277582;  
        padding: 20px;  
    }  
    label{  
        color: #08ffd1;  
        font-size: 17px;  
    }  
    #Uname{  
        width: 300px;  
        height: 30px;  
        border: none;  
        border-radius: 3px;  
        padding-left: 8px;  
    }  
    #Pass{  
        width: 300px;  
        height: 30px;  
        border: none;  
        border-radius: 3px;  
        padding-left: 8px;  
          
    }  
   #log{  
        width: 300px;  
        height: 30px;  
        border: none;  
        border-radius: 17px;  
        padding-left: 7px;  
        color: blue;  
      
      
    }  
    span{  
        color: white;  
        font-size: 17px;  
    }  
    a{  
        float: right;  
        background-color: grey;  
    }  
      </style>
      
   </head>
   
   <body bgcolor = "li">
	
      <div align = "center">
         <div style = "width:300px; border: solid 1px #333333; " align = "left">
            <div style = "background-color:#333333; color:#FFFFFF; padding:3px;"><b>Login</b></div>
				
            <div style = "margin:30px">
               
               <form action = "" method = "post">
                  <label>UserName  :</label><input type = "text" name = "username" class = "box"/><br /><br />
                  <label>Password  :</label><input type = "password" name = "password" class = "box" /><br/><br />
                  <input type = "submit" value = " Submit "/><br />
               </form>
               
               <div style = "font-size:30px; color:#cc0000; margin-top:10px"><?php echo $message; ?></div>
					
            </div>
				
         </div>
			
      </div>

   </body>
</html>