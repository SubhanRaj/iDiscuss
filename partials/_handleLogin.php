<?php
$showError = "false";


if ($_SERVER["REQUEST_METHOD"] == "POST") {
    include '_dbconnect.php';
    $email = $_POST['loginEmail'];
    $password = $_POST['loginPassword'];
    $sql = "SELECT * FROM `users` WHERE `userEmail` = '$email';";
    $result = mysqli_query($conn, $sql);
    echo $result;
    // Show SQL in case of error

    // if (!$result) {
    //     echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    // }


    $numRows = mysqli_num_rows($result);
    if ($numRows == 1) {
        while ($row = mysqli_fetch_assoc($result)) {
            if (password_verify($password, $row['userPass'])) {

                session_start();
                $_SESSION['loggedin'] = true;
                $_SESSION['username'] = $email;
                echo 'Logged in with email: ' . $email;
                header("Location : /iDiscuss/index.php");
                exit();
            } 
            else {
                $showError = "Password is incorrect.";
                echo $showError;
                // header("Location : /iDiscuss/index.php?error=$showError Password = $password");
                // echo 'Password is incorrect.' . $password;
            }
        }
    }
} else {
    $showError = "Invalid username or password";
    echo $showError;
}
?>