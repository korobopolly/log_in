<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
    </head>
<!--<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />-->
	<?php

		$host = 'localhost';
		$user = 'shqkd1492';
		$pw = '1234';
		$dbName = 'sungkyul';
		$mysqli = new mysqli($host, $user, $pw, $dbName);

		$member_email = $_POST['email'];
		$member_password = $_POST['password'];
		$member_password_confirm = $_POST['password_confirm'];
		$member_name = $_POST['name'];
		$member_phone = $_POST['phone'];

		$sql = "insert into member01 (
				member_email,
				member_password,
				member_password_confirm,
				member_name,
				member_phone
		)";
		
		$sql = $sql. "values (
				'$member_email',
				'$member_password',
				'$member_password_confirm',
				'$member_name',
				'$member_phone'
		)";

		if($mysqli->query($sql)){ 
		echo '<script>alert("success inserting")</script>'; 
		}else{ 
		echo '<script>alert("fail to insert sql")</script>';
		}

		mysqli_close($mysqli);
	
	?>

	<script>
		location.href = "log-in.html";
	</script>

</html>