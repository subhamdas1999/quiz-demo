<?php include('conn.php'); 

$sql="select * from admin where id=$_SESSION[loginid]";
$res=$con->query($sql);
$rows=mysqli_fetch_assoc($res);

if($_SESSION['login']!=1)
{
    header('Location:login.php');
}

?>


<!DOCTYPE html>


<html>
  <head>
    <title>
      
    </title>

<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">

<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

<!-- Popper JS -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>


  </head>


<body >
  




<div class="container">
	<h2 class="text-center text-primary">WELCOME TO QUIZ </h2>


	

<button onclick="setTimeout(myFunction, 30000);" class="btn-primary d-block m-auto">EXAM START </button>
<script>
function myFunction() {
  alert('GO TO NEXT QUESTION');
}
</script>

</div>











<a href="logout.php" class="btn btn-danger">LOGOUT</a>


<div class="col-lg-8 m-auto d-block">

	<form action="check.php" method="post"> 






<?php


for($i=1 ; $i<3 ; $i++)
{

/*
$time = time() - $_SESSION['question_start'];
if($time > 30)
{
    // fail!
}
...
*/


$sql = "select * from question where id= $i";   // changing id question set will be changed
$res=$con->query($sql);


while($rows=$res->fetch_assoc())
{

?>


<!-- question-->


<div class="card">

<h5 class="header"><?php echo $rows['question'];  ?> </h5>


<?php


$sql = "select * from answer where ans_id= $i";   // changing ans_id answer set will be changed
$res=$con->query($sql);


while($rows=$res->fetch_assoc())
{

?>
		<div class="card-body">

			<input type="radio" name="quizcheck[<?php echo $rows['ans_id']; ?>]" value="<?php echo $rows['Aid']; ?>">
			<?php echo $rows['answer']; ?>

		</div>





<?php

}
}
}
?>


<input type="submit" name="submit" class="btn btn-primary m-auto d-block">


</form>

</div>


</body>




</html>