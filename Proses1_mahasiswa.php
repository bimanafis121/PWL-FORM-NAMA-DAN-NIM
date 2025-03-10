<?php
// Include atau definisikan class Mahasiswa di sini
include 'Mahasiswa.php';

// Ambil data dari form
$nim = $_POST['nim'];
$nama = $_POST['nama'];

// Buat objek Mahasiswa
$mahasiswa = new Mahasiswa();

// Panggil method setData untuk mengisi data mahasiswa
$mahasiswa->setData($nim, $nama);

// Ambil data yang sudah diatur melalui method getData
$data = $mahasiswa->getData();

// Tampilkan data mahasiswa
echo "<h1>Data Mahasiswa</h1>";
echo "<p>NIM: " . htmlspecialchars($data['nim']) . "</p>";
echo "<p>Nama: " . htmlspecialchars($data['nama']) . "</p>";
?>