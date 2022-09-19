<!doctype html>
<html>
  <head>
<title>Details</title>
      <style>
          body{background-color: wheat}
      td,th{padding: 10px;}
      </style>
<?php
	   $conn = mysqli_connect('localhost','root','','itms');
if($conn== false)
{
    echo "Connection is not done";
}
          
          if(isset($_POST['login']))
          {
              $email=$_POST['email'];
              $pass=$_POST['pass'];
              
              $sql="SELECT * FROM stu_reg WHERE email='$email' and mstatus='$pass'";
              $run=mysqli_query($conn,$sql);
              
              if(mysqli_num_rows($run)>0)
              {
              while($rows=mysqli_fetch_assoc($run))
              {
                  ?>
    </head>
    
      <body background="img/back.png">
        <center><br><br><br><h1>your details</h1></center> <hr>
          <center>
          <table border="2" style="padding:50px;">
<tr>
		  <td colspan="7"><center><img src="<?php echo $rows['img'];?>" width=200px height=200px></center></td>
		  </tr>
		  <tr>
              <th>Name</th>
              <th>Mobile Number</th>
              <th>Adhar Number</th>
              <th>Date of Birth</th>
              <th>Email Address</th>
              <th>Gender</th>
              
          </tr>             
                 <tr style="font-size:18px">
                               <td><?php echo $rows['fname']; ?>&nbsp;<?php echo $rows['lname']; ?></td>
                               <td><?php echo $rows['mobile']; ?></td>
                               <td><?php echo $rows['adhar']; ?></td>
                               <td><?php echo $rows['dob']; ?></td>
                               <td><?php echo $rows['email']; ?></td>
                               <td><?php echo $rows['gender']; ?></td>
                               
                          </tr> 
						
              <?php
              }  
              }
              else
              {
                  echo "student not found";
              }
              mysqli_close($conn);
          }
          ?>
                 </table>
              <button style="width:100px;height:50px;margin-top:50px;"><a href="itms.php" style="text-decoration:none;color:black;">Back</a></button>
              <button style="width:100px;height:50px;margin-top:50px;"><a href="login.php" style="text-decoration:none;color:black;">Other Student</a></button>
              </center>
    </body>
      </html>