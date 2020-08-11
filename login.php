<?php
include('connect.php');
$username = $_REQUEST['adminUname'];
$password = $_REQUEST['adminPwd'];
$result = mysqli_query($con,"select * from admin where adminUname = '$username' and adminPwd = '$password'")
     or die("failed to query database".mysqli_error());
$row = mysqli_fetch_array($result);
if ($row['adminUname'] == $username && $row['adminPwd'] == $password){
 header("location:AHome.php");
} else{
	header("location: exit.php");
}
?>