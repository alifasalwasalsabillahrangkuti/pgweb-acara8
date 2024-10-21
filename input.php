<?php
$kecamatan = isset($_POST['Kecamatan']) ? $_POST['Kecamatan'] : '';
$longitude = isset($_POST['Longitude']) ? $_POST['Longitude'] : '';
$latitude = isset($_POST['Latitude']) ? $_POST['Latitude'] : '';
$luas = isset($_POST['Luas']) ? $_POST['Luas'] : '';
$jml_pddk = isset($_POST['jml_pddk']) ? $_POST['jml_pddk'] : '';

// Sesuaikan dengan setting MySQL 
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "pgweb8";

// Buat koneksi 
$conn = new mysqli($servername, $username, $password, $dbname);

// Cek koneksi 
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Query INSERT
$sql = "INSERT INTO tabel_penduduk (Kecamatan, Longitude, Latitude, Luas, jml_pddk) 
VALUES ('$kecamatan', '$longitude', '$latitude', '$luas', '$jml_pddk')";

if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>