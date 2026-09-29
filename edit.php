<?php
require_once "model/barang.php";
$barangModel = new Barang();
if(!isset($_GET['id'])){
    header("Location: index.php");
    exit;
}

$id =$_GET['id'];

if ($_SERVER['REQUEST_METHOD'] === 'POST') {

    $nama_barang = $_POST['nama_barang'];
    $id_kategori = $_POST['id_kategori'];
    $id_supplier = $_POST['id_supplier'];
    $stok = $_POST['stok'];
    $harga = $_POST['harga'];

    $berhasil = $barangModel->update(
        $id,
        $nama_barang,
        $id_kategori,
        $id_supplier,
        $stok,
        $harga
    );

    if ($berhasil) {
        header("Location: index.php");
        exit;
    } else {
        echo "Gagal mengubah data.";
        exit;
    }
}
$barang = $barangModel->getById($id);
if(!$barang){
    echo"Data barang tidak ditemukan.";
    exit;
}

$kategori =$barangModel->getKategori();
$supplier =$barangModel->getSupplier();
?>

<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Edit Barang</title>

    <link rel="stylesheet" href="style.css">
</head>

<body>

<div class="container">

    <h1>Edit Barang</h1>

    <form method="POST">

        <label>Nama Barang</label>

        <input
            type="text"
            name="nama_barang"
            value="<?= htmlspecialchars($barang['nama_barang']); ?>"
            required
        >

        <br><br>


        <label>Kategori</label>

        <select name="id_kategori" required>

            <?php foreach ($kategori as $k): ?>

                <option
                    value="<?= $k['id_kategori']; ?>"
                    <?= $k['id_kategori'] == $barang['id_kategori'] ? 'selected' : ''; ?>
                >
                    <?= htmlspecialchars($k['nama_kategori']); ?>
                </option>

            <?php endforeach; ?>

        </select>

        <br><br>


        <label>Supplier</label>

        <select name="id_supplier" required>

            <?php foreach ($supplier as $s): ?>

                <option
                    value="<?= $s['id_supplier']; ?>"
                    <?= $s['id_supplier'] == $barang['id_supplier'] ? 'selected' : ''; ?>
                >
                    <?= htmlspecialchars($s['nama_supplier']); ?>
                </option>

            <?php endforeach; ?>

        </select>

        <br><br>


        <label>Stok</label>

        <input
            type="number"
            name="stok"
            value="<?= htmlspecialchars($barang['stok']); ?>"
            required
        >

        <br><br>


        <label>Harga</label>

        <input
            type="number"
            name="harga"
            value="<?= htmlspecialchars($barang['harga']); ?>"
            required
        >

        <br><br>


        <button type="submit">
            Simpan Perubahan
        </button>

        <a href="index.php">
            Batal
        </a>

    </form>

</div>

</body>

</html>