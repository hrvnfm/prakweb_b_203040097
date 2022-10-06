<?php
if (!isset($_GET['id'])) {
    header("location: ../../index.php");
    exit;
}
require 'functions.php';

$id = $_GET['id_buku'];

$result = query("SELECT * FROM buku where id_buku = $id")[0];
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="../css/style.css">
    <title>Toko Buku SUHU</title>
    <link rel="shortcut icon" href="../img/favicon.ico" type="image/x-icon">

    <!-- JS & CSS Bootstrap v5.2 -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8"
            crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"
            integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3"
            crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.min.js"
            integrity="sha384-7VPbUDkoPSGFnVtYi0QogXtr74QeVeeIs99Qfg5YCF+TidwNdjvaKZX19NZ/e6oz"
            crossorigin="anonymous"></script>

</head>

<body>
<!-- NAVBAR -->
<nav class="navbar bg-dark">
    <div class="container-fluid">
        <a class="navbar-brand text-white" href="#">
            <img src="../img/favicon.ico" alt="Logo" width="30" height="30" class="d-inline-block align-text-top">
            SF Book Store
        </a>
        <div class="cari">
            <form class="d-flex role=" search method="GET"
            ">
            <input class="form-control me-2 ml-2" type="search" placeholder="Search" aria-label="Search">
            <button class="btn btn-outline-success" type="submit">Search</button>
        </div>
        <div class="login">
            <a href="login.php" class="text-white btn btn-outline-primary rounded-5">Login</a>
        </div>
    </div>
</nav>
<!-- END NAVBAR -->
<br>
<br>
<br>

<div class="card ml-3 mt-3 m-auto" style="width: 40rem;">
    <img src="../assets/img/<?= $result["gambar"]; ?>" class="card-img-top" alt="...">
    <div class="card-body">
        <h5 class="card-title"><?= $result["nama_buku"]; ?></h5>
        <p class="card-text"><?= $result["keterangan"]; ?></p>
    </div>
    <ul class="list-group list-group-flush">
        <li class="list-group-item"><?= $result["harga"]; ?></li>
    </ul>
    <div class="card-body">
        <a href="../../index.php" class="card-link btn btn-success rounded-5">Back</a>
    </div>
</div>

</body>
</html>
