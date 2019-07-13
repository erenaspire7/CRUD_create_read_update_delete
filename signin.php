<?php
    include 'config.php';
    
    if(isset($_POST['submit'])){
        $email = $_POST['email'];
        $password = $_POST['pass_word'];

        #$password = md5($password);
        
        session_start();
        
        $some_query = "SELECT * FROM users WHERE email = '$email' AND pass_word= '$password'";
        $exec_query = $conn->prepare($some_query);
        $exec_query->execute();
        
        $row = $exec_query->fetch(PDO::FETCH_BOTH);
        $id = $row['id'];
        $_SESSION['name'] = $row['name'];
        $_SESSION['data'] = $row;
        header("Location: dashboard.php?id=$id");
        
    }
    
    
?>