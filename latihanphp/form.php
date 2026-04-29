<?php

$connect = mysqli_connect("localhost","root","","dbmapel");
echo "
<form method='POST' action='submit.php'>
pilih salah satu wilayah :
<select name='wilayah'>";

$query = "SELECT * FROM wilayah";
$hasil = mysqli_query($connect, $query);

while($data=mysqli_fetch_array($hasil)){
    echo "<option value='$data[id]'>$data[namawilayah]</option>";
}
echo "</select>
<input type='submit' values='submit'>
</form>";
?>