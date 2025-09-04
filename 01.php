<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        body{
           text-transform:capitalize;
           letter-spacing:2px;
           font-size:10px;
        }
       
    </style>
</head>
<body>
    


<?php

$data=[
   "nama :" => "aurel",
   "id member :" => 123456789,
   "tanggal pinjam :" => "01-01-2019",
   "tanggal kembali : "=> "26-01-2019",
   "lama pinjaman : "=> " 26 hari",
   "telat : " => "25 hari",
   "denda : "=> "12500000. wow, berapa tuh 0 nya? 😗, besok-besok nginjem lagi ya, aku seneng liat 0 banayak di data mu aurel😊"
];

foreach ($data as $key => $value) {
    echo "<div><br> $key $value<div>";
}
  ?>
  <hr>

<?php
echo "<h3> <br>soal nomor 2 </h3>";

echo "dosen : ";
$dosen = "96jam";

if ($dosen == "96jam") 
//jam kerja per minggu bre
{
    echo "<br> gaji, dosen : 4500000";
}elseif ($dosen == "120jam") {
    echo "<br> gaji, dosen : 5500000";
}elseif($dosen == "168jam") {
    echo "<br> gaji, dosen : 6000000";
}elseif($dosen == "192jam") {
    echo "<br> gaji, dosen : 6500000";
}elseif($dosen == "240jam") {
    echo "<br> gaji, dosen :  7500000";
}elseif($dosen == "288jam") {
    echo "<br> gaji, dosen : 10000000";
}else {
    echo "<br> <br>mangkannya kerja supaya dapet duit 😒";
};

echo "<br><br> staf : ";

$staf= "";


if ($staf == "15") {
   //itungan masuk per bulan
    echo "<br> gaji, staf : 4500000";
}elseif ($staf == "17") {
    echo "<br> gaji,staf : 5500000";
}elseif($staf == "18") {
    echo "<br> gaji, staf : 6000000";
}elseif($staf == "20") {
    echo "<br> gaji, staf : 6500000";
}elseif($staf == "22") {
    echo "<br> gaji, staf :  7500000";
}elseif($staf == "26") {
    echo "<br> gaji, staf : 10000000"; //gile dua digit🤑
}else {
    echo "<br> <br>mangkannya kerja supaya dapet duit 😒";
};
?>

<hr>
<?php

echo "<br><br><h3>soal nomor 3, luas dan keliling salah satu bangun datar yaitu segitiga</h3>";

$tinggi =20;



$luas =22/7*$tinggi*$tinggi;

echo "<br>luas $luas";

$keliling = 22/7*$tinggi;

echo "<br>keliling $keliling";

?>
</body>
</html>