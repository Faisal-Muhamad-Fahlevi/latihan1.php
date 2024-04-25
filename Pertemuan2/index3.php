<?php 

// User defined function
/*
function namaFungsi($param1, $param2, $param3,...) {
    // perintah di eksekusi
}
*/

// camelCase
// Penjumlahan => biasanya digunakan ketika class => OOP
function penjumlahan($a, $b)
{
    return $a + $b;
}
function luasSegitiga($alas, $tinggi)
{
    return 0.5 * $alas * $tinggi;
}

echo penjumlahan(4, 3), "<br>";

$alas = 4;
$tinggi = 5;

echo "Luas segitiga dengan panjang alas $alas dan $tinggi adalah" . luasSegitiga($alas, $tinggi), "<br>";

// function iniFungsi($param1 = "", $param2 = "") {

// }

// echo iniFungsi ();

// contoh parameter default
function sapa($waktu = "", $nama = "") 
{
    if ($waktu === "" && $nama = "") {
        return "Selamat Datang, User!";
    } else {
        return "Selamat $waktu, $nama";
    }

}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    
</body>
</html>