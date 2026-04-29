<?php

$connect = mysqli_connect("localhost","root","","dbmapel");
?>
<h1>Form Pengambilan Mata Pelajaran</h1>
<form action="output.php" method="POST">
    Masukan NIS <input type="text" name="nim"><br>
    Daftar Mata Pelajaran <br>
    <?php

    $query = "SELECT * FROM mapel";
    $hasil = mysqli_query($connect, $query);
    $no = 1;

    while($data = mysqli_fetch_array($hasil)){
        echo "<input type='checkbox' value='$data[kodeMapel]'
        name='mapel$no'>$data[namaMapel] <br>";
        $no++;
    }
    ?>
<input type="hidden" name="jumMapel" value="<?php echo $no-1; ?>">
<input type="submit" value="submit">
</form>