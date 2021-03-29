<?php include('conn.php'); ?>



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

<body>
	


<?php

$total = 0;

if(isset($_POST['submit']))

{


if(!empty($_POST['quizcheck']))


{
	$c= count($_POST['quizcheck']);

 

	echo "<br>u have elected".$c;


   $sel = $_POST['quizcheck'];

   print_r($sel);

   $sql = "select * from question";

   $res=$con->query($sql);

$counter=0;
$i=1;

   while($rows=mysqli_fetch_array($res))  
{
 $total++;

	print_r($rows['ans_id']);

	$c=$rows['ans_id'] == $sel[$i];

	if($c)
	{

		$counter++;

	}

	$i++;

}

$pass=$counter/$total;




?>






<br>
<br>
<br>
<br>

<div class="container ">

<div class="row">
<div class="col-sm-4"></div>
<div class="col-sm-4">
  <h5 class="text-center text-success">FINAL RESULT</h5>
  <div class="card">
    <div class="card-body">
    	
<div class="jumbotron">
 





 <?php  echo "<h5> YOUR SCORE IS -  ".$counter."/".$total; } }  ?>


<h4 class="text-center text-success">

<?php 
if($pass>=0.5){


  echo "<br>PASS";
}
  else 
  {
    echo "<br>FAIL";
  }


?>

</h4>

</div>

    </div>
  </div>


  <a href="logout.php" class="btn btn-primary m-auto d-block">LOGOUT</a>
</div>
<div class="col-sm-4"></div>

</div>


</div>



	
</body>










</html>
















