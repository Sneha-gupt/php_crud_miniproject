<?php  include('config.php');?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css">
	<link href="//cdn.datatables.net/1.13.2/css/jquery.dataTables.min.css" rel="stylesheet">
    <title>Document</title>
</head>
<body>
<?php $results = mysqli_query($db, "SELECT * FROM data"); ?>
<div class="container">
<table class="table table-striped">
	<thead>
		<tr>
			<th>name</th>
			<th>Email</th>
			<th>DeptName</th>
			<th>contact_no</th>
			<th>salary</th>
			<th>Edit</th>
			<th>Delete</th>
             
			
		</tr>
	</thead>
	
	<?php while ($row = mysqli_fetch_array($results)) { ?>
		<tbody>
		<tr>
		    
			<td><?php echo $row['name']; ?></td>
			<td><?php echo $row['Email']; ?></td>
			<td><?php echo $row['DeptName']; ?></td>
			<td><?php echo $row['contact_no']; ?></td>
			<td><?php echo $row['salary']; ?></td>
			<td>
				<a href="index.php?edit=<?php echo $row['id']; ?>" class="edit_btn" >Edit</a>
			</td>
			<td>
				<a href="server.php?del=<?php echo $row['id']; ?>" class="del_btn">Delete</a></td>
		</tr>
	<?php } ?>
	</tbody>
	</table>
	</div>
	<script src="https://code.jquery.com/jquery-3.6.3.slim.js"></script>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.min.js"></script>
	<script src="//cdn.datatables.net/1.13.2/js/jquery.dataTables.min.js"></script>
	<script>
		$(document).ready( function () {
    $('.table').DataTable();
} );
	</script>
</body>
</html>