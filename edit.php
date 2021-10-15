<?php
include_once("connection.php");

if(isset($_POST['update']))
{   
    $id = $_POST['id'];

    $KodeBarang=$_POST['KodeBarang'];
    $NamaBarang=$_POST['NamaBarang'];
    $Kategori=$_POST['Kategori'];
    $Satuan=$_POST['Satuan'];
    $Jumlah=$_POST['Jumlah'];
    $Harga=$_POST['Harga'];

    $result = mysqli_query($con, "UPDATE masterbarang 
        SET 
        KodeBarang='$KodeBarang', 
        NamaBarang='$NamaBarang',
        Kategori='$Kategori',
        Satuan='$Satuan',
        Jumlah='$Jumlah',
        Harga='$Harga' 
        WHERE id=$id");
   
    header("Location: index.php");
}
?>
<?php

$id = $_GET['id'];

$result = mysqli_query($con, "SELECT * FROM masterbarang WHERE id=$id");

while($user_data = mysqli_fetch_array($result))
{
        $KodeBarang = isset ($_POST['KodeBarang']);
        $NamaBarang = isset ($_POST['NamaBarang']);
        $Kategori = isset ($_POST['Kategori']);
        $Jumlah = isset ($_POST['Jumlah']);
        $Harga = isset ($_POST['Harga']);
        $Satuan = isset ($_POST['Satuan']);

}
?>
<html>
<head>  
    <title>Edit User Data</title>
    <link rel="stylesheet" type="text/css" href="styleadd.css">
    <link href="https://fonts.googleapis.com/css2?family=Kumbh+Sans&display=swap" rel="stylesheet">
</head>

<body>
    <a href="index.php">Home</a>
    <br/> 
    <br/> 
    <form name="update_user" method="post" action="edit.php">
        <table border="0">
            <tr> 
                <td>Kode Barang</td>
                <td><input type="text" name="KodeBarang" value=<?php echo $KodeBarang?>></td>
            </tr>
            <tr> 
                <td>Nama Barang</td>
                <td><input type="text" name="NamaBarang" value=<?php echo $NamaBarang;?>></td>
            </tr>
            <tr> 
                <td>Kategori</td>
                <td><input type="text" name="Kategori" value=<?php echo $Kategori;?>></td>
            </tr>
            <tr> 
                <td>Satuan</td>
                <td><input type="text" name="Satuan" value=<?php echo $Satuan;?>></td>
            </tr>
            <tr> 
                <td>Jumlah</td>
                <td><input type="text" name="Jumlah" value=<?php echo $Jumlah;?>></td>
            </tr>
            <tr> 
                <td>Harga</td>
                <td><input type="text" name="Harga" value=<?php echo $Harga;?>></td>
            </tr>
            <tr>
                <td><input type="hidden" name="id" value=<?php echo $_GET['id'];?>></td>
                <td><input type="submit" name="update" value="Update"></td>
            </tr>
        </table>
    </form>
</body>
</html>