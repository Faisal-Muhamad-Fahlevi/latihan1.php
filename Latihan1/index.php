<?php 
function menghitungHari($jumlahHari){
    $namaHari = date('l', strtotime(date("Y-m-d") . "+" . $jumlahHari . "days"));
    switch($namaHari){
        case "Monday":
            $translateHari = "senin";
            break;
        case "Tuesday":
            $translateHari = "selasa";
            break;
        case "Wednesday":
            $translateHari = "rabu";
            break;
        case "Thursday":
            $translateHari = "kamis";
            break;
        case "Friday":
            $translateHari = "jum'at";
            break;
        case "saturday":
            $translateHari = "sabtu";
            break;
        case "Sunday":
            $translateHari = "minggu";
            break;

        default:
            $translateHari = "Nama hari tidak valid";
            break;
    }
    return $translateHari;

}

$jumlahHari = 120;

echo "$jumlahHari hari setelah hari ini adalah hari " . menghitungHari($jumlahHari);


?>