<!DOCTYPE html>
<head>
</head>
<body>
    <a href="supplier.php" >kembalinya ke kastemer</a>;
        <br>
        <form action="supplier_update.php" 
        method="POST">

            id<input type="text" 
            name="txt_id" 
            value="<?php echo $_GET["id"];
            ?>" readonly><br/>

            nama<input type="text" 
            name="txt_nama"><br/>

            jumlah<input type="text" 
            name="txt_jumlah"><br/>

            <input type="submit" value="poskan">
        </form>
 
    <!-- -->
</body>
</html>