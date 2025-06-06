<?php
include "header.php";
include "navbar.php";
?>
<style>
	.card {
		background-color: #fff0f5 !important; /* light pink */
		border: 1px solid #ffb6c1;
	}

	.card-body {
		color: #cc0055;
	}

	.btn-outline-primary {
		color: #ff69b4;
		border-color: #ff69b4;
	}

	.btn-outline-primary:hover {
		background-color: #ff69b4;
		color: white;
		border-color: #ff1493;
	}

	body {
		background-color: #ffe6f0;
	}
</style>
<div class="card mt-2">
	<div class="card-body">
		<div class="row">
			<div class="col-sm-6">
				<div class="card">
					<div class="card-body">
						Data Barang
						<?php
						include '../koneksi.php';
						$data_produk = mysqli_query($koneksi,"SELECT * FROM produk");
						$jumlah_produk = mysqli_num_rows($data_produk);
						?>
						<h3><?php echo $jumlah_produk; ?></h3>
						<a href="data_barang.php" class="btn btn-outline-primary btn-sm">Detail</a>
					</div>
				</div>
			</div>
			<div class="col-sm-6">
				<div class="card">
					<div class="card-body">
						Data Pembelian
						<?php
						include '../koneksi.php';
						$data_penjualan = mysqli_query($koneksi,"SELECT * FROM penjualan");
						$jumlah_penjualan = mysqli_num_rows($data_penjualan);
						?>
						<h3><?php echo $jumlah_penjualan; ?></h3>
						<a href="pembelian.php" class="btn btn-outline-primary btn-sm">Detail</a>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<div class="card mt-2">
	<div class="card-body">
		<p>Selamat datang dihalaman petugas, silahkan anda bisa mengakses beberapa fitur</p>
	</div>
</div>
<?php
include "footer.php";
?>