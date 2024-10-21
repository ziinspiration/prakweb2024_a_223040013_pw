<?php
require_once 'app/init.php';

// $product1 = new Komik("Naruto", "Masashi Kishimoto", "Shonen Jump", 30000, 100);
// $product2 = new Game("Uncharted", "Neil Druckmann", "Sony Computer", 250000, 50);

// $cetakProduk = new CetakInfoProduct();
// $cetakProduk->tambahProduk($product1);
// $cetakProduk->tambahProduk($product2);
// echo $cetakProduk->cetak();

// echo "<hr>";

// Tidak Menggunakan Alias agar namespace tidak panjang
// new App\Produk\User();
// echo '<br>';
// new App\Service\User();

// Menggunakan Alias agar namespace tidak panjang
use App\Produk\User as ServiceUser;
use App\Service\User as ProdukUser;

new ServiceUser();
echo '<br>';
new ProdukUser();
