<?php
require_once __DIR__ . "/../config/Database.php";

class Barang 
{
    private $conn;

    public function __construct()
    {
        $database = Database::getInstance();
        $this->conn = $database->getConnection();
    }

    public function getAll()
    {
        $sql = "SELECT 
                    b.id_barang,
                    b.nama_barang,
                    k.nama_kategori,
                    s.nama_supplier,
                    b.stok,
                    b.harga
                FROM barang b
                JOIN kategori k 
                    ON b.id_kategori = k.id_kategori
                JOIN supplier s 
                    ON b.id_supplier = s.id_supplier
                ORDER BY b.id_barang ASC";
                $stmt =$this->conn->prepare($sql);
                $stmt->execute();

                return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    public function getById($id)
    {
        $sql ="SELECT*
        FROM barang
        WHERE id_barang = :id";

        $stmt =$this->conn->prepare($sql);
        $stmt->bindParam(":id", $id, PDO::PARAM_INT);
        $stmt->execute();

        return $stmt->fetch(PDO::FETCH_ASSOC);
    }

    public function update ($id,$nama_barang, $id_kategori, $id_supplier, $stok, $harga) 
    {
    $sql = "UPDATE barang 
    SET nama_barang = :nama_barang,
    id_kategori = :id_kategori,
    id_supplier = :id_supplier,
    stok = :stok,
    harga= :harga
    WHERE id_barang = :id";

$stmt =$this->conn->prepare($sql);

$stmt->bindParam(":nama_barang", $nama_barang);
$stmt->bindParam(":id_kategori", $id_kategori, PDO::PARAM_INT);
$stmt->bindParam(":stok", $stok, PDO::PARAM_INT );
$stmt->bindParam(":id_supplier", $id_supplier, PDO::PARAM_INT);
$stmt->bindParam(":harga", $harga);
$stmt->bindParam(":id", $id, PDO::PARAM_INT);

return $stmt->execute();
}
public function create($nama_barang, $id_kategori, $id_supplier, $stok, $harga)
{
    $sql = "INSERT INTO barang
            (nama_barang, id_kategori, id_supplier, stok, harga)
            VALUES
            (:nama_barang, :id_kategori, :id_supplier, :stok, :harga)";

    $stmt = $this->conn->prepare($sql);

    $stmt->bindParam(":nama_barang", $nama_barang);
    $stmt->bindParam(":id_kategori", $id_kategori, PDO::PARAM_INT);
    $stmt->bindParam(":id_supplier", $id_supplier, PDO::PARAM_INT);
    $stmt->bindParam(":stok", $stok, PDO::PARAM_INT);
    $stmt->bindParam(":harga", $harga);

    return $stmt->execute();
}

public function getKategori ()
{
    $sql ="SELECT*FROM kategori ORDER BY nama_kategori ASC";
    $stmt =$this->conn->prepare($sql);
    $stmt->execute();
    return $stmt->fetchAll(PDO::FETCH_ASSOC);
}
public function getSupplier()
{
    $sql = "SELECT * FROM supplier ORDER BY nama_supplier ASC";

    $stmt = $this->conn->prepare($sql);
    $stmt->execute();

    return $stmt->fetchAll(PDO::FETCH_ASSOC);
}

public function delete ($id)
{
    $sql="DELETE FROM barang
    WHERE id_barang =:id";
    $stmt =$this->conn->prepare($sql);
    $stmt ->bindParam(":id", $id, PDO::PARAM_INT);
    return$stmt->execute();
}
}