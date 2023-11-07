<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tabel Harga Barang</title>
</head>
<body>
<?php
// Membuat associative array dengan data flora dan fauna terancam punah
$TableHargaBarang = array(
    array(
        "ID" => 1,
        "Product" => "BAJU BAYI",
        "Stok" => 2,
        "Harga" => 35500,
        // "Jumlah" => Stok * Harga,
    ),
    array(
        "ID" => 2,
        "Product" => "DIAPERS",
        "Stok" => 3,
        "Harga" => 51.000,
        // "Jumlah" => Stok * Harga,
    ),
    array(
        "ID" => 3,
        "Product" => "BEDAK",
        "Stok" => 1,
        "Harga" => 15000,
        // "Jumlah" => Stok * Harga,
    ),
    array(
        "ID" => 4,
        "Product" => "MINYAK TELON",
        "Stok" => 2,
        "Harga" => 30000,
        // "Jumlah" => Stok * Harga,
    ),
    array(
        "ID" => 5,
        "Product" => "Rinso",
        "Stok" => 15,
        "Harga" => 20000,
        // "Jumlah" => Stok * Harga,
    
    ),
);

// Mencetak tabel
?>

<h1 style="text-align: center;">Table Harga Barang</h1>
<table border="1" cellpadding="3" cellspacing="0" style=" margin: 0 auto;">
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
        echo "<td>".$Barang["ID"]."</td>";
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