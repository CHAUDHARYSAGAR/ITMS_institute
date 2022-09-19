<?php 
session_start();
if(!isset($_SESSION['name'])){
	header("location:login.php");
}
echo"<h1 align=right>Hello   ".$_SESSION['name']."<div class=head><a href=add.php>ADD</a>
       <a href=logout.php>Logout</a></h1></div>";


$conn=mysqli_connect('localhost','root','','project');
  	if(!$conn){
  		echo"error";
  	}

  	$q='select * from product';
    $result=mysqli_query($conn,$q);
    if(mysqli_num_rows($result)>=1){
    	echo "<div class=main>";
    while($row=mysqli_fetch_assoc($result)){
    	
    	echo"<br><br><img src=".$row['image']." class=item><br><br><br>";
        echo "<div class=itemdetails><h1>".$row['title']."</h1> Price ".$row['amount']." ".$row['description']."  Quantity  ".$row['quantity']." <div><form action=buy.php method=post>Id:<input type=text value=".$row['pid']." readonly name=pid> <input type=submit value=BUY NOW name=buynow><br><br><br><br>";

    }
    echo"</div><br><br><br><br><br><br></div>";


}
else{
	echo"<h1>No Record Found </h1>";
}
echo"</div>";

  ?>





<!DOCTYPE html>
<html>
<head>
	<title>Home Page</title>
	<style>
		*{
			margin:0px;
			padding:0px;
			background: skyblue;
		}
		
		.item{
			
			height:200px;
			width:300px;
			background:red;
			border-radius:20px;
			position:relative;
			box-shadow:0 15px 45px rgba(0,0,0.1);
		}
		.itemdetails{
			height:50px;
			width:400px;
			text-transform: uppercase;
			word-spacing: 10px;
			color:blue;
		}
		.itemdetails h1{
             color:green;
		}
		input[type=submit]{
			height:30px;
			width:50px;
			border:3px solid green;
			cursor:pointer;

		}
		input[type=submit]:hover{
			background:green;

		}
		.main{
			
			margin-left:500px;
		}
		.head a{
			position: relative;
			top:50px;
			text-decoration: none;
			color:green;
			padding:20px;
			border:1px solid green;
		}
		.head a:hover{
			
			color:red;
			background:green;
		}
		
		
	</style>
</head>
<body>
	   
</body>
</html>