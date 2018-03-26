<?php
	include('db.php');
	$id = $_GET['id'];
	$stmt = $conn->prepare("SELECT UNIX_TIMESTAMP(reg_date) as reg_date FROM user WHERE id = ?");
	$stmt->bind_param('i', $id);
	$stmt->execute();
	$row = mysqli_fetch_assoc(mysqli_stmt_get_result($stmt));
	$his = $row['reg_date'];
	$stmt = $conn->prepare("SELECT UNIX_TIMESTAMP(NOW()) as reg_date");
	$stmt->execute();
	$row = mysqli_fetch_assoc(mysqli_stmt_get_result($stmt));
	$now = $row['reg_date'];
	echo round(($now - $his)/86400);
?>