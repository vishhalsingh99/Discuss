<?php
session_start();
?>
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <div class="container-fluid">
        <a class="navbar-brand" href="#">Discuss</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item">
                    <a class="nav-link" href="./">Home</a>
                </li>

                <?php if (isset($_SESSION['user']['username'])) { ?>
                    <li class="nav-item">
                        <a class="nav-link" href="./server/requests.php?logout=true">Logout</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="?askQuestion=true">Ask Question</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="?myQuestion=true">My Questions</a>
                    </li>
                <?php } else { ?>
                    <li class="nav-item">
                        <a class="nav-link" href="?login=true">Login</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="?signup=true">SignUp</a>
                    </li>
                <?php } ?>

                <li class="nav-item">
                    <a class="nav-link" href="?latest=true">Latest Questions</a>
                </li>
            </ul>
            <form class="d-flex" action="">
                <input class="form-control me-2" type="search" name="search" placeholder="Search" aria-label="Search">
                <button class="btn btn-outline-success" type="submit">Search</button>
            </form>

        </div>
    </div>
</nav>