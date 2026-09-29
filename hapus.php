<?php
require_once "model/barang.php";
$barangModel = new Barang();
if (!isset($_GET['id'])){
    header("Location:index.php");
    exit;
}

$id = $_GET['id'];
$berhasil =$barangModel->delete($id);
if($berhasil){
    header("Location: index.php");
    exit;
} else{
    echo "Gagal menghapus data.";
}