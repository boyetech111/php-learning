<?php include "db.php";?>
<?php 

function showAllData(){
    global $connection;
    $query = "SELECT * FROM  users";
    $result = mysqli_query($connection, $query);  
    if(!$result){
    die('Query Failed' . mysqli_error($connection));
    }


    while($row = mysqli_fetch_assoc($result) ){
    $id = $row['id'];
    echo "<option value='$id'>$id</option>";
    }

}


    function UpdateTable(){
        global $connection;
        $Username =  $_POST['Username'];
        $Password =  $_POST['Password'];
        $id = $_POST['id'];
        
        $query = "UPDATE users SET ";
        $query .= "username = '$Username', ";
        $query .= "password = '$Password' ";
        $query .= "WHERE id = $id ";
    
        $result = mysqli_query($connection, $query);
        if(!$result) {
        die("QUERY FAILED" . mysqli_error($connection));
        }
    }




    
?>