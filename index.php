<?php
$bil1 = @$_POST['bil1'];
$bil2 = @$_POST['bil2'];
$operasi = @$_POST['operasi'];
$hitung = @$_POST['hitung'];
$hasil = @$_POST['hasil'];

if (isset($hitung)) {
    switch ($operasi) {
        case 'tambah':
            $hasil = $bil1 + $bil2;
            break;
        case 'kurang':
            $hasil = $bil1 - $bil2;
            break;
        case 'kali':
            $hasil = $bil1 * $bil2;
            break;
        case 'bagi':
            $hasil = $bil1 / $bil2;
            break;
    }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tugas 6 Rizki Dwi Ramadhan</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <div class="kalkulator">
        <h1 class="judul">KALKULATOR</h1>
        <form method="post" action="index.php">
            <input type="number" name="bil1" class="bil" autocomplete="off" placeholder="Masukkan Bilangan Pertama" autofocus required>
            <input type="number" name="bil2" class="bil" autocomplete="off" placeholder="Masukkan Bilangan Kedua" required>
            <select class="opt" name="operasi" required>
                <option value=""> -- Pilih Operator --</option>
                <option value="tambah">+</option>
                <option value="kurang">-</option>
                <option value="kali">*</option>
                <option value="bagi">/</option>
            </select>
            <button type="submit" name="hitung" class="tombol">Hitung</button>
        </form>
        <h2 class="hasil">
            Hasil = <?= $hasil ?>
        </h2>



    </div>
</body>

</html>