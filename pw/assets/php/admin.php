<?php
require 'functions.php';
$buku = query("SELECT * FROM buku ORDER BY id_buku ASC");

if (isset($_GET['cari'])) {
    $buku = cari($_GET['keyword']);
}
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
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.min.js" integrity="sha384-7VPbUDkoPSGFnVtYi0QogXtr74QeVeeIs99Qfg5YCF+TidwNdjvaKZX19NZ/e6oz" crossorigin="anonymous"></script>
<style>
    body {
        background-image: url("../img/bg2.jpg");
        background-size: cover;
    }


</style>
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
            <form class="d-flex role="search method="GET">
            <input class="form-control me-2 ml-2" type="search" placeholder="Search" aria-label="Search">
            <button class="btn btn-outline-success" type="submit">Search</button>
        </div>
        <div class="logout">
            <a href="logout.php" class="text-white btn btn-outline-danger rounded-5">Logout</a>
        </div>
    </div>
</nav>
<!-- END NAVBAR -->
<br>
<br>
<div class="tambah" style="margin-left: 16rem">
    <a href="tambah.php"><button class="btn btn-success">Add Product</button></a>
</div>
<br>

<?php if (empty($buku)) : ?>
    <div class="col-8 m-auto">
        <div class="alert alert-danger" role="alert">
            Product Not Found!
        </div>
        <a href="<?= "logout.php" ?>" class="btn btn-primary">Logout</a>
        <a href="<?= "admin.php" ?>" class="btn btn-success">Back</a>
    </div>
<?php else : ?>

<!-- TABEL -->
<div class="col-8 m-auto md-8 mx-auto">
    <table class="table table-striped table-bordered">
        <thead class="bg-primary">
        <tr>
            <th scope="col" class="text-center text-light">#</th>
            <th scope="col" class="text-center text-light">Product</th>
            <th scope="col" class="text-center text-light">Action</th>
        </tr>
        </thead>
        <tbody class="bg-light">
            <?php $no = 1; ?>
            <?php foreach ($buku as $bk) : ?>
        <tr>
            <th scope="row" class="text-center"><?= $no++ ?></th>
            <td><?= $bk['nama_buku'] ?></td>
            <td class="text-center"><a href="detail.php?"<?= $bk['id_buku'] ?> class="text-black btn btn-outline-primary rounded-5">View More</a></td>
        </tr>
            <?php endforeach ?>
        </tbody>
    </table>
</div>
 END TABEL
    <?php endif; ?>
</body>
</html>
