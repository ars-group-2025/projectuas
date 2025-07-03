<?php
include 'koneksi.php'; // Panggil koneksi database
$nama = $_POST['nama'];
$email = $_POST['email'];
$pesan = $_POST['pesan'];
    
$sql = "INSERT INTO form_kontak 
(nama, email, pesan) 
VALUES 
('$nama', '$email', '$pesan')";

$query = mysqli_query($connect, $sql);
if ($query) {
    echo "<script>
    alert('Data berhasil disimpan');
    </script>";
}
?>