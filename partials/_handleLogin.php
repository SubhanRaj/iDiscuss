<?php
$showError = "false";



if ($_SERVER["REQUEST_METHOD"] == "POST") {
    include '_dbconnect.php';
    $email = $_POST['loginEmail'];
    $pass  = $_POST['loginPass'];
    $sql = "SELECT * FROM `users` WHERE `userEmail` = '$email'";
    $result = mysqli_query($conn, $sql);
    
    $numRows = mysqli_num_rows($result);
    if ($numRows == 1) {
        $row = mysqli_fetch_assoc($result);
        if (password_verify($pass, $row['userPass'])) {
            session_start();
            $_SESSION['loggedin'] = true;
            $_SESSION['useremail'] = $email;
            echo "logged in" . $email;
            header("Location: /iDiscuss/index.php");
        }
        else {
            echo "Unable to login";
        }
        
    }
    // Show error for 5 seconds and then redirect to index.php
    else {
        $showError = "Invalid username or password";
        echo $showError;
        header("Refresh: 5; url=/iDiscuss/index.php");
    }
    header("Location: /iDiscuss/index.php");  
}

?>
