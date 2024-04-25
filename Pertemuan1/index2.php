<?php 
// PHP di dalam HTML

// cara membuat variabel di PHP
// keyword : const, let, var
// variabel $
// scope = cangkupan
// variabel global && variabel local
// variabel global = variabel yang bisa di akses di mana saja
// variabel local = variabel yang hanya bisa di akses di bagian tertentu

$angka = 20;

echo $angka;

echo "<br>";

$nama = "Faisal Muhamad Fahlevi";

// untuk membuat variabel
// ga boleh pake spasi
// ga boleh diawali nomor
// kalau mau di spasi, pake tanda underscore (_)

$nama_depan = "Budi";
$nama_belakang = "utomo";

// concatenation -> menggabungkan string
echo $nama_depan . " " . $nama_belakang;
echo "<br>";

// operator aritmatika = +, -, *, /, %
// operator assignment = =, +=, -=, *=,
// operator perbandingan = <, >, <=, >=,
// ==, !=, ===, !==
// operator logika = &&, ||, !

// tipe Data = Integer, Float, String, Boolean,

var_dump(1 === "1");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Belajar PHP Dasar</title>
</head>
<body>
    <h1><?php echo "Selamat datang $nama "?></h1>

</body>
</html>