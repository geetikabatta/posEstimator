<?php
$username=$_POST['username'];
$password=$_POST['password'];

$conn=mysqli_connect("localhost","root","tiger");
mysqli_select_db($conn, "mydatabase");

$result=mysqli_query($conn, "select * from login where username='$username' and password='$password'") or die("Failed to query database".mysqli_connect_error());
$row=mysqli_fetch_array($result);
if($row['username'] == $username && $row['password'] == $password) {
	echo "Login successful";
	header("Location: estimator.php");
}
else {
	echo "login failed";
}
mysqli_close($conn);
?>