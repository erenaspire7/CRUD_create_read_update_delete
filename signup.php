<?php
    include 'config.php';

    if(isset($_POST['submit'])){
        $name = $_POST['name'];
        $email = $_POST['email'];
        $password = $_POST['pass_word'];

        #$password = md5($password);

        $some_query = "INSERT INTO users (name, email, pass_word) VALUES ('$name', '$email', '$password')";
        $exec_query = $conn->prepare($some_query);
        $exec_query->execute();
        
        
        header("Location: index_signup.php");
        
        
    }
    
    
?>