<!doctype html>
<html lang="en">

<head>
    <?php require 'partials/_head.php'; ?>
    <title>iDiscuss</title>
</head>

<body>
    <?php require 'partials/_header.php'; ?>
    <!-- Carousel -->
    <div class="containermt-10">
        <div id="carouselExampleIndicators" class="carousel slide-fluid" data-bs-ride="carousel">
            <div class="carousel-indicators">
                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
            </div>
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img src="/iDiscuss/images/slider/slideshow1.jpg" height="700px" class="d-block w-100" alt="...">
                </div>
                <div class="carousel-item">
                    <img src="/iDiscuss/images/slider/slideshow2.jpg" height="700px" class="d-block w-100" alt="...">
                </div>
                <div class="carousel-item">
                    <img src="/iDiscuss/images/slider/slideshow3.jpg" height="700px" class="d-block w-100" alt="...">
                </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>
    </div>
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