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
    <div class="container min-vh-100">
        <?php
        $id = $_GET['threadid'];
        $sql = "SELECT * FROM `threads` WHERE `thread_id` = $id;";
        $result = mysqli_query($conn, $sql);
        $noResult = true;
        while ($row = mysqli_fetch_assoc($result)) {
            $noResult = false;
            $threadname = $row['thread_title'];
            $threaddesc = $row['content'];
        }
        if ($noResult) {
            echo '
                <div class="container my-4">
                     <div class="jumbotron bg-light p-5 rounded-lg m-3">
                        <h5 class="mt-0">No Threads</h5>
                        <p>There are no threads in this category yet. Be the first person to ask a question!</p>
                    </div>
                </div>
                ';
        }
        ?>
        <!-- Inserting comment into database -->
        <?php
        $showAlert = false;
        $method = $_SERVER['REQUEST_METHOD'];
        if ($method == 'POST') {
            // Insert the comment in to the database

            $comment = $_POST['content'];
            $sql = "INSERT INTO `comments` (`comment_content`, `thread_id`, `comment_by`) VALUES ('$comment', '$id', '0');";
            $result = mysqli_query($conn, $sql);
            // echo if error if $result fails
            if (!$result) {
                echo '
                <div class="alert alert-danger alert-dismissible fade show" role="alert">
                    <strong>Error! </strong>' . mysqli_error($conn) . '
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
                ';
            }
            $showAlert = true;
            if ($showAlert) {
                echo '
            <div class="alert alert-success alert-dismissible fade show" role="alert">
                <strong>Success! </strong>Your Comment has been added sucessfully
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
            ';
            }
        }
        ?>
        <!-- Listing Thread with Thread title and description -->
        <div class="container my-4 ">
            <div class="jumbotron bg-light p-5 rounded-lg m-3">
                <h1 class="display-5"> <?php echo $threadname; ?></h1>
                <hr class="my-4">
                <p class="lead"><?php echo $threaddesc; ?> </p>
                <p><b>Posted by: </b>Subhan</p>
            </div>
        </div>



        <!-- Form for comment -->
        <div class="container my-4">
            <h1 class="py-3">Add comments</h1>
            <form action="<?php echo $_SERVER['REQUEST_URI'] ?>" method="POST">
                <div class="mb-3">
                    <label for="content">Write Your Comment</label>
                    <textarea name="content" id="content" rows="5" class="form-control"></textarea>
                </div>
                <button type="submit" class="btn btn-success">Comment</button>
            </form>
        </div>

        <!-- Listing All Comments -->
        <div class="container">
            <h1 class="py-3">Discussion</h1>
            <?php
            $id = $_GET['threadid'];
            $sql = "SELECT * FROM `comments` WHERE `thread_id`=$id";
            $result = mysqli_query($conn, $sql);
            $noResult = true;

            while ($row = mysqli_fetch_assoc($result)) {
                $noResult = false;
                $id = $row['comment_id'];
                $content = $row['comment_content'];
                $time= $row['comment_time'];

                echo '
                    <div class="d-flex border p-3 my-3">
                        <img src="/iDiscuss/images/default-user.png" class="flex-shrink-0 me-3 mt-3 rounded-circle" width="64px" height="64px" alt="">
                        <div>
                        <h5 class = "my-0 ">By: Subhan at ' . $time . '</h5>
                            ' . $content . '
                        </div>
                     </div>
                ';
            }

            if ($noResult) {
                echo '
                <div class="container my-4">
                     <div class="jumbotron bg-light p-5 rounded-lg m-3">
                        <h5 class="mt-0">No Comments Yet</h5>
                        <p>Be the first to add a comment!</p>
                    </div>
                </div>
                ';
            }

            ?>

        </div>
    </div>


    <!-- Footer -->
    <?php require 'partials/_footer.php'; ?>
</body>

</html>