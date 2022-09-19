<?php 
session_start();
?>
<!DOCTYPE html>
<html>
<head>
	<title>Login Page</title>

	<style>
		*{
			margin:0px;
			padding:0px;

		}
		.main{
			height:100vh;
			width:100vw;
			background:blue;
			background-image:url('3.jpg');
			background-size: 100% 70%;
			background-repeat:no-repeat;
		}
		
			.box{
        width: 300px;
        
        padding: 40px;
        position: absolute;
        top: 50%;
        left: 50%;
        transform: translate(-50%,-50%);
        background: #34495e;
        text-align: center;
        border-radius: 5%;
        box-shadow: 0 15px 45px rgba(0,0,0.1);
         }
		.box h1{
         color: white;
         text-transform: uppercase;
         font-weight: 500;
         font-size: 4em;
        }
       .box input[type="text"],.box input[type="password"]
        {
           border: 0;
           background: none;
           display: block;
           margin: 20px auto;
           text-align: center;
           border: 2px solid #3498db;
           padding: 14px 10px;
           width: 200px;
           outline: none;
           color: white;
           border-radius: 24px;
           transition: 0.25s;
         } 
         .box input[type=text]:focus, .box input[type="password"]:focus{
         	width:250px;
         }
        .box input[type=submit]{
        	text-align: center;
           border: 2px solid #3498db;
           height:50px;
           width:100px;
           border-radius:30px;
            }
		.box input[type=submit]:hover{
			background:green;
			cursor: pointer;
		}
	</style>
</head>
<body>
	<?php
     if(isset($_POST['login'])){
     	$name=$_POST['name'];
     	$password=$_POST['password'];
     	$conn=mysqli_connect("localhost","root","","project");
     	if(!$conn){
     		die("Error in Connecting");
     	}
     	$qu="Select * from login where name='$name' and password='$password'";

     	$result=mysqli_query($conn,$qu);
     	if(mysqli_num_rows($result)==1){
     		$_SESSION['name']=$name;

     		header("location:home.php");
     	}
     	else{
     		echo"Invalid MObile No and Password";
     	}
     }

	?>
	<div class=main>
     <div class="box">
         <h1>Login</h1>
         <form method="post" action="" autocomplete="off">
         	 <input type="text" name=name placeholder="Name" required><br>
         	 <input type=password name=password placeholder="Password" required><br>
         	 <input type=submit value="Login" name=login> 
         	 <button><a href='SignUP.php'>Sign Up</a></button>
         </form>
     </div>
    </div>
</body>
</html>