<?php
    include 'config.php';
    
    session_start();
    
    $row = $_SESSION['data'];
?>
<!DOCTYPE html>
<html>
<head>
    <title></title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</head>
<body>
`<div class="container">
        <form action="changed.php" method="post" class="col-sm-6" style="margin: 0 auto;">
            <h3 style="text-align: center">Edit!</h3>
            <div class="form-group">
                <label for="exampleInputName1">Name</label>
                <input name = "name" type="text" class="form-control" id="exampleInputName1" placeholder="Please enter your name" value="<?php echo $row['name']; ?>">
            </div>

            <div class="form-group">
                <label for="exampleInputEmail1">Email address</label>
                <input name = "email" type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email" value="<?php echo $row['email']; ?>">
                <!--<small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>-->
            </div>
            <div class="form-group">
                <label for="exampleInputPassword1">Password</label>
                <input name = "pass_word" type="password" class="form-control" id="exampleInputPassword1" placeholder="Password" value="<?php echo $row['pass_word']; ?>">
            </div>
            <!--<div class="form-group form-check">
                <input type="checkbox" class="form-check-input" id="exampleCheck1">
                <label class="form-check-label" for="exampleCheck1">Check me out</label>
            </div>-->
            <button name="submit" type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
</body>
</html>
