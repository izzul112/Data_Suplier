<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "xrpl5";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

$sql = "UPDATE supplier SET
nama_barang = '".$_POST["txt_nama"]."',
jumlah_barang = '".$_POST["txt_jumlah"]."'
WHERE id_barang = '".$_POST["txt_id"]."'";

if ($conn->query($sql) === TRUE) {
    echo "Record updated successfully";
} else {
    echo "Error updating record: " . $conn->error;
}

$conn->close();
?>
<a href="supplier.php">kembali</a>