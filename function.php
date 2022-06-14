<?php include "db.php";?>
<?php 

function createRows(){
    if(isset($_POST['submit'])){
        global $connection;
        $Username = $_POST['Username'];
        $Password = $_POST['Password']; 

        $Username = mysqli_real_escape_string($connection, $Username);
        $Password = mysqli_real_escape_string($connection, $Password);
         

        $hashFormat = "$2y$10$";
        $salt = "iusesomecrazystring22";
        $hashF_and_salt = $hashFormat . $salt;

        $Password = crypt($Password, $hashF_and_salt);
    
        $query = "INSERT INTO users(username,password) ";
        $query .= "VALUES ('$Username', '$Password')";
    
    
       $result = mysqli_query($connection, $query);  
    
       if(!$result){
        die('Query Failed' . mysqli_error($connection));

       } else {
        echo "Record Create";
       }
    }
    
}


function readRows(){
    global $connection;
    $query = "SELECT * FROM users";
    $result = mysqli_query($connection, $query);
    if(!$result){
    die('Query Failed' . mysqli_error($connection));
    }

    
    while($row = mysqli_fetch_assoc($result)) {           
        print_r($row);
    }          

}






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
        if(isset($_POST['submit'])){
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
        } else {
            echo "Record Updated";
        }
        
        }
    }

    function deleteRows(){
        if(isset($_POST['submit'])){
        global $connection;
        $Username =  $_POST['Username'];
        $Password =  $_POST['Password'];
        $id = $_POST['id'];
        
        $query = "DELETE FROM users ";
        $query .= "WHERE id = $id ";
    
        $result = mysqli_query($connection, $query);
        if(!$result) {
        die("QUERY FAILED" . mysqli_error($connection));
        } else {
            echo "Record Deleted";
        }

        }
    }



    
?>