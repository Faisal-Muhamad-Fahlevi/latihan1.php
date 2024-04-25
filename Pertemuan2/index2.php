<?php 

// built in function untuk manipulasi string

// explode, implode, strlen, strcmp

// strlen => mengetahui panjang string
echo strlen("Hello World"), "<br>";
echo strlen("Selamat datang di BLK karawang"), "<br>";

// str_word_count => menghitung jumlah kata
echo str_word_count("saya suka makan nasi, dan saya juga suka merokok, dan saya suka naik motor bersama saha weh nu daekeun");

// strcmp => membandingkan 2 buah string/kata
// strcasecmp => membandingkan 2 string berdasarkan ukuran huruf
echo "<br>";
$kata1 = "Katak";
$kata2 = "katak";

if (strcmp($kata1, $kata2) !== 0) {
    echo "$kata1 tidak sama dengan $kata2";
} else {
    echo "$kata1 sama dengan $kata2";
}

// explode => memecah string
echo "<br>";
print_r (explode("-", "AYAM-GOYENG-ENAK-SEKALI"));
echo "<br>";
print_r (explode(",", "TAOPIK, FAISAL, RIAN"));
echo "<br>";

// implode = menggabungkan array menjadi string
$str = array("Selamat", "Datang", "Di", "Pemrograman", "PHP");
echo implode(" ", $str), "<br>";

// strtolower => merubah huruf besar menjadi huruf kecil
echo strtolower("HARAP TENANG! SEDANG BELAJAR"), "<br>";

// strtoupper=> merubah huruf kecil jadi huruf besar
echo strtoupper("ada udang dibalik batu"), "<br>";

// substr => mengambil beberapa karakter di dalam string
$kata3 = "Pelatihan";
echo substr($kata3, 2, 5), "<br>";
echo substr($kata3, -7, 5); // mengambil dari belakang
?>
