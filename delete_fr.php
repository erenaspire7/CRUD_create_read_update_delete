<?php
    include 'config.php';
    session_start();
    $row = $_SESSION['data'];
    
    
    if(isset($_POST['submit'])){
        $email = $row['email'];
        $password = $row['pass_word'];

        #$password = md5($password);
        
        
        
        $some_query = "DELETE FROM users WHERE email='$email' AND pass_word='$password'";
        $exec_query = $conn->prepare($some_query);
        $exec_query->execute();
        
        
        header("Location: delete_confirmed.php");
        
    }
?>