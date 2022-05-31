<?php 

  include('config/db_connect.php');

 // connect to database
 $conn = mysqli_connect('localhost', 'element', 'olaboye@2019', 'ninja_pizza');

 // check connection 
 if(!$conn){
   echo 'connection error: ' . mysqli_connect_error();
 }

 // write query for all pizzas
 $sql = 'SELECT title, Ingredients, id FROM pizzas ORDER BY created_at';

 // make query & get result
 $result = mysqli_query($conn, $sql);

 // fetch the resulting rows as an array
 $pizzas = mysqli_fetch_all($result, MYSQLI_ASSOC);

 // free result from memory
 mysqli_free_result($result);

 // close  connection
 mysqli_close($conn);

 //explode(',', $pizzas[0]['Ingredients']);

?>

<!DOCTYPE html>
<html>
<head>
    <title>PIZZA</title>
</head>


    <?php include('templates/header.php'); ?>

    <h4 class="center grey-text">Pizzas!</h4>

    <div class="container">
        <div class="row">
            <?php foreach($pizzas as $pizza): ?>

                <div class="col s6 md3">
                    <div class="card z-depth-0">
                        <img src="img/pizza.svg" class="pizza">
                        <div class="card-content center">
                            <h6><?php echo htmlspecialchars($pizza['title']); ?></h6>
                            <ul>
                                <?php foreach(explode(',', $pizza['Ingredients']) as $Ing): ?>
                                <li><?php echo htmlspecialchars($Ing) ?></li>
                                <?php endforeach; ?>
                            </ul>
                        </div>
                        <div class="card-action right-align">
                            <a href="details.php?id=<?php echo $pizza['id'] ?>" class="brand-text">more info</a>
                        </div>
                    </div>
                </div>

            <?php endforeach; ?>

            <?php if(count($pizzas) >= 3): ?>
              <p></p>
            <?php else: ?>
              <p></p>
            <?php endif; ?>  
        </div>
    </div>


    <?php include('templates/footer.php'); ?>
    

</html> 