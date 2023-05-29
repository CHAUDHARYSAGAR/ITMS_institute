<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>candidate Registration</title>
<link rel="stylesheet" href="../dropdown/dropdown.css" type="text/css" />   

<link rel="stylesheet" href="slider/style.css" type="text/css" />
<script src="slider/script.js" type="text/jscript"></script>
<link href="../c2.css" rel="stylesheet" type="text/css" />
<link href="c2.css" rel="stylesheet" type="text/css" />
<link rel="stylesheet" href="c1.css" type="text/css">
<style>
#b
{
width:200px;
height:170px;
border-radius:50%;
background-color: black;   
}

</style>
</head>
<?php
$conn=mysqli_connect('localhost','root','','itms');          
if(isset($_POST['submit']))
{
$temp_name=$_FILES["file"]["tmp_name"];
$imagename=$_FILES["file"]["name"];
$target_path="img/".$imagename;
if(move_uploaded_file($temp_name,$target_path))
{
			  $adhar=$_POST['adhar'];
              $mno=$_POST['mno'];
              $fname=$_POST['fname'];
              $lname=$_POST['lname'];
              $dob=$_POST['dob'];
              $email=$_POST['email'];
              $gender=$_POST['gender'];
              $pass=$_POST['mstatus'];
         
mysqli_query($conn,"INSERT INTO `stu_reg`(`img`, `adhar`, `mobile`, `fname`, `lname`, `dob`, `email`, `gender`, `mstatus`) VALUES ('$target_path','$adhar','$mno','$fname','$lname','$dob','$email','$gender','$pass')");
?>
<script>
alert("registration successfull");
</script>
<?php
}
else 
{
?>
<script>
alert("registration failed");
</script>
<?php
}
}
?>		  
<body>
<div id="f">&nbsp;<img src="img/home.png" width="15" height="15" align="center" bgcolor="maroon" /><font color="#FFFFFF">&nbsp;&nbsp;Near pnb bank civil line , Bijnor, Uttar Pradesh [INDIA} &nbsp;&nbsp;<img src="img/phone.png" width="15" height="15" align="center" />&nbsp;&nbsp; +91 9412215116 &nbsp;&nbsp;<img src="img/email.png" width="15" height="15" align="center" />&nbsp;&nbsp;bijnor.pmkvy@gmail.com
  </font></div>
<table border="0" bgcolor="#FFFFFF">
<tr>
<td width="250" align="center"><img src="img/itms logo.jpg" width="150px" height="100px" /></td>
<td style="font-size:30px; color: #660000; width:900px; height:50px; font-family:Arial, Helvetica, sans-serif"><center><b>Information Technology & Management<br>Society</b></center></td>
</tr>
</table>
<ul class="active">
     <li><a href="index.php">HOME</a></li>
     
<li><a href="aboutus.php">ABOUT US</a></li>

<li><a href="course.php">COURSE</a></li>
   
<li><a href="gallery.php">GALLERY</a></li>

<li><a href="contact.php">CONTACT US</a></li>
    
<li><a href="candidatereg.php">CANDIDATE REG.</a></li>    
    
<li><a href="login.php">LOGIN</a></li>     

</ul>

<p style="color:#CC0000; font-size:24px"><b>Candidate Registration</b></p>
<center>
    <form action="candidatereg.php" method="post" enctype="multipart/form-data">
<table border="0" style="border:2px solid; border-color:#0066FF" width="1330px" height="620px" bgcolor="#CCCCCC">

<tr>
    <center><td colspan="4" style="font-size:24px; color:blue" ><b><i><u>Candidate R</u>egistration</i></b></td></center>
</tr>

<tr>
<td colspan="4" style="color:red" align="right"><u>*Mandatory Fields</u></td>
</tr>

<tr>
<td rowspan="4" style="width:200px"><br /><center><img src="img/li2.jpg" id="b" /><br />upload:<input type="file" name="file" /></center></td>
<td>Aadhar Card No.*</td>
<td>Mobile Number*</td>
</tr>

<tr>
<td><input type="text" name="adhar" style="width:200px; height:27px" placeholder="Aadhar Card Number" /></td>
<td><input type="text" name="mno" style="width:200px; height:27px" placeholder="Mobile Number" /></td>
</tr>

<tr>
<td style="width:300px">First Name*</td>
<td>Last Name*</td>
</tr>

<tr>
<td><input type="text" name="fname" style="width:200px; height:27px" placeholder="First Name" /></td>
<td><input type="text" name="lname" style="width:200px; height:27px" placeholder="Last Name" /></td>
</tr>

<tr>
<td rowspan="5"></td>
<td>Date Of Birth*</td>
<td width="250px">Email Address*</td>
</tr>

<tr>
<td><input type="date" name="dob" style="width:200px; height:27px" /></td>
<td><input type="text" name="email" style="width:200px; height:27px" placeholder="Email Address" /></td>
</tr>

<tr>
<td>Gender*</td><td colspan="2">Password*</td>
</tr>

<tr>
<td>
<select name="gender" style="width:200px; height:35px">
<option>--Gender--</option>
<option>Male</option>
<option>Female</option>
<option>Transgender</option>
</select>
</td>
<td colspan="2"><input type="password" name="mstatus" style="width:200px; height:27px;" placeholder="password">
</td>
</tr>

<tr>
<td></td><td></td><td width="10px" align="right"><input type="submit" name="submit" style="background-color:#009900; border-radius:25px; color:#FFFFFF; width:100px; height:30px "/></td>
</tr>
</table>
</form>
    </center>
</body>
</html>
