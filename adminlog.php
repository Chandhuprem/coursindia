<?php
define('DB_SERVER','localhost');
define('DB_USER','root');
define('DB_PASS' ,'');
define('DB_NAME','online1');
$con = mysqli_connect(DB_SERVER,DB_USER,DB_PASS,DB_NAME);
// Check connection
if (mysqli_connect_errno())
{
 echo "Failed to connect to MySQL: " . mysqli_connect_error();
}
?>
<html>
<head>
    <link rel="stylesheet" href="stylec.css">
    
</head>
<body>
<div class="hero">
    <nav>
        <img src="homework.png" class="logo">
        <h5 style="font-size: 70px;">coursindia</h5>
			<ul>
				
                
			    <li><a href="index.php">HOME</a></li>
                <li><h4 id="current-time">12:00:00</h4></li>
	        </ul>
    </nav>
</div>
<script>
            let time=document.getElementById("current-time");
            setInterval(() => {
                let d=new Date();
                time.innerHTML=d.toLocaleTimeString();
            }, 1000);
            </script>


<BR>
<br>
<br>
<br>
<br>
<br>
<?php
 if($_SERVER["REQUEST_METHOD"] == "POST") {
$myusername = mysqli_real_escape_string($con,$_POST["username1"]);
      $mypassword = mysqli_real_escape_string($con,$_POST["password1"]); 
      
      $sql = "SELECT adminid FROM adminpass WHERE adminid = '$myusername' and adminpass = '$mypassword'";
      $result = mysqli_query($con,$sql);
      $row = mysqli_fetch_array($result,MYSQLI_ASSOC);
     
      
      $count = mysqli_num_rows($result);
      
      // If result matched $myusername and $mypassword, table row must be 1 row
		
      if($count == 1) {
        header("location: coursedet.php");
      }else {
         $error = "Your Login Name or Password is invalid";
      }
    }
?>
<html>
   
   <head>
      <title>Login Page</title>
      <link rel="stylesheet" href="stylec.css">
      <style type = "text/css">
         body {
            font-family:Arial, Helvetica, sans-serif;
            font-size:14px;
         }
         label {
            font-weight:bold;
            width:100px;
            font-size:14px;
         }
         .box {
            border:#666666 solid 1px;
         }
      </style>
      
   </head>
   
   <body bgcolor = "#FFFFFF">


   
      <div align = "center" >
      <h1>ADMIN LOGIN<H1>
        <BR>
        <h2>ENTER PASSWORD & LOGID<H2>
	
				
            <div style = "margin:30px">
               
               <form action = "" method = "POST">
                  <label class="label" >UserName  :</label><input type = "text" name ="username1" class = "searchb"/><br /><br />
                  <label class="label" >Password  :</label><input type = "password" name ="password1" class = "searchb" /><br/><br />
                  <button type="submit" class="button">LOGIN</button>
               </form>
               
               <div style = "font-size:11px; color:#cc0000; margin-top:10px"></div>
					
            </div>
				
         </div>
			
      </div>

   </body>
</html>