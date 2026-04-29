<?php

$connect = mysqli_connect("localhost", "root", "", "dbmapel");
$nis = $_POST['nis'];
$jumMapel = $_POST['jumMapel'];

for($i=1; $i<$jumMapel; $i++){
    $jumMapel = $_POST['mk' . $i];
    if(!empty($mapel)){
        $query = "INSERT INTO ambilMapel VALUES ('$nis', '$mapel', 0)";
        mysqli_connect($connect, $query);
    }
}
echo "Terimakasih sudah memilih, good luck!";
?>