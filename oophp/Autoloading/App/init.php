<?php
// require_once 'Produk/InfoProduct.php';
// require_once 'Produk/Product.php';
// require_once 'Produk/Komik.php';
// require_once 'Produk/Game.php';
// require_once 'Produk/CetakInfoProduct.php';

// Tidak pakai __DIR__
// spl_autoload_register(function ($class) {
//     require_once 'Produk/' . $class . '.php';
// });

// Pakai __DIR__
spl_autoload_register(function ($class) {
    require_once __DIR__ . '/Produk/' . $class . '.php';
});
