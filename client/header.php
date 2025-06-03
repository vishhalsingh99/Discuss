<?php
session_start();
?>
<nav class="navbar navbar-expand-lg navbar-dark bg-dark" style="font-family: 'Arial', sans-serif;">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">Discuss</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
      aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a href="./" class="nav-link text-gray-200 font-semibold uppercase hover:text-blue-500 hover:underline transition">Home</a>
        </li>

        <?php if (isset($_SESSION['user']['username'])) { ?>
          <li class="nav-item">
            <a href="./server/requests.php?logout=true" class="nav-link text-gray-200 font-semibold uppercase hover:text-blue-500 hover:underline transition">Logout</a>
          </li>
          <li class="nav-item">
            <a href="?askQuestion=true" class="nav-link text-gray-200 font-semibold uppercase hover:text-blue-500 hover:underline transition">Ask Question</a>
          </li>

          <li class="nav-item">
            <a href="?myQuestion=true" class="nav-link text-gray-200 font-semibold uppercase hover:text-blue-500 hover:underline transition">My Questions</a>
          </li>
        <?php } else { ?>
          <li class="nav-item">
            <a href="?login=true" class="nav-link text-gray-200 font-semibold uppercase hover:text-blue-500 hover:underline transition">Login</a>
          </li>
          <li class="nav-item">
            <a href="?signup=true" class="nav-link text-gray-200 font-semibold uppercase hover:text-blue-500 hover:underline transition">SignUp</a>
          </li>
        <?php } ?>

        <li class="nav-item">
          <a href="?latest=true" class="nav-link text-gray-200 font-semibold uppercase hover:text-blue-500 hover:underline transition">Latest Questions</a>
        </li>
      </ul>
      <form class="d-flex" action="">
        <input class="form-control me-2" type="search" name="search" placeholder="Search" aria-label="Search">
        <button class="btn btn-outline-success" type="submit">Search</button>
      </form>

    </div>
  </div>
</nav>
