<!doctype html>
<html lang="en">

<head>
    <?php require 'partials/_head.php'; ?>
    <?php require 'partials/_dbconnect.php'; ?>

    <?php
    $id = $_GET['catid'];
    $sql = "SELECT * FROM `categories` WHERE `category_id` = $id;";
    $result = mysqli_query($conn, $sql);
    while ($row = mysqli_fetch_assoc($result)) {
        $catname = $row['category_name'];
        echo "
        <title>iDiscuss $catname Forum</title>
        ";
    }
    ?>

</head>

<body>
    <!-- Header -->
    <?php require 'partials/_header.php'; ?>
    <?php require 'partials/_dbconnect.php'; ?>
    <!-- PHP for page content -->

    <?php

    $id = $_GET['catid'];
    $sql = "SELECT * FROM `categories` WHERE `category_id` = $id;";
    $result = mysqli_query($conn, $sql);
    while ($row = mysqli_fetch_assoc($result)) {
        $catname = $row['category_name'];
        $catdesc = $row['category_description'];
        $caturl = $row['category_url'];
    }
    ?>

    <?php
    $showAlert = false;
    $method = $_SERVER['REQUEST_METHOD'];
    if ($method == 'POST') {
        // Insert the thread in to the db

        $th_title = $_POST['thread_title'];
        $th_desc = $_POST['thread_desc'];
        $sql = "INSERT INTO `threads` ( `thread_title`, `thread_desc`, `thread_cat_id`, `thread_user_id`) VALUES ('$th_title', '$th_desc', '$id', '0');";
        $result = mysqli_query($conn, $sql);
        echo $sql;
        $showAlert = true;
        if ($showAlert) {
            echo '
            <div class="alert alert-success alert-dismissible fade show" role="alert">
                <strong>Success! </strong>' . $th_title . ' Created Sucessfully
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
            ';
        }
    }

    ?>

    <div class="container my-4">
        <div class="jumbotron bg-light p-5 rounded-lg m-3">
            <h1 class="display-5">Welcome to <?php echo $catname; ?> Forums</h1>
            <p class="lead"><?php echo $catdesc; ?> </p>
            <hr class="my-4">
            <p>This is a Peer to Peer forum for sharing knowledge with each other.</p>
            <div class="d-flex align-items-center justify-content-between">
                <div class="btn btn-outline-danger btn-sm dropdown">
                    <h5 class="dropdown-toggle " data-bs-toggle="dropdown" aria-expanded="false">Forum Rules</h5>
                    <ul class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                        <li class="dropdown-item">No Spam / Advertising / Self-promote in the forums</li>
                        <li>
                            <hr class="dropdown-divider">
                        </li>
                        <li class="dropdown-item">Do not post copyright-infringing material</li>
                        <li>
                            <hr class="dropdown-divider">
                        </li>
                        <li class="dropdown-item">Do not post “offensive” posts, links or images</li>
                        <li>
                            <hr class="dropdown-divider">
                        </li>
                        <li class="dropdown-item">Do not cross post questions</li>
                        <li>
                            <hr class="dropdown-divider">
                        </li>
                        <li class="dropdown-item">Remain respectful of other members at all times</li>
                    </ul>
                </div>
                <div class="my-2">
                    <a class=" btn btn-success" href="<?php echo $caturl; ?>" target="_blank" role="button">More about
                        <?php echo $catname; ?></a>
                </div>
            </div>
        </div>

        <div class="container">
            <div class="container">
                <h1 class="py-3">Start Discussion</h1>
                <form action="<?php echo $_SERVER['REQUEST_URI'] ?>" method="POST">
                    <div class="mb-3">
                        <label for="thread_title" class="form-label">Ask your question</label>
                        <input type="text" class="form-control" id="thread_title" name="thread_title" aria-describedby="emailHelp">
                        <div id="emailHelp" class="form-text">Keep your question short and accurate</div>
                    </div>
                    <div class="mb-3">
                        <label for="thread_desc">Describe the question</label>
                        <textarea name="thread_desc" id="thread_desc" rows="10" class="form-control"></textarea>
                    </div>
                    <button type="submit" class="btn btn-success">Submit</button>
                </form>

            </div>
            <h1 class="py-3">Browse Questions</h1>
            <!-- Fetching data from DB -->

            <?php
            $id = $_GET['catid'];

            $sql = "SELECT * FROM `threads` WHERE `thread_cat_id` = $id;";
            $result = mysqli_query($conn, $sql);
            $noResult = true;
            while ($row = mysqli_fetch_assoc($result)) {
                $noResult = false;
                $id = $row['thread_id'];
                $thread_ques = $row['thread_title'];
                $thread_desc = $row['thread_desc'];

                echo '
                    <div class="d-flex border p-3 my-3">
                        <img src="/iDiscuss/images/default-user.png" class="flex-shrink-0 me-3 mt-3 rounded-circle" width="64px" height="64px" alt="">
                        <div>
                            <h5 class="mt-0"><a class = "text-dark text-decoration-none" href="/iDiscuss/thread.php?threadid=' . $id . '">' . $thread_ques . '</a></h5>
                            <p>' . $thread_desc . '</p>
                        </div>
                     </div>
                ';
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
        </div>
    </div>


    <!-- Footer -->
    <?php require 'partials/_footer.php'; ?>
</body>

</html>