
<?php
$showError = "false";

// Page for handlind signup

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    include '_dbconnect.php';
    $userEmail = $_POST['signupEmail'];
    $userName = $_POST['userName'];
    $password = $_POST['Password'];
    $cPassword = $_POST['cPassword'];

    // Check whether the email or username is already in the database
    $existSql = "SELECT * FROM `users` WHERE userEmail = '$userEmail' AND userName = '$userName';";
    $result = mysqli_query($conn, $existSql);
    $numRows = mysqli_num_rows($result);
    if ($numRows > 0) {
        $showError = "Email '.$userEmail.' or Username already in use on <b>iDiscuss</b>.";
    } else {
        if ($password == $cPassword) {
            $hash = password_hash($password, PASSWORD_DEFAULT);
            $sql = "INSERT INTO `users` (`userName`, `userEmail`, `userPass`, `timestamp`) VALUES ('$userName','$userEmail', '$hash', current_timestamp());";
            $result = mysqli_query($conn, $sql);
            // Echo sql in case of error
            if (!$result) {
                echo "Error: " . $sql . "<br>" . mysqli_error($conn);
            } else {
                $showAlert = "User '.$userName.' successfully signedup for iDiscuss.";
                header("Location: /iDiscuss/index.php?signupSuccess=true");
                exit();
            }
        } else {
            $showError = "Passwords do not match.";
        }
    }
    header("Location: /iDiscuss/index.php?signupSuccess=false&error=$showError");
}



?>

