<?php

include("./validation.php");
include_once("connection.php");

$result = mysqli_query($con, "SELECT * FROM masterbarang ORDER BY id DESC");
$result2 = mysqli_query($con, "SELECT * FROM kategoribarang ORDER BY id ASC");
?>
<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>Home</title>
<link rel="stylesheet" type="text/css" href="styleadd.css">
</head>
<body>
<div class="form">
<h2>Welcome aboard <?php echo $_SESSION['username']; ?>!</h2>
<p>Hope you like it here.</p>

</div>
<a href="add.php">Add Barang Baru</a><br/><br/>



    <table width='80%' border=1>

    <tr>
        <th>Kode Barang</th> 
        <th>Nama Barang</th> 
        <th>Kategori</th> 
        <th>Satuan</th>
        <th>Jumlah</th>
        <th>Harga</th>
    </tr>


    <?php  
    while($user_data = mysqli_fetch_array($result)) {         
        echo "<tr>";
        echo "<td>".$user_data['KodeBarang']."</td>";
        echo "<td>".$user_data['NamaBarang']."</td>";
        echo "<td>".$user_data['Kategori']."</td>"; 
        echo "<td>".$user_data['Satuan']."</td>";   
        echo "<td>".$user_data['Jumlah']."</td>";
        echo "<td>".$user_data['Harga']."</td>";
        echo "<td><a href='edit.php?id=$user_data[id]'>Edit</a> |
         <a href='delete.php?id=$user_data[id]'>Delete</a></td>
         </tr>";        
    }
    ?>


<a href="addKategori.php">Add Kategori Baru</a><br/><br/>

    </table>

    <br/>
    <br/>

    <table width='80%' border=1>

    <tr>
        <th>Kode Kategori</th> 
        <th>Nama Kategori</th> 
    </tr>


    <?php  
    while($kategori_data = mysqli_fetch_array($result2)) {         
        echo "<tr>";
        echo "<td>".$kategori_data['KodeKategori']."</td>";
        echo "<td>".$kategori_data['NamaKategori']."</td>";
        echo "<td><a href='editKategori.php?id=$kategori_data[id]'>Edit</a> |
        <a href='deleteKategori.php?id=$kategori_data[id]'>Delete</a></td>
         </tr>";  
    }
    ?>


    </table>
    <p>Click <a href="logout.php">here</a> to logout.</p>
</body>
</html>