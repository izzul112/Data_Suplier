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

$sql = "INSERT INTO supplier(id_barang, nama_barang, jumlah_barang)
VALUES ('".$_POST["txt_id"]."', 
'".$_POST["txt_nama"]."',
'".$_POST["txt_jumlah"]."')";

if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
    echo "<a href='supplier.php'>kembalinya ke suplier</a>";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>