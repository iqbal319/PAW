<?php  

require 'config.php';

$username = $_POST['username'];
$password = $_POST['password'];

$result = mysqli_query($koneksi, "SELECT * from admin WHERE username='$username' and password='$password'");
$data = mysqli_fetch_assoc($result);

if ($data){
	$level = $data["level"];
	if ($level == "admin"){
		header("Location: index.php") ;
	}else {

	}
}

?>