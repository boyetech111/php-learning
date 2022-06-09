<?php

 // $_GET['name'], $_POST['name']
  
 //echo $_SERVER['SERVER_NAME'] . '<br />';
 //echo $_SERVER['REQUEST_METHOD'] . '<br />';
 //echo $_SERVER['SCRIPT_FILENAME'] . '<br />';
 //echo $_SERVER['PHP_SELF'] . '<br />';
 // SESSION  

 

	if(isset($_POST['submit'])){

		session_start();

		$_SESSION['name'] = $_POST['name'];

		header('Location: index.php');
	}

?>

<html>
<head>
    <title>php tuts </title>
</head>
<body>
 
    <form action="<?php echo $_SERVER['PHP_SELF'] ?>" method="POST">
		<input type="text" name="name">
		<input type="submit" name="submit" value="submit">
	</form>


</body>
</html>


if(isset($_POST['submit'])){
	global $connection;
	$Username = $_POST['Username'];
	$Password = $_POST['Password']; 
	
	echo "we are connected";

	$query = "INSERT INTO users(username,password) ";
	$query .= "VALUES ('$Username', '$Password')";


   $result = mysqli_query($connection, $query);  

	if(!$result){
		die('Query Failed' . mysqli_error($myqli));
	}
}