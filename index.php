<?php
require_once"model/barang.php";

$barangModel = new Barang();
$dataBarang =$barangModel->getAll();

?>
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Inventaris</title>

    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="container">
        <h1> Data Inventaris Barang</h1>

        <a href="tambah.php" class="btn-tambah">
            + Tambah Barang

        </a>
        <table>

        <thead>
            <tr>
                <th>NO</th>
                <th>Nama Barang</th>
                <th>kategori</th>
                <th>Supplier</th>
                <th>Stok</th></th>
                <th>Harga</th>
                <th>Aksi</th>
            </tr>
        </thead>

        <tbody>
            <?php if (empty($dataBarang)): ?>

                <tr>
                    <td colspan="7">
                        Belum ada data barang.
                    </td>
                </tr>

                <?php else:?>
                    <?php $no = 1; ?>
                    <?php foreach($dataBarang as $barang): ?>
                        <tr>
                            <td>
                                <?= $no++; ?>
                            </td>

                            <td>
                                <?= htmlspecialchars($barang['nama_barang']); ?>
                            </td>
                            <td>
                                <?= htmlspecialchars($barang['nama_kategori']); ?>
                            </td>
                            <td>
                                <?= htmlspecialchars($barang['nama_supplier']); ?>
                            </td>
                            <td>
                                <?= htmlspecialchars($barang['stok']); ?>
                            </td>
                            <td>
                                Rp <?= number_format($barang['harga'], 0, ',', '.'); ?>
                            </td>
                            <td>
                                <a href="edit.php?id=<?= $barang['id_barang']; ?>"> Edit

                                </a> 
                                |
                                 <a href="hapus.php?id=<?= $barang['id_barang']; ?>" onclick="return confirm ('yakin ingin menghapus barang ini?');"> Hapus
                                </a>

                            </td>
                        </tr>

                        <?php endforeach; ?>
                        <?php endif; ?>
        </tbody>
        </table>
    </div>
    
</body>
</html>