<?php include('conn.php');

if($_SESSION['login']==1)
{
        header('Location:home.php');
    } 

    if($_POST['submit']=="Login")

    {
        $username=$_POST['username'];
        $password=$_POST['password'];
      

        $sql="select * from admin where username='$username' and password='$password'"; 
        $res=$con->query($sql); // it performs the Mysql query..it returns result or that compete row
        if(mysqli_num_rows($res)>0) // there will be 1 row as subham username and subham passord contains 1 row
        {
           // $rows=mysqli_fetch_assoc($res);
            $_SESSION['login']=1;
            //$_SESSION['loginid']=$rows['id'];
            header('Location:home.php');
        }
        else
        {
            
            $res="Username or Password is Wrong";
        }
        
    }

?>
<!DOCTYPE HTML>

<html>
<head>
<meta charset="utf-8">
<title>Login-Page</title>


<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">

<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

<!-- Popper JS -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

<style >
  
body{


  background-image: url(pic-2.jpg);
}



</style>




</head>

<body>





<div class="container">

<h1 class="display-3 text-center text-muted"> WELCOME TO LOGIN PAGE</h1>

</div>

<br><br>

<div class="container pt-3" >

<div class="row">



 <div class="col-sm-4"></div>
 


  <div class="col-sm-4" style="background-image: url(pic-2.jpg);>
  <div class="card">

<form action="" method="post">
  


 <h4 class="text-center text-primary">ENTER USER DETAIL</h4>
  
  
   <lable class="text-success">USERNAME</lable>
    <input type="text" name="username" placeholder="username" class="form-control">
  
  
<br>

  <div class="form-group">
   <h6 class="text-success">PASSWORD</h6>
    <input type="text" name="password" placeholder="Password" class="form-control">
    
    </div>

  
    
      <input class="btn btn-info m-auto d-block" type="submit" name="submit" value="Login">




   
  

</form>

<a class="btn btn-info m-auto d-block" href="registration.php">CREATE ACCOUNT<a/>
 </div>
</div>
<div class="col-sm-4"></div>
</div>
</div>






</body>
</html>
