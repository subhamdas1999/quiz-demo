<?php
 include('conn.php');


   if($_POST['reg']=="SIGN UP")

    {
        $username=$_POST['username'];
        $password=$_POST['password'];
      

        $sql="select * from admin where username='$username' and password='$password'"; 
        $res=$con->query($sql); // it performs the Mysql query..it returns result or that compete row
       // mysqli_query($con,$sql);
        if(mysqli_num_rows($res)==1) // there will be 1 row as subham username and subham passord contains 1 row
        {

        	echo "ALREADY REGISTERED";


            }
        else
        {
            
        $sql22="insert into admin(username,password) values('$username','$password')"; 
		$con->query($sql22); 
		header('Location:login.php');

		//INSERT INTO `admin` (`id`, `username`, `password`) VALUES (NULL, 'av', 'av');
           
        }
        
    }











?>

<!DOCTYPE HTML>
<html>
<head>
<meta charset="utf-8">
<title>REG-page</title>

<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">

<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

<!-- Popper JS -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

</head>

<body>



<div class="container">
<form action="registration.php" method="post">
  


 <h4 class="text-center text-primary">ENTER USER DETAIL</h4>
  
  
   <lable class="text-success">USERNAME</lable>
    <input type="text" name="username" placeholder="username" class="form-control">
  
  
<br>

  <div class="form-group">
   <h6 class="text-success">PASSWORD</h6>
    <input type="text" name="password" placeholder="Password" class="form-control">
    
    </div>

  
    
      <input class="btn btn-info m-auto d-block" type="submit" name="reg" value="SIGN UP">




   
  

</form>


</div>





</body>
</html>



