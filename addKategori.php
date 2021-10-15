<html>
<head>
    <title>Add Kategori</title>
    <link rel="stylesheet" type="text/css" href="styleadd.css">
    <link href="https://fonts.googleapis.com/css2?family=Kumbh+Sans&display=swap" rel="stylesheet">
</head>

<body>
    <a href="index.php">Go to Home</a>
    <br/><br/>
    <form action="addKategori.php" method="post" name="form2">
        <table width="25%" border="0">
            <tr> 
                <td>Kode Kategori</td>
                <td><input type="text" name="KodeKategori"></td>
            </tr>
            <tr> 
                <td>Nama Kategori</td>
                <td><input type="text" name="NamaKategori"></td>
            </tr>
            <tr> 
                <td></td>
                <td><input type="submit" name="Submit" value="Add"></td>
            </tr>
        </table>
    </form>

    <?php
    if(isset($_POST['Submit'])) {
        $KodeKategori = $_POST['KodeKategori'];
        $NamaKategori = $_POST['NamaKategori'];



        include_once("connection.php");


    
        $result2 = mysqli_query($con, "INSERT INTO kategoribarang(KodeKategori,NamaKategori) VALUES('$KodeKategori','$NamaKategori')");

        echo "Kategori added successfully. <a href='index.php'>View Barang</a>";
    }
    ?>

</body>
</html>