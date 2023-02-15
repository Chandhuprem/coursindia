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
        <img src="pic/homework.png" class="logo">
        <h5 style="font-size: 70px;">coursindia</h5>
			<ul>
				
                
			    <li><a href="submition.php">EDIT COURSE</a></li>
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


            <center>

        
<BR>

<h1>ADD COURSE<H1>
<BR>

<form name="dept" method="post">
   <div class="label">
    <label for="coursecode">Course Code : </label>
    <input type="text" class="searchb" id="coursecode" name="coursecode" placeholder="Course Code" required />
  </div>
  <br>
 

 <div class="label">
    <label for="coursename">Course Type :  </label>
    <input type="text" class="searchb" id="coursename" name="coursename" placeholder="Course Name" required />
  </div>
  <br>
  

<div class="label">
    <label for="courseunit">Course Name : </label>
    <input type="text" class="searchb" id="courseunit" name="courseunit" placeholder="Course Unit" required />
  </div> 
  <br>


<div class="label">
    <label for="seatlimit">Course Company :  </label>
    <input type="text" class="searchb"" id="seatlimit" name="seatlimit" placeholder="Seat limit" required />
  </div> 
  <br>

  <div class="label">
    <label for="clink">Course Link  </label>
    <input type="text" class="searchb"" id="clink" name="clink" placeholder="Seat limit" required />
  </div>
  <br>
 

 <button type="submit" name="submit" class="btn btn-default">Submit</button>
</form>
        
        </center>
        </body>
        </html>
        <?php
            if(isset($_POST['submit']))
            {
            $coursecode=$_POST['coursecode'];
            $coursename=$_POST['coursename'];
            $courseunit=$_POST['courseunit'];
            $seatlimit=$_POST['seatlimit'];
            $clink=$_POST['clink'];
            $ret=mysqli_query($con,"insert into courses(cno,ctype,cname,cpc,clink) values('$coursecode','$coursename','$courseunit','$seatlimit','$clink')");
            if($ret)
            {
            echo '<script>alert("Course Created Successfully !!")</script>';
            echo '<script>window.location.href=course.php</script>';
            }else {
            echo '<script>alert("Error : Course not created!!")</script>';
            echo '<script>window.location.href=course.php</script>';
            }
            }
             ?>