  <?php
  require './config/connector.php';

  $query = "SELECT * FROM showroom_ema_table";
  $result = mysqli_query($koneksi, $query);


  if (isset($_SESSION["login"])) {
    $login_as = $_SESSION["email"];
    $result_login = mysqli_query($koneksi, "SELECT * FROM users WHERE email = '$login_as'");
    $data_login = mysqli_fetch_assoc($result_login);
  }
  ?>

  <!doctype html>
  <html lang="en">

  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Home</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <style>
      <?php include 'asset/style/style.css'; ?>
    </style>
  </head>

  <body>
    <!-- Nav -->
    <nav class="navbar navbar-expand navbar-dark bg-<?= isset($_COOKIE["warna_navbar"])  ? $_COOKIE["warna_navbar"] : "success"; ?>">
      <div class="container py-2">
        <?php if (isset($_SESSION["login"])) : ?>
          <div class="navbar-nav">
            <a class="nav-link" style="color: white;" href="#home">Home</a>
            <a class="nav-link" href="<?php (mysqli_num_rows($result) > 0) ? print "./pages/ListCar-Ema.php" : print "./pages/Add-Ema.php" ?>">MyCar</a>
          </div>
          <div class="d-flex">
            <a href="pages/Add-Ema.php" class="btn btn-light text-<?= isset($_COOKIE["warna_navbar"])  ? $_COOKIE["warna_navbar"] : "success"; ?>" role="button">Add Car</a>
            <div class="dropdown ms-4">
              <button class="btn btn-light dropdown-toggle text-<?= isset($_COOKIE["warna_navbar"])  ? $_COOKIE["warna_navbar"] : "success"; ?>" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                <?= $data_login["nama"]; ?>
              </button>
              <ul class="dropdown-menu">
                <li><a class="dropdown-item text-<?= isset($_COOKIE["warna_navbar"])  ? $_COOKIE["warna_navbar"] : "success"; ?>" href="pages/Profile-Ema.php">Profile</a></li>
                <li><a class="dropdown-item text-<?= isset($_COOKIE["warna_navbar"])  ? $_COOKIE["warna_navbar"] : "success"; ?>" href="./config/logout.php">Log Out</a></li>
              </ul>
            </div>
          </div>
        <?php else : ?>
          <div class="navbar-nav w-100 d-flex justify-content-between">
            <a class="nav-link active" aria-current="page" href="#">Home</a>
            <a class="nav-link" href="pages/Login-Ema.php">Login</a>
          </div>
        <?php endif; ?>
      </div>
    </nav>
    <!-- Nav End -->

    <!-- Jumbotron -->
    <section id="home">
      <div class="container">
        <div class="d-flex gap-5 bungkus justify-content-center align-items-center">
          <div>
            <h1>Selamat Datang Di<br /> Show Room Ema</h1>
            <p class="mt-3">Lorem ipsum dolor sit amet consectetur adipisicing elit.<br /> Quo laboriosam labore, facere libero officia iure hic error cum?</p>
            <a href="<?php if (mysqli_num_rows($result) > 0) {
                        echo "./pages/ListCar-Ema.php";
                      } else {
                        echo "./pages/Add-Ema.php";
                      } ?>" class="button btn-primary">MyCar</a>
            <div class="d-flex align-items-center gap-5 mt-5">
              <img src="<?php echo "asset/images/logo-ead.png" ?>" alt="logoead" style="width:100px;">
              <p style="margin-top: 20px; font-size:14px;">Ema_1202200150</p>
            </div>
          </div>
          <img src="<?php echo "asset/images/jumbotron.png" ?>" alt="jumbotron">
        </div>
      </div>
    </section>
    <!-- Jumbotron End -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
  </body>

  </html>