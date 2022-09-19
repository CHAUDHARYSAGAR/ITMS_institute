<?php
session_start();
?>
<!DOCTYPE html>
<html>
<head>
	<title>Sign Up</title>
	<style>
			*{
				margin:0px;
				padding:0px;
			}
			.main{
				height:100vh;
				width:100vw;
				background:url('4.jpg');
				background-size: 100% 100%;
				background-repeat: no-repeat;
				
			}
			.container{
				position:absolute;
				top:100px;
				left: 180px;
				height:70vh;
				width:70vw;
				padding:20px;
				
			}
			.container input{
				padding:20px;
			}
			.container h3{
                 position: absolute;
                 left:300px;
			}
			.container input[type='text'],.container input[type='password']{
				position:relative;
				left:200px;
				}
			.container input[type='submit']{
				position:relative;
				left:250px;
				border: 2px solid green;
			}
			.container input[type='submit']:hover{
				background:green;
				cursor: pointer;
			}
			
	</style>
	
	</script>
</head>
<body>

	<?php
	    if(isset($_POST['submit'])){
	    	
	    	$conn=mysqli_connect('localhost','root','','project');
  	      if(!$conn){
  		      echo"error";
  	       }
  	       $name=$_POST['name'];
  	       $mobile=$_POST['mobile'];
  	       
  	       $password=$_POST['password'];

  	       $sq="insert into login(name,mobile,password)values('$name',$mobile,'$password')";

  	       $result=mysqli_query($conn,$sq);
  	       if(!$result){
  	       	echo "<p>.".mysqli_error()."</p>";
  	       }
  	       else{
               $_SESSION['name']=$name;
               
               
               header('location:home.php');
  	       }
	    }
	?>
 <div class=main>
 	<div class=container>
 		<h1>SignUp Page</h1><hr><br>
 		<form method=post action="" autocomplete="off">
 			<input type="text" name="name" placeholder="Name" required>
 			<input type="text" name="mobile"  placeholder="Mobile No" required><br><br>
 			<input type="password" name="password" placeholder="Password" required>
 			
 			
 			<input type="submit" name="submit" value="Submit">
 			
 		</form>
 	</div>
 </div>
</body>
</html>