<?php
SESSION_START();

echo '

<nav class="navbar sticky-top navbar-expand-lg navbar-dark bg-dark">
    <div class="container-fluid">
        <a class="navbar-brand" href="/iDiscuss"><img src="iDiscuss.png" height="40px" class="mx-2">iDiscuss : A PHP Forum</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-">
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="/iDiscuss">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/iDiscuss/about.php">About</a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        Topics
                    </a>
                    <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <li><a class="dropdown-item" href="#">Some Action</a></li>
                        <li><a class="dropdown-item" href="#">Another action</a></li>
                        <li>
                            <hr class="dropdown-divider">
                        </li>
                        <li><a class="dropdown-item" href="#">Something else here</a></li>
                    </ul>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="https://masterofcosmos.com" target = "_blank">Contact Me</a>
                </li>
            </ul> ';

if (isset($_SESSION['loggedin']) && $_SESSION['loggedin'] == TRUE) {
    echo '
        <form class="d-flex">
                 <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                 <button class="btn btn-success" type="submit">Search</button>
                 <p class = "text-light my-0 mx-2 align-center">Welcome ' . $_SESSION['username'] . '</p>
                 <a href = "/iDiscuss/partials/_logout.php" class="btn btn-outline-success mx-1 py-2">Logout</a>
        </form>';
} else {
    echo
    '
         <form class="d-flex">
            <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
            <button class="btn btn-success" type="submit">Search</button>
        </form>
        <div class="mx-2 py-2 d-flex align-items-center justify-content-around">
                <button class="btn btn-outline-danger mx-1" data-bs-toggle="modal" data-bs-target="#loginModal">Login</button>
                <button class="btn btn-outline-warning mx-1 " data-bs-toggle="modal" data-bs-target="#signupModal">Sign Up</button>
            </div>
        ';
}

echo '         
        </div>
    </div>
</nav>
';
include 'partials/_loginModal.php';
include 'partials/_signupModal.php';

if (isset($_GET['signupSuccess']) && $_GET['signupSuccess'] == "true") {
    echo '<div class="alert alert-success alert-dismissible fade show my-0" role="alert">
            <strong>Success!</strong> You can now login
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>';
}
if (isset($_GET['loggedin']) && $_GET['loggedin'] == "true") {
    echo '<div class="alert alert-success alert-dismissible fade show my-0" role="alert">
            <strong>Success!</strong> You logged in Successfully
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>';
}

?>