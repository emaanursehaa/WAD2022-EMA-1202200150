<?php
require './connector.php';

$id = $_GET['id'];

$deletequery = "DELETE FROM showroom_ema_table WHERE id_mobil = $id";

if (mysqli_query($conn, $deletequery)) {
  header("location: ../pages/ListCar-Ema.php?pesan=delete");
} else {
  header("location: ../pages/ListCar-Ema.php?pesan=failed");
}
