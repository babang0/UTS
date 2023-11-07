<!D<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tabel Harga Barang</title>
</head>
<body>
<?php

$TableHargaBarang = array(
    array(
        "ID" => 1,
        "Product" => "MINYAK TELON",
        "Stok" => 20,
        "Harga" => 30000,
    ),
    array(
        "ID" => 2,
        "Product" => "DIAPERS",
        "Stok" => 15,
        "Harga" => 51000,
    ),
    array(
    "ID" => 3,
    "Product" => "BABY OIL",
    "Stok" => 10,
    "Harga" => 16000
    ),
    array(
        "ID" => 4,
        "Product" => "SAMPO BABY",
        "Stok" => 18,
        "Harga" => 22000,
    ),
    array(
        "ID" => 5,
        "Product" => "BEDAK",
        "Stok" => 15,
        "Harga" => 51000,
    ),
    array(
        "ID" => 6,
        "Product" => "BAJU BAYI",
        "Stok" => 20,
        "Harga" => 35500,
    ),
    array(
        "ID" => 7,
        "Product" => "JUMPER",
        "Stok" => 25,
        "Harga" => 50000,
    ),
);


?>

<h1 style="text-align: center;">Table Harga Barang</h1>
<table style=" margin: 0 auto;">
    <tr>
        <th>ID</th>
        <th>Produk</th>
        <th>Stok</th>
        <th>Harga</th>
        <th>Jumlah</th>
    </tr>

    <?php 
    
    foreach ($TableHargaBarang as $Barang) {
        echo "<tr>";
        echo "<td>" . $Barang["ID"]."</td>";
        echo "<td>" . $Barang["Product"] . "</td>";
        echo "<td>" . $Barang["Stok"] . "</td>";
        echo "<td>" . $Barang["Harga"] . "</td>";
        echo "<td>" . $Barang["Stok"] * $Barang["Harga"] . "</td>";
        echo "</tr>";
       
    };
    
    ?>
</table>
</body>
</html>