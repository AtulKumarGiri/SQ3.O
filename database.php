<?php
    $conn = mysqli_connect('localhost', 'root','', 'spark-quest-database');

    if(mysqli_connect_error()){
        echo "<script> alert('Connection Error'); </script>";
        exit();
    }
    header('location:index.php');
    
    if($_SERVER["REQUEST_METHOD"] == "POST"){

        if (isset($_POST['subscribe'])){
            $email = $_POST['email'];

            $sql = "INSERT INTO `update-users` (email) values ('$email')";

            $query = mysqli_query($conn,$sql);

        }

    }
    exit();

?>

