<?php
$file = fopen("transaksi.txt", "a");

$namaPelanggan = $_POST['namaPelanggan'];
$jenisBensin = $_POST['jenisBensin'];
$jumlahLiter = $_POST['jumlahLiter'];

fwrite($file, $namaPelanggan . "," . $jenisBensin . "," . $jumlahLiter . "\n");
fclose($file);

$count = 1;

$hargaBensin = array(
    "Pertamax Turbo" => 14000,
    "Pertamax" => 12500,
    "Pertalite" => 10000,
    "Pertamina Dex" => 13550,
    "Dexlite" => 13150,
    "Solar" => 6800
);

$file = fopen("transaksi.txt", "r");

echo "<tr>";
echo "<th>No</th>";
echo "<th>Nama Pelanggan</th>";
echo "<th>Jenis Bensin</th>";
echo "<th>Harga (per Liter)</th>";
echo "<th>Jumlah Bensin (Liter)</th>";
echo "<th>Total Harga</th>";
echo "</tr>";

while (!feof($file)) {
    $dataTransaksi = fgets($file);
    if (!empty($dataTransaksi)) {
        $transaksi = explode(",", $dataTransaksi);
        $jenisBensin = $transaksi[1];
        $jumlahLiter = $transaksi[2];
        $hargaBensinPerLiter = isset($hargaBensin[$jenisBensin]) ? $hargaBensin[$jenisBensin] : 0;
        $totalHarga = $hargaBensinPerLiter * $jumlahLiter;

        echo "<tr>";
        echo "<td>" . $count . "</td>";
        echo "<td>" . $transaksi[0] . "</td>";
        echo "<td>" . $jenisBensin . "</td>";
        echo "<td> Rp " . $hargaBensinPerLiter . " / Liter</td>";
        echo "<td>" . $jumlahLiter . "</td>";
        echo "<td> Rp " . $totalHarga . "</td>";
        echo "</tr>";
        $count++;
    }
}

fclose($file);
?>