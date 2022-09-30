<?php
function koneksi()
{
    $conn = mysqli_connect("localhost", "root", "") or die("Failed Connect to Database!");
    mysqli_select_db($conn, "prakweb_2022_b_203040097") or die("Wrong Database!");
	$result = mysqli_query($conn, "SELECT * FROM buku");

    return $conn;
}

function query ($sql)
{
    $conn = koneksi();
    $result = mysqli_query($conn, $sql) or die( mysqli_error($conn));
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
                    ('', '$nama_buku', '$tahun_terbit', '$gambar','$harga' '$keterangan')";

    mysqli_query($conn, $query);

    return mysqli_affected_rows($conn);
}

function hapus($id_buku)
{
    $conn = koneksi();
    mysqli_query($conn, "DELETE FROM buku WHERE id_buku = $id_buku");

    return mysqli_affected_rows($conn);
}

function ubah($data)
{
    $conn = koneksi();
    $id_buku = $data['id_buku'];
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
            keterangan = '$keterangan'
            WHERE id_buku = $id_buku
            ";

    mysqli_query($conn, $query);

    return mysqli_affected_rows($conn);
}

function cari($keyword) {
    $query = "SELECT * FROM 'buku'
            WHERE
            nama_buku LIKE '%$keyword%' OR
            tahun_terbit LIKE '%$keyword%' OR
            harga LIKE '%$keyword%'
    ";
    return query($query);
}

function registrasi($data)
{
    $conn = koneksi();
    $username = strtolower(stripcslashes($data["username"]));
    $password = mysqli_real_escape_string($conn, $data["password"]);


    $result = mysqli_query($conn, "SELECT username FROM user WHERE username = '$username'");
    if (mysqli_fetch_assoc($result)) {
        echo "<script>
                alert('Username Already Exist!');
            </script>";
        return false;
    }


    $password = password_hash($password, PASSWORD_DEFAULT);


    $query_tambah = "INSERT INTO user VALUES('NULL', '$username', '$password')";
    mysqli_query($conn, $query_tambah);

    return mysqli_affected_rows($conn);
}
