<?php
include_once("connection.php");

if(isset($_POST['update']))
{   
    $id2 = $_POST['id'];

    $KodeKategori=$_POST['KodeKategori'];
    $NamaKategori=$_POST['NamaKategori'];
    

    $result2 = mysqli_query($con, "UPDATE kategoribarang 
        SET 
        KodeKategori='$KodeKategori', 
        NamaKategori='$NamaKategori' 
        WHERE id=$id2");
   
    header("Location: index.php");
}
?>
<?php

$id2 = $_GET['id'];

$result2 = mysqli_query($con, "SELECT * FROM kategoribarang WHERE id=$id2");

while($kategori_data = mysqli_fetch_array($result2))
{
        $KodeKategori = isset ($_POST['KodeKategori']);
        $NamaKategori = isset ($_POST['NamaKategori']);
}
?>
<html>
<head>
    <title>Edit Kategori Data</title>
    <link rel="stylesheet" type="text/css" href="styleadd.css">
    <link href="https://fonts.googleapis.com/css2?family=Kumbh+Sans&display=swap" rel="stylesheet">
</head>

<body>
    <a href="index.php">Home</a>
    <br/> 
    <br/> 
    <form name="update_kategori" method="post" action="editKategori.php">
        <table border="0">
            <tr> 
                <td>Kode Kategori</td>
                <td><input type="text" name="KodeKategori" value=<?php echo $KodeKategori?>></td>
            </tr>
            <tr> 
                <td>Nama Kategori</td>  
                <td><input type="text" name="NamaKategori" value=<?php echo $NamaKategori;?>></td>
            </tr>

            <tr>
                <td><input type="hidden" name="id" value=<?php echo $_GET['id'];?>></td>
                <td><input type="submit" name="update" value="Update"></td>
            </tr>
        </table>
    </form>
</body>
</html>