<?php  include('config.php');?>
<?php 
	if (isset($_GET['edit'])) {
		$id = $_GET['edit'];
		$update = true;
		$record = mysqli_query($db, "SELECT * FROM data WHERE id=$id");

		if ($record->num_rows==1) {
			$n = mysqli_fetch_array($record);
			$name = $n['name'];
			$address = $n['Email'];
			
		}
	}
?>
<?php
$con= mysqli_connect('localhost', 'root', '', 'register');
$res=mysqli_query($con,"select * from data");
?>
<!DOCTYPE html>
<head>
	<title>CRUD PHP</title>
	<link rel="stylesheet" type="text/css" href="style.css">
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css">
	<link href="//cdn.datatables.net/1.13.2/css/jquery.dataTables.min.css" rel="stylesheet">
</head>
<body>

<?php if (isset($_SESSION['message'])): ?>
	<div class="msg">
		<?php 
			echo $_SESSION['message']; 
			unset($_SESSION['message']);
		?>
	</div>
<?php endif ?>
	<form method="post" action="config.php" >
		<div class="input-group">
			<label>name</label>
			<input type="text" name="name" value="">
		</div>
		<div class="input-group">
		<label>Email</label>
			<input type="email" name="Email" value="">
			</div>
			<label>Select Department Name:</label>
			<select name="DeptName">
				<option value="Web development">Web development</option>
				<option value="Testing">Testing</option>
				<option value="Software development">Software development</option>
				<option value="Android development">Android development</option>
			</select>
			<div class="input-group">
			<label>contact_no</label>
			<input type="tel" name="contact_no" value="">
		</div>
		<div class="input-group">
			<label>salary</label>
			<input type="money" name="salary" value="">
</div>	
      <div class="input-group">
		<button class="btn" type="submit" 
		 name="save" >Save</button>
		</div>
		
    </form>
		<form method="post" action="server.php" >
		<div class="input-group">
		<label>id</label>
        <input type="readonly" name="id" value="<?php echo $id; ?>">
		<div class="input-group">
		<label>name</label>
        <input type="text" name="name" value="<?php echo $name; ?>">
		<br>
		<div class="input-group">
		<label>Email</label>
        <input type="text" name="Email" value="<?php echo $Email; ?>">
		<br>
		<br>
		<?php if ($update == true): ?>
		<div class="input-group">
	    <button class="btn" type="submit" name="update" style="background: #556B2F;" >update</button>
        <?php else: ?>
	    <button class="btn" type="submit" name="Update" >Update</button>
		</form>
<?php endif
 ?>
	</body>
	</html>