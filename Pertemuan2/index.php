<?php 
// Function -> program di dalam program

// 1. Built-in Function => Fungsi yang sudah tersedia di PHP
// 2. User-Defined Function => Fungsi yang dubuat oleh programmer

// date, time, mktime, strtotime

// date -> tanggal hari ini
// date_ defalut_timezone_set("Asia/Jakarta);
//echo date("l, j F Y H:i:s")

/*
i -> nama hari yang lengkap
d -> hari format 01 sampai 31
j -> hari format 1 sampai 31
M -> bulan format 3 karakter (Jan, Feb, Mar, Apr, Mei, Jun, Jul, Ags, Spt, Oct, Nov, Dec)
F -> nama bulan lengkap
Y -> tahun

H -> jam
i -> menit
s -> detik
*/

// time = jumlah detik sejak 1 januari 1970
// echo time();

// mktime
// date_default_timezone_set("Asia/Jakarta"); // jumlah detik dari 1 januari 1970 - sampai tgl ug di tentukan
// echo mktime(0,0,0,7,12,2003);

// strtotime -> mengubah string jadi tanggal
echo strtotime("24 April 2024 "), "<br>";

// date_parse -> memecah tanggal
print_r(date_parse("24 April 2024"));
?>