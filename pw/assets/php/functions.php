<?php

function koneksi()
{
    $conn = mysqli_connect("localhost", "root", "") or die("Failed Connect to Database!");
    mysqli_select_db($conn, "prakweb_2022_b_203040097") or die("Wrong Database!");
    $result = mysqli_query($conn, "SELECT * FROM buku");

    return $conn;
}

function query($sql)
{
    $conn = koneksi();
    $result = mysqli_query($conn, "$sql") or die(mysqli_error($conn));
    $rows = [];
    while ($row = mysqli_fetch_assoc($result)) {
        $rows[] = $row;
    }
    return $rows;
}

function tambah($data)
{
    $conn = koneksi();

    $nama_buku = htmlspecialchars($data['nama_buku']);
    $tahun_terbit = htmlspecialchars($data['tahun_terbit']);
    $gambar = htmlspecialchars($data['gambar']);
    $harga = htmlspecialchars($data['harga']);
    $keterangan = htmlspecialchars($data['keterangan']);

    $query = "INSERT INTO buku
                    VALUES
                    ('', '$nama_buku', '$tahun_terbit', '$gambar', '$harga', '$keterangan')";

    mysqli_query($conn, $query);

    return mysqli_affected_rows($conn);
}

function hapus($id)
{
    $conn = koneksi();
    mysqli_query($conn, "DELETE FROM buku WHERE id_buku = $id");

    return mysqli_affected_rows($conn);
}

function ubah($data)
{
    $conn = koneksi();
    $id = $data['id'];
    $nama_buku = htmlspecialchars($data['nama_buku']);
    $tahun_terbit = htmlspecialchars($data['tahun_terbit']);
    $gambar = htmlspecialchars($data['gambar']);
    $harga = htmlspecialchars($data['harga']);
    $keterangan = htmlspecialchars($data['keterangan']);

    $query = "UPDATE buku
            SET
            nama_buku = '$nama_buku',
            tahun_terbit = '$tahun_terbit',
            gambar = '$gambar',
            harga = '$harga',
            keterangan = '$keterangan',
            WHERE id_buku = $id
            ";

    mysqli_query($conn, $query);

    return mysqli_affected_rows($conn);
}

function cari($keyword)
{
    $query = "SELECT * FROM 'buku'
            WHERE
            nama_buku LIKE '%$keyword%' OR
            tahun_terbit LIKE '%$keyword%' OR
            keterangan LIKE '%$keyword%' OR
            harga LIKE '%$keyword%'
    ";
    return query($query);
}

function registrasi($data)
{
    $conn = koneksi();

    $username = htmlspecialchars(strtolower($data['username']));
    $password = mysqli_real_escape_string($conn, $data['password']);

    if (empty($username) || empty($password)) {
        echo "<script>
                alert('Username or Password Cannot be empty!');
                document.location.href = 'signup.php';
            </script>";
        return false;
    }

    // jika username sudah ada
    if (query("SELECT * FROM user WHERE username = '$username'")) {
        echo "<script>
                alert('Username Already Use!');
                document.location.href = 'signup.php';
            </script>";
        return false;
    }


    // jika password < 5 digit
    if (strlen($password) < 5) {
        echo "<script>
                alert('Password Too Short');
                document.location.href = 'signup.php';
            </script>";
        return false;
    }

    // jika username & password sudah sesuai
    // enkripsi password
    $password_baru = password_hash($password, PASSWORD_DEFAULT);
    // insert ke tabel user
    $query = "INSERT INTO user
                VALUES
                (null, '$username', '$password_baru')
                ";
    mysqli_query($conn, $query) or die(mysqli_error($conn));
    return mysqli_affected_rows($conn);
}

