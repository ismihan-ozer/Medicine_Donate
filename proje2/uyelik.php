
<!DOCTYPE html>
<html>
  <head>
        
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Donating Unused Medicine</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Nunito+Sans:wght@200&display=swap" rel="stylesheet">
    <style>
        *{
            box-sizing: border-box;
        }
 
        html{
            font-size:62.5%;/*1rem = 10px*/
        }
 
        body,h1,h2,ul{
            margin:0;
            padding:0;
            
        }
        ul{
            list-style: none;
        }
 
        /*******************/
        body{
            font-family: 'Nunito Sans', sans-serif;
        }
        .arkaplan{
            background-color: #25373D;
        }
        .kapsayici{
            width: 960px;
            margin:0 auto;
        }
        
        .ust{
            display: flex;
            justify-content: space-between;
            align-items: center;
            min-height: 200px;
        }
 
        .ust .logo{
            text-align: center;
            color:#fff;
        }
        .ust .logo h1{
            font-size:4rem;
            letter-spacing: .5rem;
        }
 
        .ust .logo h1::first-letter{
            color:#FCB941;
        }
 
        .ust .logo h1:hover::first-letter{
            background-color: #FCB941;
            color:#25373D;
        }
 
        .ust .logo h2{
            font-size:2.4rem;
        }
    
        .ust .menu ul{
            display: flex;
        }
        .ust .menu ul li{
            margin:0 1rem;
         }
 
        .ust .menu ul a{
            color:#fff;
            text-decoration: none;
            font-size:1.0rem;
            padding:0.8rem; 
        }
        .ust .menu ul a:hover{
            color:#FCB941;
        }
  
         .orta .bolum1{
            margin-top:20px;
            border:10px solid #25373D;
            padding:20px;
        }
 
        .orta .bolum1 img{
            display: block;
            width: 100%;
        }
  
        .orta .bolum2{
            margin-top:20px;
            display: flex;
            justify-content: space-between;
        }
        .orta .bolum2 .kutu{
            flex-basis: 290px;
        }
 
        .orta .bolum2 .kutu h2{
            font-size: 2rem;
        }
 
        .orta .bolum2 .kutu p{
            font-size: 1.6rem;
        }
 
        .orta .bolum3{
            display: flex;
            justify-content: space-between;
            gap:20px;
        }
 
        .orta .bolum3 h1{
            font-size:2.5rem;
        }
 
        .orta .bolum3 p{
            font-size:4.6rem;
        }
  
         .alt{
            margin-top:20px;
            padding:20px 0;
            display: flex;
            gap:20px;
        }
        .alt .baglanti{
            flex-grow: 1;
        }
 
        .alt .baglanti ul li{
            border-bottom:dotted 1px #FCB941;
            margin:5px 0;
        }
 
        .alt .baglanti a{
            font-size:1.6rem;
            text-decoration: none;
            color:#FCB941;
        } */
 
 
        .cizgi{
            border-top:dotted 1px #FCB941;
            margin:10px 0;
        }
 
        .alt-kenar-10{
            border-bottom:10px solid #FCB941;
        } 
        
         body { font-family: Arial, Helvetica, sans-serif;}
        ul {text-decoration: underline;}
        .background_image {position: absolute;
                                top: 0px;
                            left: 0px;
                        z-index: 1;}
       
                                
        html {font-size: 100.01%;}
        body {font: bold 16px/30px Times news roman, Georgia, serif;}
        h1 {font-size: 350%; line-height:350%;}

            .foreground_image {position: absolute;
                        top: 10px;
                        left: 100px;
                    z-index: 2;}
                    
           .text {position: absolute;
                     top: 10px;
                    left: 300px; font-size: 20pt; font-family: 'Times New Roman', Times, serif;
                    z-index: 3;}

            .dark {font-weight: bold;} 
            .down_image {position: absolute;
                        top: 10px;
                        left: 100px;
                    z-index: 2;} 
            .sub { position: relative;
            left: -lex;}
            .background-color {background-color: rgb(108, 244, 206); text-align:center;}
            body {
    margin: 0px;
    padding: 0px;
    background-color: #81dcb3;
}
</style> </head>
    <div class="arkaplan alt-kenar-10">
        <div class="ust kapsayici">
            <div class="logo">
                <h1>Donating Unused Medicine</h1>
                <h2>www.donatingunusedmedicine.com</h2>
            </div>
            <div class="menu">
                <ul>
                   <li><a href="#">Main</a></li>
                    <li><a href="#">About</a></li>
                    <li><a href="#">Membership</a></li>
                    <li><a href="#">Communication</a></li>
                  
                </ul>
            </div>
        </div>
    </div>
    <body>
<h2>Registration Form</h2>
<p>Please fill in all fields and click Register</p>
<form method = "post" action = "form.php">
    <h2>User Information</h2>

    <div><label>First name:</label>
    <input type="text" name ="fname"></div>
    <div><label>Last name:</label>
    <input type ="text" name = "lname"></div>
    <div><label>Email:</label>
        <input type="text" name ="email"></div>
        <div><label>Phone:</label>
        <input type ="text" name = "phone">
      <h2>Role</h2>
      <p>Select the role</p>
      <select name = "role">
        <option>Donor</option>
        <option>Want the take medicine</option>
        <option>Distribution volunteer</option>
      </select>
      <p>Age*:<input type="number" placeholder="" required min="18" max="90"> </p>
             
            <input type="radio" name="gender" required > Male        
            <input type="radio" name="gender" required > Female 
            <p><input type = "submit" name ="submit" value = "Register"> </p>
  

        


</form>
    </body>
      
        </html>
