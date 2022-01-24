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
            <!-- Use a PHP for loop to retrive categories data from the database -->
            <?php



            ?>

            <div class="col-md-4 my-2">
                <div class="card" style="width: 18rem;">
                    <img src="/iDiscuss/images/python.png" height="235" width="180" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Card title</h5>
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                        <a href="#" class="btn btn-primary">View Threads</a>
                    </div>
                </div>
            </div>


            <div class="col-md-4 my-2">
                <div class="card" style="width: 18rem;">
                    <img src="/iDiscuss/images/js.png" height="235" width="180" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Card title</h5>
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                        <a href="#" class="btn btn-primary">View Threads</a>
                    </div>
                </div>
            </div>
            <div class="col-md-4 my-2">
                <div class="card" style="width: 18rem;">
                    <img src="/iDiscuss/images/cpp.png" height="235" width="180" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Card title</h5>
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                        <a href="#" class="btn btn-primary">View Threads</a>
                    </div>
                </div>
            </div>

        </div>
    </div>

    <div class="container">

    </div>

    <!-- Footer -->
    <?php require 'partials/_footer.php'; ?>
</body>

</html>