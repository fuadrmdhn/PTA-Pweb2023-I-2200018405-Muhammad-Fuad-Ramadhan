<?php
$file = fopen("transaksi.txt", "r");
$count = 1;

$hargaBensin = array(
    "Pertamax Turbo" => 14000,
    "Pertamax" => 12500,
    "Pertalite" => 10000,
    "Pertamina Dex" => 13550,
    "Dexlite" => 13150,
    "Solar" => 6800
);

while (!feof($file)) {
    $dataTransaksi = fgets($file);
    if (!empty($dataTransaksi)) {
        $transaksi = explode(",", $dataTransaksi);
        $jenisBensin = $transaksi[1];
        $jumlahLiter = $transaksi[2];
        $hargaBensinPerLiter = isset($hargaBensin[$jenisBensin]) ? $hargaBensin[$jenisBensin] : 0;
        $totalHarga = $hargaBensinPerLiter * $jumlahLiter;

        ?>
        <tr>
            <td><?php echo $count; ?></td>
            <td><?php echo $transaksi[0]; ?></td>
            <td><?php echo $jenisBensin; ?></td>
            <td>Rp <?php echo $hargaBensinPerLiter; ?> / Liter</td>
            <td><?php echo $jumlahLiter; ?></td>
            <td>Rp <?php echo $totalHarga; ?></td>
        </tr>
        <?php
        $count++;
    }
}

fclose($file);
?>