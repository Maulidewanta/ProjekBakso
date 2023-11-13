<html lang="en">
    <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,initial-scale=1.0">
    <title> Data Pegawai </title>
    <link rel="stylesheet" href="pegawai.css">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    </head>

    <body>
       <!-- sidebar -->
       <div class="sidebar">
        <div class="bar">
            <div class="bakso">
                <h1>Bakso Kabut Bu Juhairiyah</h1>
            </div>
            <div class="menu">
            <ul>
                <li><a href="dashboard.php">Dashboard</a></li>
                <li><a href="pegawai.php">Pegawai</a></li>
                <li><a href="#">Stok</a></li>
                <li><a href="#">Menu</a></li>
                <li><a href="#">Data Penjualan</a></li>
                <li><a href="#">Data Pembelian</a></li>
            </ul>
            </div>
       </div>
       </div>

       <!-- topbar -->
       <div class="topbar">
            <div class="top">
                <div class="nav">
                    <input type="text" placeholder="Pencarian.." >
                    <button type="submit">CARI</button>
                    <h1>Halo Admin</h1>
                </div>
            </div>
       </div>

       <!-- content -->
       <div class="content">
            <div class="konten">
                <div class="dash">
                    <input type="text" placeholder="Cari Pegawai..">
                    <button type="submit">Cari</button>
                    <a href="pegawai2.php">TAMBAH PEGAWAI</a>
                </div>
                <div class="tabelpegawai">
                    <table border="1" class="tabpegawai">
                            <tr>
                                <th>NO</th>
                                <th>ID PEGAWAI</th>
                                <th>NAMA</th>
                                <th>JABATAN</th>
                                <th>GAJI</th>
                                <th>ALAMAT</th>
                                <th>NO TELEPON</th>
                            </tr>
                            <?php
                            include "koneksi.php";
                            $no=1;
                            $ambildata = mysqli_query($koneksi,"select * from pegawai");
                            while($tampil = mysqli_fetch_array($ambildata)){
                                echo "
                                <tr>
                                    <td>$no</td>
                                    <td>$tampil[ID_Pegawai]</td>
                                    <td>$tampil[Nama]</td>
                                    <td>$tampil[Jabatan]</td>
                                    <td>$tampil[Gaji]</td>
                                    <td>$tampil[Alamat]</td>
                                    <td>$tampil[No_Telp]</td>
                                </tr>";

                                $no++;
                            }
                            ?>
                    </table>
                </div>
            </div>
       </div>
    </body>
</html>