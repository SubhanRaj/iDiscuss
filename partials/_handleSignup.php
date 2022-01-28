
<?php
$showError = "false";

// Page for handlind signup

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    include '_dbconnect.php';
    $userEmail = $_POST['signupEmail'];
    $password = $_POST['signupPassword'];
    $cPassword = $_POST['signupcPassword'];

    // Check whether the email is already in the database
    $existSql = "SELECT * FROM `users` WHERE userEmail = '$userEmail';";
    $result = mysqli_query($conn, $existSql);
    $numRows = mysqli_num_rows($result);
    if ($numRows > 0) {
        $showError = "Email '.$userEmail.' already in use on <b>iDiscuss</b>.";
    } else {
        if ($password == $cPassword) {
            $hash = password_hash($password, PASSWORD_DEFAULT);
            $sql = "INSERT INTO `users` (`userEmail`, `userPass`, `timestamp`) VALUES ('$userEmail', '$hash', current_timestamp());";
            $result = mysqli_query($conn, $sql);
            // Echo sql in case of error
            if (!$result) {
                echo "Error: " . $sql . "<br>" . mysqli_error($conn);
            } else {
                $showAlert = "User '.$userEmail.' successfully signedup for iDiscuss.";
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

