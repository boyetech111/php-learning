<?php include "db.php";?>
<?php include "function.php";?>
<?php UpdateTable();?>
<?php include "includes/header.php" ?>

    <div class="container">
        <div class="col-sm-6">
            <h1 class="text-center">UPDATE</h1>
            <form action="login_update.php" method="POST">
                <div class="form-control">
                    <label for="Username">Username</label>
                    <input type="text" name="Username"  class="form-control">
                </div>
                <div class="form-control">
                    <label for="Password">Password</label>
                    <input type="Password" name="Password" class="form-control">
                </div>
                <div class="form-control">
                    <select name="id" id="id">
                        <?php
                           showAllData();
                        ?>
                     
                    </select>
                </div>
                <input class="btn btn-primary" type="submit" name="submit" value="UPDATE">
            </form> 
        </div>    
    </div>    
<?php include "includes/footer.php" ?>
