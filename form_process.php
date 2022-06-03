<?php

if(isset($_POST['submit'])){

    $name = array("olaboye", "student", "peter", "saheed", "mahmud", "maria", "jane", "tom");
    $minimun = 5;
    $maximun = 10;

$Username = $_POST['Username'];
$Password = $_POST['Password'];

if(strlen($Username) < $minimun) {

    echo "username should be longer five";
}

if(strlen($Username) > $maximun){
    echo "username should not less than ten"; 
}

if(!in_array($Username, $name)){

    echo "Sorry you not allow";
} else{
    echo "welcome";
}

$query = "INSERT INTO users(username,password)";
   $query .= "VALUES ('$Username', '$Password')";


   $result = mysqli_query($connection, $query);  

   if(!$result){
    die('Query Failed' . mysqli_error($myqli));
   }

// echo "hello" . $Username;
// echo "Your password is" . $Password;



    // $Username = $_POST['Username'];
    // $Password = $_POST['Password'];

    //  if($Username && $Password){
    //   echo $Username;
    //    echo $Password;

    // } else {
    //      echo "this field cannot be blank";
    //  }``


}

/*
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

</body>
</html>