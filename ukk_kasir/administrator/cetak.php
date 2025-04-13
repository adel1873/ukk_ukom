<!DOCTYPE html>
<html>

<head>
    <title>Cetak Transaksi</title>
</head>

<body>
    <style type="text/css">
    body {
        font-family: sans-serif;
    }

    img {
        justify-content: center;
    }

    table {
        margin: 20px auto;
        border-collapse: collapse;
    }

    table th,
    table td {
        border: 1px solid #3c3c3c;
        padding: 3px 8px;

    }

    a {
        background: blue;
        color: #fff;
        padding: 8px 10px;
        text-decoration: none;
        border-radius: 2px;
    }

    .tengah {
        text-align: center;
    }
    </style>
    <h3 align="center">CETAK LAPORAN TRANSAKSI KASIR</h3>
    <div class=".tengah"><img src="https://www.mandalahayu.sch.id/assets/logo-mandalahayu.png" height="10%" width="10%">
    </div>
    <table>
        <tr>
            <th>ID Pembelian</th>
            <th>Nama Pelanggan</th>
            <th>Nomor Telepon</th>
            <th>Tanggal Pembelian</th>
            <th>Total Harga</th>
        </tr>
        <?php 
 // koneksi database
 $koneksi = mysqli_connect("localhost","root","","kasir_baru");

 // menampilkan data pegawai
 $data = mysqli_query($koneksi,"SELECT * FROM penjualan INNER JOIN pelanggan ON pelanggan.PelangganID=penjualan.PelangganID");
 while($d = mysqli_fetch_array($data)){
 ?>
        <tr>
            <td style='text-align: center;'><?php echo $d['PenjualanID'] ?></td>
            <td><?php echo $d['NamaPelanggan']; ?></td>
            <td><?php echo $d['NomorTelepon']; ?></td>
            <td><?php echo $d['TanggalPenjualan']; ?></td>
            <td><?php echo $d['TotalHarga']; ?></td>
        </tr>
        <?php 
 }
 ?>
    </table>
    <script>
    window.print();
    </script>
</body>

</html>