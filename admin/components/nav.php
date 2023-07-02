<nav class="navbar navbar-expand-lg navbar-light text-light bg-light">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">
      <img width="50px" src="<?php include '../../assets/logo.php'?>" alt="">
    </a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav mr-auto">
        <li class="nav-item">
          <a class="nav-link" aria-current="page" href="http://localhost/FederalBoard/admin/view/home.php">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Add Record</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="../view/register_student.php">Register student</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="../../user/register.php">Register</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="../../user/register.php">
            <?php
              if(isset($_SESSION['username'])){
                echo "session_started";
                echo "Hello" . $_SESSION['$username'];
              }
              else{
                echo "no session";
              }
            ?>
          </a>
        </li>
      </ul>
      <form class="d-flex" role="search">
        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
        <button class="btn btn-outline-success" type="submit">Search</button>
      </form> 
    </div>
  </div>
</nav>