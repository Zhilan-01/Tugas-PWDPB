<!DOCTYPE html>
<html>
<head>
    <title>Form Tiket</title>
</head>
<body>

<div style="
    display:flex;
    justify-content:center;
    align-items:center;
    height:100vh;
">

    <form method="post" action="proses_tiket.php" style="
        border:1px solid #8fc9f8;
        padding:20px;
    ">
        <h3 style="text-align:center;">TIKET ONLINE JAKARTA - MALAYSIA</h3>

        Nama<br>
        <input type="text" name="nama" required><br><br>

        Kode Pesawat<br>
        <select name="kode">
            <option value="GRD">GRD</option>
            <option value="MPT">MPT</option>
            <option value="BTV">BTV</option>
        </select><br><br>

        Kelas<br>
        <input type="radio" name="kelas" value="Eksekutif" required> Eksekutif<br>
        <input type="radio" name="kelas" value="Bisnis"> Bisnis<br>
        <input type="radio" name="kelas" value="Ekonomi"> Ekonomi<br><br>

        Jumlah Tiket<br>
        <input type="number" name="jumlah" min="1" required><br><br>

        <div style="text-align:center;">
            <button type="submit">SIMPAN</button>
            <button type="reset">BATAL</button>
        </div>
    </form>

</div>

</body>
</html>
