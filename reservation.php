<?php
$server_name="localhost";
$username="root";
$password="";
$database_name="dorm_room";

$conn=mysqli_connect($server_name,$username,$password,$database_name);
//now check the connection
if(!$conn)
{
	die("Connection Failed:" . mysqli_connect_error());

}

if(isset($_POST['save']))
{	
	$email = $_POST['email'];
	$full_name =$_POST['full_name'];
	$gender = $_POST['gender'];
	$checkin = $_POST['checkin'];
	$checkout = $_POST['checkout'];
	$roomtype = $_POST['roomtype'];
	$phone = $_POST['phone'];

	 $sql_query = "INSERT INTO reservation(email,full_name,gender,checkin,checkout,roomtype,phone)
	 VALUES ('$email','$full_name','$gender','$checkin','$checkout','$roomtype','$phone')";

	 if (mysqli_query($conn, $sql_query)) 
	 {
		echo "New Details Entry inserted successfully !";
	 } 
	 else
     {
		echo "Error: " . $sql . "" . mysqli_error($conn);
	 }
	 mysqli_close($conn);
}
?>