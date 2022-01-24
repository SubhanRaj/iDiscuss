<?php

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
                        <li><a class="dropdown-item" href="/iDiscuss/threadlist.php">Thread List</a></li>
                        <li><a class="dropdown-item" href="#">Another action</a></li>
                        <li>
                            <hr class="dropdown-divider">
                        </li>
                        <li><a class="dropdown-item" href="#">Something else here</a></li>
                    </ul>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="https://masterofcosmos.com" target = "_blank">Connect With Me</a>
                </li>
            </ul>
             <form class="d-flex">
                 <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                 <button class="btn btn-success" type="submit">Search</button>
             </form>
            <div class="mx-2 py-2 d-flex align-items-center justify-content-around">
                <button class="btn btn-outline-danger mx-1" data-bs-toggle="modal" data-bs-target="#loginModal">Login</button>
                <button class="btn btn-outline-warning mx-1 " data-bs-toggle="modal" data-bs-target="#signupModal">Sign Up</button>
            </div>
        </div>
    </div>
</nav>
';
include 'partials/_loginModal.php';
include 'partials/_signupModal.php';
