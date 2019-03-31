<?php
//$con= new mysqli($host, $username, $password, $database);

/*$con = mysqli_connect("118.185.43.122","0187cs161125","vishwas","0187cs161125");    //server localhost
*/
$con = mysqli_connect("localhost","root","1234","0187cs161125");    //server localhost



if ($con==false)  //check connection
{
	die("Connection Failed". $connect_error);
}
else
{
	//echo "Connected";
}

?>