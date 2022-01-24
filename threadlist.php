<!doctype html>
<html lang="en">

<head>
    <?php require 'partials/_head.php'; ?>
    <title>iDiscuss : Template</title>
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

    <div class="container my-4">
        <div class="jumbotron bg-light p-5 rounded-lg m-3">
            <h1 class="display-4">Welcome to <?php echo $catname; ?> Forums</h1>
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
                    <a class=" btn btn-info" href="<?php echo $caturl; ?>" target="_blank" role="button">More about <?php echo $catname; ?></a>
                </div>
            </div>
        </div>

        <div class="container">
            <h1 class="py-3">Browse Questions</h1>
            <div class="d-flex border p-3 my-3">
                <img src="/iDiscuss/images/default-user.png" class="flex-shrink-0 me-3 mt-3 rounded-circle" width="64px" height="64px" alt="...">
                <div>
                    <h5 class="mt-0">Unable to add Python to path</h5>
                    <p>I'm trying to Lorem, ipsum dolor sit amet consectetur adipisicing elit. Earum, assumenda ratione? Quod vitae magni sequi..</p>
                    <p>but it always results in Lorem ipsum dolor sit amet consectetur adipisicing elit. Libero vel odit quasi ullam ea hic voluptates, optio quibusdam voluptatem adipisci molestiae, rerum earum aut voluptate?</p>
                </div>
            </div>
            <div class="d-flex border p-3 my-3">
                <img src="/iDiscuss/images/default-user.png" class="flex-shrink-0 me-3 mt-3 rounded-circle" width="64px" height="64px" alt="...">
                <div>
                    <h5 class="mt-0">Unable to add Python to path</h5>
                    <p>I'm trying to Lorem, ipsum dolor sit amet consectetur adipisicing elit. Earum, assumenda ratione? Quod vitae magni sequi..</p>
                    <p>but it always results in Lorem ipsum dolor sit amet consectetur adipisicing elit. Libero vel odit quasi ullam ea hic voluptates, optio quibusdam voluptatem adipisci molestiae, rerum earum aut voluptate?</p>
                </div>
            </div>
            <div class="d-flex border p-3 my-3">
                <img src="/iDiscuss/images/default-user.png" class="flex-shrink-0 me-3 mt-3 rounded-circle" width="64px" height="64px" alt="...">
                <div>
                    <h5 class="mt-0">Unable to add Python to path</h5>
                    <p>I'm trying to Lorem, ipsum dolor sit amet consectetur adipisicing elit. Earum, assumenda ratione? Quod vitae magni sequi..</p>
                    <p>but it always results in Lorem ipsum dolor sit amet consectetur adipisicing elit. Libero vel odit quasi ullam ea hic voluptates, optio quibusdam voluptatem adipisci molestiae, rerum earum aut voluptate?</p>
                </div>
            </div>
            <div class="d-flex border p-3 my-3">
                <img src="/iDiscuss/images/default-user.png" class="flex-shrink-0 me-3 mt-3 rounded-circle" width="64px" height="64px" alt="...">
                <div>
                    <h5 class="mt-0">Unable to add Python to path</h5>
                    <p>I'm trying to Lorem, ipsum dolor sit amet consectetur adipisicing elit. Earum, assumenda ratione? Quod vitae magni sequi..</p>
                    <p>but it always results in Lorem ipsum dolor sit amet consectetur adipisicing elit. Libero vel odit quasi ullam ea hic voluptates, optio quibusdam voluptatem adipisci molestiae, rerum earum aut voluptate?</p>
                </div>
            </div>
            <div class="d-flex border p-3 my-3">
                <img src="/iDiscuss/images/default-user.png" class="flex-shrink-0 me-3 mt-3 rounded-circle" width="64px" height="64px" alt="...">
                <div>
                    <h5 class="mt-0">Unable to add Python to path</h5>
                    <p>I'm trying to Lorem, ipsum dolor sit amet consectetur adipisicing elit. Earum, assumenda ratione? Quod vitae magni sequi..</p>
                    <p>but it always results in Lorem ipsum dolor sit amet consectetur adipisicing elit. Libero vel odit quasi ullam ea hic voluptates, optio quibusdam voluptatem adipisci molestiae, rerum earum aut voluptate?</p>
                </div>
            </div>
        </div>


    </div>


    <!-- Footer -->
    <?php require 'partials/_footer.php'; ?>
</body>

</html>