<?php

session_start();
error_reporting(0);

$con=mysqli_connect('localhost','root','','quiz');

if(!$con)
{
    echo "error";
}

else
{
	echo" connected";


$a=1;
$b=2;


$c=$a/$b;

echo"$c";

}


?>
