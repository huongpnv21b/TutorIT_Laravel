
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
	 $_COOKIE["username"] = $_POST["input1"];
	 setcookie('username', '$_COOKIE["username"]', time() + 600);
		
	 echo "username là: " . $_COOKIE["username"];}
	 ?>
</body>
</html>