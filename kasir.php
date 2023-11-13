<html lang="en">
    <head>
        <meta charset="0">
        <title>Aplikasi Kasir</title>
        <link rel="stylesheet" href="kasir.css">
        <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    </head>

    <body>
     <div class="top">
        <button type="submit"><i class='bx bx-log-out'></i></button>
     </div>
     <div class="mid">
        <div class="menuatas">
            <a href="" class="detail1">Transaksi Detail</a>
            <a href="pembayaran.php" class="detail">Pembayaran</a>
            <a href="" class="detail">Riwayat</a>
        </div>
        <div class="menubawah">
            <div class="transaksi">
                <p>No.Transaksi</p>
                <input type="text">
            </div>
            <div class="tanggal">
                <p>Tanggal</p>
                <input type="text">
            </div>
        </div>

     </div>
     <div class="bawah">
        <div class="menukiri">
            <div class="daftar">
                <h3>Daftar Menu</h3>
            </div>
            <div class="input">
                <i class='bx bx-search-alt'></i><input type="text" placeholder="Cari..">
            </div>
        </div>
        <div class="menukanan">
            <div class="keranjang">
                <h3>Keranjang</h3>
            </div>
            <div class="hapuskeranjang">
                <button type="submit">Hapus Keranjang</button>
            </div>
            <div class="tabel">
                <table border="1">
                <tr>
                    <td>Nama Barang</td>
                    <td>Jumlah</td>
                    <td>Harga</td>
                    <td>Total</td>
                    <td>Action</td>
                </tr>
                </table>
            </div>
            <div class="total">
                <input type="text" placeholder="Total">
            </div>
            <div class="simpan">
                <button type="submit">Simpan</button>
            </div>
        </div>
     </div>

    </body>
</html>