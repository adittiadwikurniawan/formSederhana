<?php
// Wajib memanggil file User.php agar class User bisa digunakan
require_once 'Class/User.php';

// Siapkan variabel kosong untuk menampung data hasil input
$dataTampil = null;

// Cek apakah ada request POST (tombol submit diklik)
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Tangkap data dari form
    $input_firstname = $_POST['firstname'];
    $input_lastname = $_POST['lastname'];
    $input_phone = $_POST['phone'];
    $input_address = $_POST['address'];

    // Pastikan inputan tidak kosong
    if (!empty($input_firstname) && !empty($input_lastname) && !empty($input_phone) && !empty($input_address)) {
        // Buat object baru dari class User
        $userBaru = new User($input_firstname, $input_lastname, $input_phone, $input_address);
        
        // Ambil datanya dan simpan ke variabel $dataTampil
        $dataTampil = $userBaru->getData();
    }
}
?>
