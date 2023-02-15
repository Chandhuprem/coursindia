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
				
                
			    <li><a href="adminlog.php">ADMIN LOGIN</a></li>
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
</html>