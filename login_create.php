<?php include "db.php"; 
if(isset($_POST['submit'])){
    $Username = $_POST['Username'];
    $Password = $_POST['Password']; 
    
    echo "we are connected";

    $query = "INSERT INTO users(username,password)";
    $query .= "VALUES ('$Username', '$Password')";


   $result = mysqli_query($connection, $query);  

   if(!$result){
    die('Query Failed' . mysqli_error($myqli));
   }
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
            <form action="login_create.php" method="POST">
                <div class="form-control">
                    <label for="Username">Username</label>
                    <input type="text" name="Username"  class="form-control">
                </div>
                <div class="form-control">
                    <label for="Password">Password</label>
                    <input type="Password" name="Password" class="form-control">
                </div>
                <input class="btn btn-primary" type="submit" name="submit">
            </form> 
        </div>    
    </div>    
</body>
</html>
