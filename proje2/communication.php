1<!DOCTYPE html>
<html lang="tr">
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
            font-size:1.8rem;
            padding:0 2rem;
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
        }
 
 
        .cizgi{
            border-top:dotted 1px #FCB941;
            margin:20px 0;
        }
 
        .alt-kenar-10{
            border-bottom:10px solid #FCB941;
        }
        input[type=text], select, textarea {
  width: 100%; /* Full width */
  padding: 12px; /* Some padding */ 
  border: 1px solid #ccc; /* Gray border */
  border-radius: 4px; /* Rounded borders */
  box-sizing: border-box; /* Make sure that padding and width stays in place */
  margin-top: 6px; /* Add a top margin */
  margin-bottom: 16px; /* Bottom margin */
  resize: vertical /* Allow the user to vertically resize the textarea (not horizontally) */
}

/* Style the submit button with a specific background color etc */
input[type=submit] {
  background-color: #04AA6D;
  color: white;
  padding: 12px 20px;
  border: none;
  border-radius: 4px;
  cursor: pointer;
}

/* When moving the mouse over the submit button, add a darker green color */
input[type=submit]:hover {
  background-color: #45a049;
}

/* Add a background color and some padding around the form */
.container {
  border-radius: 5px;
  background-color: #f2f2f2;
  padding: 20px;
}
        
        
    </style>
</head>
<body>
 
     <!-- sayfa üstü-->
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
                    <li><a href="C:\Users\ismih\OneDrive\Masaüstü\web_programlama\uyelik.html" target="_blank">Membership</a></li>
                    <li><a href="#">Communication</a></li>
                  
                </ul>
            </div>
        </div>
    </div>

    <div class="container">
        <form action="action_page.php">
      
         <h2><label for="fname">First Name</label></h2> 
          <input type="text" id="fname" name="firstname" placeholder="Your name..">
      
         <h2> <label for="lname">Last Name</label></h2>
          <input type="text" id="lname" name="lastname" placeholder="Your last name..">
      
          <h2><label for="country">Country</label></h2>
          <select id="country" name="country">
            <option value="turkey">Turkey</option>
            <option value="azerbaijan">Azerbaijan</option>
            
          </select>
      
          <h2><label for="message">Message</label></h2>
          <textarea id="message" name="message" placeholder="Write something.." style="height:200px"></textarea>
      
          <input type="submit" value="Submit">
      
        </form>
      </div>
 