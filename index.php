<!doctype html>
<html lang="en">

<head>
    <?php require 'partials/_head.php'; ?>
    <title>iDiscuss</title>
</head>

<body>
    <?php require 'partials/_header.php'; ?>
    <?php require 'partials/_dbconnect.php'; ?>
    <!-- Carousel -->
    <?php require 'partials/_slideshow.php'; ?>
    <!-- Category container -->
    <div class="container my-3">
        <h2 class="text-center my-5">iDiscuss : Browse Categories</h2>
        <div class="row">
            <!-- Fetch all categories from the Database and Use a loop to iterate through the result set-->
            <?php
            $sql = "SELECT * FROM `categories`;";
            $result = mysqli_query($conn, $sql);
            while ($row = mysqli_fetch_assoc($result)) {
                $id = $row['category_id'];
                $cat = $row['category_name'];
                $desc = $row['category_description'];
                echo '
                <div class="col-md-4 my-2">
                <div class="card" style="width: 18rem;">
                    <a href="/iDiscuss/threadlist.php?catid=' . $id . '"><img src="/iDiscuss/images/card/card-'.$id. '.png" height = "286" width = "286" class="card-img-top" alt="..."></a>
                    <div class="card-body">
                        <h5 class="card-title">' . $cat . '</h5>
                        <p class="card-text">' .substr($desc, 0 , 180). '...</p>
                        <a href="/iDiscuss/threadlist.php?catid='.$id.'" class="btn btn-primary">View Threads</a>
                    </div>
                </div>
            </div> ';
            }




            ?>

        </div>
    </div>

    <div class="container">

    </div>

    <!-- Footer -->
    <?php require 'partials/_footer.php'; ?>
</body>

</html>