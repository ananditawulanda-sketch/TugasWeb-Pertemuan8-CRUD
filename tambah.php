<?php
require_once "model/Barang.php";
$barangModel = new Barang();

if($_SERVER['REQUEST_METHOD'] === 'POST'){
    $nama_barang =$_POST['nama_barang'];
    $id_kategori =$_POST['id_kategori'];
    $id_supplier =$_POST['id_supplier'];
    $stok =$_POST['stok'];
    $harga =$_POST['harga'];

    $berhasil =$barangModel->create (
        $nama_barang,
        $id_kategori,
        $id_supplier,
       $stok,
       $harga
    );
    if($berhasil) {
        header("location:index.php");
        exit;
    } else {
        echo "Gagal menambahkan data.";
        exit;
    }
}

$kategori = $barangModel->getKategori();

$supplier =$barangModel->getSupplier();
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Barang</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

<div class="container">
    <h1>Tambah Barang</h1>
    <form method="POST">
        <label>Nama Barang</label>

        <input type="text"
        name="nama_barang"
        required>
        <br><br>

        <label>kategori</label>
        <select name="id_kategori" required>
            <option value="">----pilih kategori----</option>
            <?php foreach ($kategori as $k):?>
                <option value="<?= $k['id_kategori']; ?>">
                    <?= htmlspecialchars($k['nama_kategori']);?>
                </option>
                <?php endforeach; ?>
        </select>
        <br><br>
        <label>supplier</label>
        <select name="id_supplier" required>
            <option value="">----pilih Supplier----</option>
            <?php foreach ($supplier as $s):?>
                <option value="<?= $s['id_supplier']; ?>">
                    <?= htmlspecialchars($s['nama_supplier']);?>
                </option>
                <?php endforeach; ?>
        </select>
        <br><br>
        <label>Stok</label>
        <input type="number"
        name="stok"
        min="0"
        required>

        <br><br>
        <label>Harga</label></label>
        <input type="number"
        name="harga"
        min="0"
        required>

        <br><br>

        <button type="submit"> Simpan</button>
        <a href="index.php"> Batal</a>

    </form>
</div>
    
</body>
</html>