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
 echo "<a href='supplier_new_form.php'>tambah supplier</a><br/>";
 
$sql = "SELECT*FROM supplier";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo "id: " 
        . $row["id_barang"]
        . " - Name: " 
        . $row["nama_barang"]
        .  " " 
        . $row["jumlah_barang"]
        . "<a href='supplier_edit.php?id=$row[id_barang]'> edit</a>"
        . "<a href='supplier_delete.php?id=$row[id_barang]'> delete</a> <br>";

    }
} else {
    echo "0 results";
}
$conn->close();
?>