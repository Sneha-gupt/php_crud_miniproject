<?php
session_start();
$db = mysqli_connect('localhost', 'root', '', 'register');

$name = "";
$Email = "";
$id = 0;
$update = false;

if (isset($_POST['update'])) {
	$id = $_POST['id'];
	$name = $_POST['name'];
	$Email = $_POST['Email'];

	mysqli_query($db, "UPDATE data SET name='$name', Email='$Email' WHERE id=$id");
	$_SESSION['message'] = "Email updated!"; 
	header('location: info.php');
}

if (isset($_GET['del'])) {
	$id = $_GET['del'];
	mysqli_query($db, "DELETE FROM data WHERE id=$id");
	$_SESSION['message'] = "Email deleted!"; 
	header('location: info.php');
}
?>
