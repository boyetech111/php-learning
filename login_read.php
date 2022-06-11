<?php 

   
    $connection = mysqli_connect('localhost', 'root', '', 'loginapp');
    if($connection){
    echo "we are connected";
    } else {
    die("Database connection failed");
    }


    $query = "INSERT INTO users(username,password)";
    $query .= "VALUES ('$Username', '$Password')";

    $result = mysqli_query($connection, $query);

    if(!$result){
    die('Query Failed'. mysqli_error());
    }
    

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Document</title>
</head>
<body>
    <div class="container">
        <div class="col-sm-6">
            


        </div>    
    </div>    
</body>
</html>