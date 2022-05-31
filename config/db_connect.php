<?php 

  // connect to database
 $conn = mysqli_connect('localhost', 'element', 'olaboye@2019', 'ninja_pizza');

 // check connection 
 if(!$conn){
   echo 'connection error: ' . mysqli_connect_error();
 }


?>