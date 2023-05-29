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
</head>

<body>
<div id="f">&nbsp;<img src="img/home.png" width="15" height="15" align="center" bgcolor="maroon" /><font color="#FFFFFF">&nbsp;&nbsp;Near pnb bank civil line , Bijnor, Uttar Pradesh [INDIA} &nbsp;&nbsp;<img src="img/phone.png" width="15" height="15" align="center" />&nbsp;&nbsp; +91 9412215116 &nbsp;&nbsp;<img src="img/email.png" width="15" height="15" align="center" />&nbsp;&nbsp;bijnor.pmkvy@gmail.com
  </font></div>
<table border="0" bgcolor="#FFFFFF">
<tr>
<td width="250" align="center"><img src="img/itms logo.jpg" width="150px" height="100px" /></td>
<td style="font-size:30px; color: #660000; width:1300px; height:50px; font-family:Arial, Helvetica, sans-serif"><center><b>Information Technology & Management<br>Society</b></center></td>
</tr>
</table>
<title>ITMS Bijnor</title>
<style>
body
    {
        background-color: black
    }
#a
{
width:250px;
height:350px;
border-radius:25px;
background-color:teal;
}
#b
{
width:200px;
height:170px;
border-radius:50%;
background-color: black;   
}
#c
{
width:400px;
height:36px;
font-size:36px;
color:#FFFFFF;
background-color: black;
}

#m
{
overflow:hidden;
color:#FF0000;
}
#m a
{
float: left;
color: #FFFFFF;
text-align:center;
padding:10px;
font-size:16px;
}
#m a:hover
{
background-color: #999999;
color:#FF0000;
}
#m a.active
{
background:#FF0000;
color:#CCCCCC;
}
</style>
    <link rel="stylesheet" href="c1.css" type="text/css">
</head>
<script language="javascript">
function sagar(ch)
{

if(ch.t1.value=="")
{
alert('Please enter your id');
ch.t1.focus();
return false;
}
if(ch.t1.value)
{
var n=ch.t1.value;
var f=/^.+@.+\..{2,3}$/;
if(!f.test(n))
{
alert('please enter correct Your ID');
ch.t1.value=' ';
ch.t1.focus();
	return false;
	}
	}

if(ch.t2.value=="")
  {
   alert('Please enter password');
   ch.t3.focus();
   return false;
}
 if(ch.t2.value)
	{
		var n=ch.t2.value;
		var f=/^\d{10}$/;
		if(f.test(n)==false)
		{
			alert('Enter correct password');
			ch.t2.focus();
			ch.t2.value='';
			return false;
		}
	}

return true;
}	
</script>
<body>
<div id="m">
<ul class="active">
     <li><a href="index.php">HOME</a></li>
     
<li><a href="aboutus.php">ABOUT US</a></li>

<li><a href="course.php">COURSE</a></li>
    
<li><a href="gallery.php">GALLERY</a></li>

<li><a href="contact.php">CONTACT US</a></li>
    
<li><a href="candidatereg.php">CANDIDATE REG.</a></li>    
    
<li><a href="login.php">LOGIN</a></li>     

</ul></div>
<br /><br /><br /><br /><br />
<center><div id="c"><b><center>Candidate Login</b></center></div></center>
<center><br />
<div id="a">
<div id="b"><center><img src="img/li2.jpg" id="b" /></center></div><br />
<form method="post" action="detail.php">
<center><input type="email" name="email" placeholder="Email address" style="width:200px; height:25px" /></center><br />
<center><input type="password" name="pass" placeholder="Password" style="width:200px; height:25px" /></center><br />
<center><input type="submit" name="login" value="Login" style="width:200px; height:30px; background-color:#0000FF; color:#FFFFFF; border-radius:25px" /></center>
</form>
</div>
</center>
</body>
</html>

