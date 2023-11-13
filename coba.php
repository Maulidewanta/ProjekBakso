<!DOCTYPE html>
<html>
<head>
  <title>Sidebar Example</title>
  <link rel="stylesheet" type="text/css" href="coba.css">
</head>
<body>

<div class="container">
  <div class="sidebar">
    <h2>Sidebar</h2>
    <ul>
      <li><a href="#">Menu 1</a></li>
      <li><a href="#">Menu 2</a></li>
      <li><a href="#">Menu 3</a></li>
      <li><a href="#">Menu 4</a></li>
    </ul>
  </div>

  





<div class="content">
  <header>
    <h1>Judul Halaman</h1>
    <nav>
      <ul>
        <li><a href="#">Beranda</a></li>
        <li><a href="#">Tentang</a></li>
        <li><a href="#">Layanan</a></li>
        <li><a href="#">Kontak</a></li>
      </ul>
    </nav>
  </header>

  <main>
    <section>
      <h2>Section 1</h2>
      <p>Ini adalah bagian pertama dari konten.</p>
    </section>

    <section>
      <h2>Section 2</h2>
      <p>Ini adalah bagian kedua dari konten.</p>
    </section>
  </main>

  <footer>
    <p>Hak Cipta © 2023 - Nama Perusahaan.</p>
  </footer>
</div>
</div>

</body>
</html>





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