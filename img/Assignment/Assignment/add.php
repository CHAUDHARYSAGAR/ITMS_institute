<?php 
session_start();
if(!isset($_SESSION['name'])){
	header("location:login.php");
}


?>


<!DOCTYPE html>
<html>
<head>
	<title>Add a item</title>
	<style>
     body{
  background:blue;
margin: 0;
padding: 0;
height:100vh;
width:100vh;
background-image: url('3.jpg');
background-size: 100% 70%;
background-repeat: no-repeat;

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

 h1{
color: white;
text-transform: uppercase;
font-weight: 500;
font-size: 4em;
}
input[type="text"]
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
 input[type="text"]:focus
{
width: 280px;
border-color: #2ecc71;
}
 input[type="submit"]
{
border: 0;
background: none;
display: block;
margin: 20px auto;
text-align: center;
border: 2px solid #2ecc71;
padding: 14px 40px;
outline: none;
color: white;
border-radius: 24px;
transition: 0.25s;
cursor: pointer;
}
 input[type="submit"]:hover{
background: #2ecc71;
}
</style>
</head>
<body>
       <?php 
  if(isset($_POST['add'])){
          
              
    $conn=mysqli_connect('localhost','root','','project');
  	if(!$conn){
  		echo"error";
  	  }
  	  $title= $_POST['title'];
  	  $amount= $_POST['amount'];
      $quantity= $_POST['quantity'];
      $description= $_POST['description'];
      print_r($_POST);
      $image=$_FILES['image']['name'];
      $q="Insert into product(title,amount,quantity,description,image)values('$title',$amount,$quantity,'$description','$image')";
      $r=mysqli_query($conn,$q);
      if($r){
        header('location:home.php');
      }
      else{
        echo mysqli_error();
      }

     }
     


       ?>


       <form class=box action="add.php" method="post" enctype="multipart/form-data">
      <h1>Add</h1>
      <input type=text name="title"  placeholder="Title" required>
      <input type=text name="amount" placeholder="Amount" required>
      <input type=text name="quantity"  placeholder="Quantity" required>
      <input type=text name="description" placeholder="Description" required>
      <input type='file' name="image"  required>
      <input type=submit name="add" value="ADD" >

     
    </form>
  
</body>
</html>