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
            <li><a href="changepass.php">CHANGE PASSWORD</a></li> 
			    <li><a href="adminm.php">ADD COURSE</a></li>
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
            <br>
            <BR>
            <BR>
                     
                     <h1 style="color:red;" align="center" >ADMIN CONTROL PANEL</h1>
        
            <form methord="GET" action="">
                <label class="label">SEARCH :</label><input type="text" name="search" value="<?php if(isset($_GET['search'])){echo $_GET['search'];} ?>" class="searchb">
                <button type="submit" class="button">search</button></form>
                 








            <BR>
            <BR>
            <BR>
        
                                <table class="content">
                                    <thead>
                                        <tr>
                                            <th>ID NO &nbsp </th>&nbsp
                                            <th>Type  &nbsp</th>&nbsp
                                            <th> Course Name &nbsp</th>&nbsp
                                             <th>Company</th>&nbsp
                                                <th>Web LINK</th>
                                                &nbsp
                                        </tr>
                                    </thead>
                                    <tbody>
                                    
                                   
<?php
$query="SELECT * FROM courses";
$sql=mysqli_query($con,$query);



if(isset($_GET['search']))
{
    $sea=$_GET['search'];
    $query="SELECT * FROM courses WHERE CONCAT(cno,ctype,cname,cpc,clink) LIKE '%$sea%' ";
    $sql=mysqli_query($con,$query);
                

}









while($row=mysqli_fetch_array($sql))
{
?>


                                        <tr>
                                            
                                            <td><?php echo htmlentities($row['cno']);?></td>
                                            <td><?php echo htmlentities($row['ctype']);?></td>
                                            <td><?php echo htmlentities($row['cname']);?></td>
                                            <td><?php echo htmlentities($row['cpc']);?></td>
                                            <td>
                                            <a href=<?php echo $row['clink']?>" target="_blank">
<button class="btn btn-primary"><i class="fa fa-print "></i> GO TO SITE</button> </a>                                        


                                            </td>
                                        </tr>
<?php 

} ?>

                                        
                                    </tbody>
                                </table>
                             </div>
                               <br><br>
                             
                             <center>
                             <h1>DELETE COURSE<h1>
                             <br>
                             <form name="dept" method="post" action="coursedet.php">
   <div class="label">
    <label for="coursecode">Course Code : </label>
    <input type="text" class="searchb" id="coursecode" name="coursecode" placeholder="Course Code" required />
  </div>
  
  <button type="submit" name="submit" class="btn btn-default">Submit</button>
  <?php
            if(isset($_POST['submit']))
            {
            $coursecode=$_POST['coursecode'];

            mysqli_query($con,"delete from courses where cno='$coursecode'");
echo '<script>alert("Course deleted!!")</script>';
            }
?>

</html>