  <!DOCTYPE html>
  <html lang="en">

  <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Booking</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
  </head>

  <body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
      <div class="container d-flex justify-content-center">
        <ul class="navbar-nav">
          <li class=" nav-item">
            <a class="nav-link" href="ema_home.php">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="ema_booking.php">Booking</a>
          </li>
        </ul>
      </div>
    </nav>

    <div class="container">
      <br>
      <h1 align="center">Rent your car now!</h1>
      <div class="row">
        <div class="col">
          <br><br><br><br><br>
          <p align="center" class="mt-5"><img src="<?php
                                                    if (isset($_POST['img'])) {
                                                      $img = $_POST['img'];
                                                      echo $img;
                                                    } else {
                                                      echo "rush.png";
                                                    }
                                                    ?>" width="85%" alt=""></p>
        </div>

        <div class="col mb-3">
          <br>
          <form action="" method="">
            <div class="mb-3">
              <label for="Nama">Name</label>
              <input type="text" class="form-control bg-light" id="Name" readonly="readonly" value="Ema_1202200150" name="Name" required>
            </div>

            <div class="mb-3">
              <label for="Date">Date</label>
              <input type="date" class="form-control" id="Date" name="Date" required>
            </div>

            <div class="mb-3">
              <label for="Start">Start Time</label>
              <input type="time" class="form-control" id="Start" name="Start" required>
            </div>

            <div class="mb-3">
              <label for="Duration">Duration</label>
              <input type="number" class="form-control" id="Duration" name="Duration" required>
            </div>

            <div class="mb-3">
              <label for="Type">Car Type</label>
              <select class="form-control" name="Type" id="Type" required>
                <option value="<?php
                                if (isset($_POST['img'])) {
                                  $img = $_POST['img'];
                                  if ($img == "rush.png") {
                                    echo "Toyota Rush";
                                  } else if ($img == "ayla.png") {
                                    echo "Toyota Ayla";
                                  } else if ($img == "brio.jpeg") {
                                    echo "Honda Brio";
                                  }
                                } else {
                                  echo "";
                                }
                                ?>"><?php
                                    if (isset($_POST['img'])) {
                                      $img = $_POST['img'];
                                      if ($img == "rush.png") {
                                        echo "Toyota Rush";
                                      } else if ($img == "ayla.png") {
                                        echo "Toyota Ayla";
                                      } else if ($img == "brio.jpeg") {
                                        echo "Honda Brio";
                                      }
                                    } else {
                                      echo "Chosee...";
                                    }
                                    ?>
                </option>
                <option value="Toyota Rush">Toyota Rush</option>
                <option value="Toyota Ayla">Toyota Ayla</option>
                <option value="Honda Brio">Honda Brio</option>
              </select>
            </div>

            <div class="mb-3">
              <label for="Phone">Phone Number</label>
              <input type="number" class="form-control" id="Phone" name="Phone" required>
            </div>

            <div class="mb-3">
              <li class="m-1">
                <label for="service">Add Service(s)</label><br>
                <input class="form-check-input m-1" type="checkbox" name="checkbox[]" value="Health protocol" id="health"><label class="form-check-label" for="health">Health protocol / Rp25.000</label><br>
                <input class="form-check-input m-1" type="checkbox" name="checkbox[]" value="Driver" id="driver"><label class="form-check-label" for="driver">Driver / Rp100.000</label><br>
                <input class="form-check-input m-1" type="checkbox" name="checkbox[]" value="Fuel Filled" id="fuel"><label class="form-check-label" for="fuel">Fuel Filled / Rp.250.000</label><br>
              </li>
            </div>

            <div class="mb-3 d-grid gap-2">
              <button class="btn btn-primary btn-block" type="submit">Book</button>
            </div>
          </form>
        </div>

      </div>

    </div>
    <footer align="center" class="bg-light p-2">
      <p>Ema_1202200150</p>
    </footer>
  </body>

  </html>