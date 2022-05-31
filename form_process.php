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

// echo "hello" . $Username;
// echo "Your password is" . $Password;

}