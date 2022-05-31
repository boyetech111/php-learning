<?php

if(isset($_POST['submit'])){

   echo $_POST['submit'];

   $name = array("olaboye", "student", "peter", "saheed", "mahmud", "maria", "jane", "tom");
   $minimun = 5;
   $maximun = 10;
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


?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<body>
    <div class="container">
        <form action="form_two.php" method="POST">
        
            <input name="submit" type="submit">
        </form>
    </div>    
</body>
</html>