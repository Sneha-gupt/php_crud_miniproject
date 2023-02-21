<?php 
	session_start();
	$db = mysqli_connect('localhost', 'root', '', 'register');

	// initializing variables
	$name = "";
	$Email = "";
	$id = 0;
	
	$update = false;

	if (isset($_POST['save'])) {
		$name = $_POST['name'];
		$Email = $_POST['Email'];
		$DeptName = $_POST['DeptName'];
		$contact_no = $_POST['contact_no'];
		$salary = $_POST['salary'];

		
		mysqli_query($db, "INSERT INTO data (name, Email,DeptName,contact_no,salary) VALUES ('$name', '$Email','$DeptName','$contact_no','$salary')"); 
		$_SESSION['message'] = "name saved"; 
		header('location: info.php');
	}
		?>
		