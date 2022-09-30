<?php 
require 'functions.php';
$id_buku = $_GET['id_buku'];

if (hapus($id_buku) > 0) {
    echo "<script>
            alert('Data Sucessfully Deleted');
            document.location.href = 'admin.php';
          </script>";
} else {
   echo "<script>
            alert('Failed to Delete Data!');
            document.location.href = 'admin.php';
        </script>";
}
?>