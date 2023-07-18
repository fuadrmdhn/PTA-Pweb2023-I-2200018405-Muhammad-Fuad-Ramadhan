<!DOCTYPE html>
<html>
<head>
    <title>Transaksi POM Bensin Mini Pak Tono</title>
    <link rel="stylesheet" type="text/css" href="gaya1.css">
</head>
<body>
    <header>
        <div class="logo">
            <img src="logouad.png" alt="logo">
        </div>
        <div class="logo1">
            <img src="logoprt.png" alt="logo1">
        </div> 
        <div class="judul">
            <h1>Data Transaksi SPBU Pertamina UAD</h1>
        </div>   
    </header>

    <nav>
        <ul>
            <li><a href="index.html">Beranda</a></li>
            <li><a href="program.html">Transaksi</a></li>
            <li><a href="transaksi.php">Data Transaksi</a></li>
        </ul>
    </nav>

    <div class="container">
        <table id="tabelTransaksi">
            <tr>
                <th>No</th>
                <th>Nama Pelanggan</th>
                <th>Jenis Bensin</th>
                <th>Harga (per Liter)</th>
                <th>Jumlah Bensin (Liter)</th>
                <th>Total Harga</th>
            </tr>
            <?php include 'tampilan.php'; ?>
        </table>
    </div>

    <footer>
        <h5>&copy; 2023 - SPBU Pertamina UAD</h5>
    </footer>
</body>
</html>
