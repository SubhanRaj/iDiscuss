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
                $cat = $row['category_name'];
                $desc = $row['category_description'];
                echo '
                <div class="col-md-4 my-2">
                <div class="card" style="width: 18rem;">
                    <img src="https://source.unsplash.com/500x400/?' . $cat . ' ,coding ,programming, computer"  class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">' . $cat . '</h5>
                        <p class="card-text">' .substr($desc, 0 , 200). '</p>
                        <a href="#" class="btn btn-primary">View Threads</a>
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