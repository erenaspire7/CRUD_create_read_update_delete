<?php
    include 'config.php';
    session_start();
    
    $row = $_SESSION['data'];
    
    echo "Hello, ".$_SESSION['name']."!";
?>

<!DOCTYPE html>
<html>
    <head>
        <title></title>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    </head>
    <body>
        <div class="container" style="margin-top: 25px;">
            <form action="delete_fr.php" method="post">
                
                    <div class="form-group text-center">
                        <p>Are you sure you want to delete your account?</p> 
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="" id="defaultCheck1">
                            <label class="form-check-label text-muted" for="defaultCheck1">
                                Tick to be certain
                            </label>
                        </div>
                    </div>
                    <button name="submit" type="submit" class="btn btn-primary" style="margin-left: 520px">Submit</button>
                
            </form>
        </div>
    </body>
</html>
