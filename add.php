<?php 

 include('config/db_connect.php');

  $title = $email = $Ingredients = '';
  $error = array('email'=>'', 'title'=>'', 'Ingredients'=>'');

  if(isset($_POST['submit'])){
    

    // check email
    if(empty($_POST['email'])){
      $error['email'] = 'An email is required <br />';
    }   else {
        $email = $_POST['email'];
        if(!filter_var($email, FILTER_VALIDATE_EMAIL)){
          $error['email'] = 'email must be a valid email addresss'; 
        }
    }
    // check title
    if(empty($_POST['title'])){
      $error['title'] = 'A title is required <br />';
    }  else{
        $title = $_POST['title'];
        if(!preg_match('/^[a-zA-Z\s]+$/', $title)){
          $error['title'] = 'Title must be letters and spaces only';
        } 
    }
    // check Ingredients
    if(empty($_POST['Ingredients'])){
        $error['Ingredients'] = 'At least one Ingredients is required <br />';
    }  else{
      $Ingredients = $_POST['Ingredients'];
      if(!preg_match('/^([a-zA-Z\s]+)(,\s*[a-zA-Z\s]*)*$/', $Ingredients)){
        $error['Ingredients'] = 'Ingredients must be a comma separated list';
      }   
    }
   
    if(array_filter($error)){
    //  echo 'errors in the form';
    } else{

      $email = mysqli_real_escape_string($conn, $_POST['email']);
      $title = mysqli_real_escape_string($conn, $_POST['title']);
      $Ingredients = mysqli_real_escape_string($conn, $_POST['Ingredients']);

    // create sql
    $sql = "INSERT INTO pizzas(title,email,Ingredients) VALUES('$title', '$email', '$Ingredients')";

    // save to db and check
    if(mysqli_query($conn, $sql)){
      // success
      header('Location: index.php');
    } else {
      // error
      echo 'query error: ' . mysqli_error($conn); 
    }
    
    }

  } // end of POST check

   
?>

<!DOCTYPE html>
<html>

<?php include('templates/header.php'); ?>

<section class="container grey-text">
  <h4 class="center">Add a Pizza</h4>
    <form class="white" action="add.php" method="POST">
      <label>Your Email:</label>
      <input type="text" name="email" value="<?php echo htmlspecialchars($email) ?>">
      <div class="red-text"><?php echo $error['email']; ?></div>
      <label>Pizza title:</label>
      <input type="text" name="title" value="<?php echo htmlspecialchars($title) ?>">
      <div class="red-text"><?php echo $error['title']; ?></div>
      <label>Ingredients (comma separated):</label>
      <input type="text" name="Ingredients" value="<?php echo htmlspecialchars($Ingredients) ?>">
      <div class="red-text"><?php echo $error['Ingredients']; ?></div>
        <div class="center">
          <input type="submit" name="submit" value="submit" class="btn brand z-depth-0"> 
        </div>
    </form>
</section>

<?php include('templates/footer.php'); ?>

</html>