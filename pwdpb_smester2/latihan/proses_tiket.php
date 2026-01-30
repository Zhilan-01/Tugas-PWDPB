<?php
if (!isset($_POST['nama'])) {
    echo "Data belum dikirim.";
    exit;
}

$nama   = $_POST['nama'];
$kode   = $_POST['kode'];
$kelas  = $_POST['kelas'];
$jumlah = $_POST['jumlah'];

if ($kode == "GRD") {
    $pesawat = "Garuda";
    if ($kelas == "Eksekutif") $harga = 1500000;
    elseif ($kelas == "Bisnis") $harga = 900000;
    else $harga = 500000;

} elseif ($kode == "MPT") {
    $pesawat = "Merpati";
    if ($kelas == "Eksekutif") $harga = 1200000;
    elseif ($kelas == "Bisnis") $harga = 800000;
    else $harga = 400000;

} else {
    $pesawat = "Batavia";
    if ($kelas == "Eksekutif") $harga = 1000000;
    elseif ($kelas == "Bisnis") $harga = 700000;
    else $harga = 300000;
}

$total = $harga * $jumlah;
?>

<!DOCTYPE html>
<html>
<head>
    <title>Proses Tiket</title>
</head>
<body>

<div style="
    display:flex;
    justify-content:center;
    align-items:center;
    height:100vh;
">

    <div style="
        border:1px solid #73bcf8;
        padding:20px;
        min-width:300px;
    ">
        <h3 style="text-align:center;">=============================================</h3>
        <h3 style="text-align:center;">PEMESANAN TIKET</h3>
        <h3 style="text-align:center;">=============================================</h3>

        <div><span style="display:inline-block; width:120px;">Nama</span> : <?= $nama ?></div>
        <div><span style="display:inline-block; width:120px;">Pesawat</span> : <?= $pesawat ?></div>
        <div><span style="display:inline-block; width:120px;">Kelas</span> : <?= $kelas ?></div>
        <div><span style="display:inline-block; width:120px;">Harga Tiket</span> : <?= $harga ?></div>
        <div><span style="display:inline-block; width:120px;">Jumlah Tiket</span> : <?= $jumlah ?></div>
        <div><span style="display:inline-block; width:120px;"><b>Total Bayar</b></span> : <b><?= $total ?></b></div>

        <br>
        <h3 style="text-align:center;">=============================================</h3>
        <div style="text-align:center;">
            <a href="form_tiket.php">
                <button>KEMBALI KE AWAL</button>
            </a>
        </div>
    </div>

</div>
</body>
</html>
