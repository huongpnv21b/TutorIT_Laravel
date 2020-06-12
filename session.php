<?php
 session_start();
?>

<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<form method="post">
	<input type="text" name="input1">
	<button>Luu trong session</button>
</form>
	<?php 
	 if(isset($_POST["input1"])){
	$_SESSION["username"] = $_POST["input1"];
	 echo "username là: " . $_SESSION["username"];}
	 ?>


</body>
</html>