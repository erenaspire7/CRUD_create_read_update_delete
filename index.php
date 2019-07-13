<?php
    include 'config.php';   
?>

<!DOCTYPE html>
<html>
    <head>
        <title></title>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    </head>
    <body>
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <a class="navbar-brand" href="#">Navbar</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item active">
                        <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Features</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Pricing</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Disabled</a>
                    </li>
                </ul>
            </div>
        </nav>
        <div class="container" style="margin-top: 25px;">
            <div class="row">
                <form action="signup.php" method="post" class="col-sm-6">
                    <h3 style="text-align: center">Sign Up!</h3>
                    <div class="form-group">
                        <label for="exampleInputName1">Name</label>
                        <input name = "name" type="text" class="form-control" id="exampleInputName1" placeholder="Please enter your name">
                    </div>

                    <div class="form-group">
                        <label for="exampleInputEmail1">Email address</label>
                        <input name = "email" type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
                        <!--<small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>-->
                    </div>
                    <div class="form-group">
                        <label for="exampleInputPassword1">Password</label>
                        <input name = "pass_word" type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
                    </div>
                    <!--<div class="form-group form-check">
                        <input type="checkbox" class="form-check-input" id="exampleCheck1">
                        <label class="form-check-label" for="exampleCheck1">Check me out</label>
                    </div>-->
                    <button name="submit" type="submit" class="btn btn-primary">Submit</button>
                    
                    
                </form>
                
                <form action="signin.php" method="post" class="col-sm-6">
                    <h3 style="text-align: center">Sign In!</h3>
                    <div class="form-group">
                        <label for="exampleInputEmail2">Email address</label>
                        <input name = "email" type="email" class="form-control" id="exampleInputEmail2" aria-describedby="emailHelp" placeholder="Enter email">
                        <!--<small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>-->
                    </div>
                    <div class="form-group">
                        <label for="exampleInputPassword2">Password</label>
                        <input name = "pass_word" type="password" class="form-control" id="exampleInputPassword2" placeholder="Password">
                    </div>
                    <!--<div class="form-group form-check">
                        <input type="checkbox" class="form-check-input" id="exampleCheck1">
                        <label class="form-check-label" for="exampleCheck1">Check me out</label>
                    </div>-->
                    <button name="submit" type="submit" class="btn btn-primary">Submit</button>
                </form>
            </div>
        </div>
    </body>
</html>
