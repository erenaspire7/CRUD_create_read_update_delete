<?php
    include 'config.php';
    session_start();
    if(isset($_POST['submit'])){
        $name = $_POST['name'];
        $email = $_POST['email'];
        $password = $_POST['pass_word'];

        #$password = md5($password);

        $some_query = "UPDATE users SET name = '$name', email = '$email', pass_word = '$password'";
        $exec_query = $conn->prepare($some_query);
        $exec_query->execute();

        header("Location: dashboard_confirmed.php");
        
    }
    
    
?>