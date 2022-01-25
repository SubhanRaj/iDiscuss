<!-- Thread -->

<!doctype html>
<html lang="en">

<head>
    <?php require 'partials/_head.php'; ?>
    <?php require 'partials/_dbconnect.php'; ?>

    <?php
    $id = $_GET['threadid'];
    $sql = "SELECT * FROM `threads` WHERE `thread_id` = $id;";
    $result = mysqli_query($conn, $sql);
    while ($row = mysqli_fetch_assoc($result)) {
        $threadname = $row['thread_title'];
        echo "
        <title>$threadname : iDiscuss </title>
        ";
    }
    ?>
</head>

<body>
    <!-- Header -->
    <?php require 'partials/_header.php'; ?>
    <?php require 'partials/_dbconnect.php'; ?>
    <div class="container vh-100">
        <?php
        $id = $_GET['threadid'];
        $sql = "SELECT * FROM `threads` WHERE `thread_id` = $id;";
        $result = mysqli_query($conn, $sql);
        while ($row = mysqli_fetch_assoc($result)) {
            $threadname = $row['thread_title'];
            $threaddesc = $row['thread_desc'];
        }
        ?>
        <div class="container my-4 ">
            <div class="jumbotron bg-light p-5 rounded-lg m-3">
                <h1 class="display-5"> <?php echo $threadname; ?></h1>
                <hr class="my-4">
                <p class="lead"><?php echo $threaddesc; ?> </p>
                <p><b>Posted by: </b>Subhan</p>
            </div>
        </div>

        <div class="container my-4 ">
            <h1 class="py-3">Discussion</h1>



        </div>
    </div>


    <!-- Footer -->
    <?php require 'partials/_footer.php'; ?>
</body>

</html>