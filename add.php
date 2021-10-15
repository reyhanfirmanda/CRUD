<html>
<head>
    <title>Add Users</title>
    <link rel="stylesheet" type="text/css" href="styleadd.css">
</head>

<body>
    <a href="index.php">Go to Home</a>
    <br/><br/>
    <form action="add.php" method="post" name="form1">
        <table width="25%" border="0">
            <tr> 
                <td>Kode Barang</td>
                <td><input type="text" name="KodeBarang"></td>
            </tr>
            <tr> 
                <td>Nama Barang</td>
                <td><input type="text" name="NamaBarang"></td>
            </tr>
            <tr> 
                <td>Kategori</td>
                <td><input type="text" name="Kategori"></td>
            </tr>
            <tr> 
                <td>Satuan</td>
                <td><input type="text" name="Satuan"></td>
            </tr>
            <tr> 
                <td>Jumlah</td>
                <td><input type="text" name="Jumlah"></td>
            </tr>
            <tr> 
                <td>Harga</td>
                <td><input type="text" name="Harga"></td>
            </tr>
            <tr> 
                <td></td>
                <td><input type="submit" name="Submit" value="Add"></td>
            </tr>
        </table>
    </form>

    <?php
    if(isset($_POST['Submit'])) {
        $KodeBarang = $_POST['KodeBarang'];
        $NamaBarang = $_POST['NamaBarang'];
        $Kategori = $_POST['Kategori'];
        $Jumlah = $_POST['Jumlah'];
        $Harga = $_POST['Harga'];
        $Satuan = $_POST['Satuan'];



        include_once("connection.php");


        $result = mysqli_query($con, "INSERT INTO masterbarang(KodeBarang,NamaBarang,Kategori,Jumlah,Harga,Satuan) VALUES('$KodeBarang','$NamaBarang','$Kategori','$Jumlah','$Harga','$Satuan')");

        echo "Barang added successfully. <a href='index.php'>View Barang</a>";
    }
    ?>
</body>
</html>