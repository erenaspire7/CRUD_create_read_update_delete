<?php
    include 'config.php';
    session_start();
    
    $row = $_SESSION['data'];
    
    echo "Hello, ".$_SESSION['name']."!";
?>

<!DOCTYPE html>
<html>
    
    <body>
        <table>
            <tr>
                <th>id</th>
                <th>name</th>
                <th>email</th>
                <th>password</th>
            </tr>
            <?php 
                while($row){
                    
            ?>
            <tr>
                <td><?php echo $row['id']; ?></td>
                <td><?php echo $row['name']; ?></td>
                <td><?php echo $row['email']; ?></td>
                <td><?php echo $row['pass_word']; ?></td>
            </tr>
            <?php break;} 
            ?>
        </table>
        <a href="<?php echo "edit.php"; ?>">Edit</a>
        <a href="<?php echo "delete.php"; ?>">Delete</a>
    </body>
</html>

