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