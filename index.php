<html>
<head>
    <link rel="stylesheet" href="stylesheet.css">
</head>
<body>
<div class="hero">
    <nav>
        &nbsp &nbsp <img src="homework.png" class="logo">
        <h5 style="font-size: 70px;">coursindia</h5>
			<ul>
				
                
			    <li><a href="adminlog.php">ADMIN LOGIN</a></li>
                <li><h4 id="current-time">12:00:00</h4></li>
	        </ul>
    </nav>
</div>




<div class="row">
    <div class="col">
     <h1>FREE ONLINE<BR>COURSES</h1>
     <p>Looking to learn something new online
         while you're stuck at home?
          These are some of the best online
           courses that you could be taking 
           right now!</p>
           <a href="course.php">
           <button type="button">EXPLORE</button></a>
    </div>
    <div class="col">
    <div class="card card1">
     <h2>GOOGLE</h2>

    </div>

    <div class="card card4">
        <h2>COUSERA</h2>
   
       </div>

       <div class="card card2">
        <h2>AMAZON</h2>
   
       </div>

       <div class="card card3">
        <h2>MICROSOFT</h2>
   
       </div>


    </div>
</div>



        <script>
            let time=document.getElementById("current-time");
            setInterval(() => {
                let d=new Date();
                time.innerHTML=d.toLocaleTimeString();
            }, 1000);
            </script>
            
           
</body>
</html> 
