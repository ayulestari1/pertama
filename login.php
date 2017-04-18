<?php  

	header('Access-Control-Allow-Origin:*');

	$host = "localhost";
	$user = "root";
	$pass ="";
	$db = "shopping";

	$u = $_GET['u'];
	$p = $_GET['p'];

	$connect = mysqli_connect($host, $user, $pass, $db);

	if($connect){
		$query = "select * from user where username='$u' and password='$p'";
		$result = mysqli_query($connect, $query);

		if(mysqli_num_rows($result)>0){
			while($row = $result->fetch_assoc()){
				$username = $row['username'];
			}
			echo "sukses-$username";
		}
		else{
			echo "gagal";
		}
	}
	else{
		die("Check your network");
	}
?>