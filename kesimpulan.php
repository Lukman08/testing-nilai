<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Testing || Lukman Hakim</title>
</head>
<body>
    
</body>
</html>

<?php
$absen  = $_POST['absen'];
$uts    = $_POST['uts'];
$uas    = $_POST['uas'];

//menghitung nilai dari yang tadi kita input
$nilai_absen = $absen * 0.10;
$nilai_uts   = $uts * 0.45;
$nilai_uas   = $uas * 0.45;

//penjumlahan dari nilai-nilai yang sudah diinput
$nilai_akhir = $nilai_absen + $nilai_uts + $nilai_uas;

//menampilkan grade berdasarkan hasil nilai akhir

if ($nilai_akhir>=80){
    $grade = "A";
    $keterangan = "Lulus";
} elseif ($nilai_akhir>=75){
    $grade = "AB";
    $keterangan = "Lulus";
} elseif ($nilai_akhir>=70){
    $grade = "B";
    $keterangan = "Lulus";
}elseif ($nilai_akhir>=65){
    $grade = "BC";
    $keterangan = "Lulus";
} elseif ($nilai_akhir>=60){
    $grade = "C";
    $keterangan = "Lulus";
} elseif ($nilai_akhir>=55){
    $grade = "CD";
    $keterangan = "Remedial";
}
elseif ($nilai_akhir>=40){
    $grade = "D";
    $keterangan = "Remedial";
}

elseif ($nilai_akhir>=0){
    $grade = "E";
    $keterangan = "Tidak lulus";
} else{
    echo "nilai eror";
}

echo " <h1>Hitung Nilai AKhir Mahasiswa</h1>

Nilai Absen : <b>$nilai_absen</b><br>

Nilai UTS   : <b>$nilai_uts</b><br>

Nilai UAS   : <b>$nilai_uas</b><br>


<h4>Grade : $grade - $nilai_akhir - $keterangan</h4>

";

?>
