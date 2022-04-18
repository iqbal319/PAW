<?php include('config.php'); ?>


	<div class="container" style="margin-top:20px">
		<center><font size="6">Edit Data</font></center>

		<hr>

		<?php
		//jika sudah mendapatkan parameter GET id dari URL

		if(isset($_GET['id'])){
			//membuat variabel $id untuk menyimpan id dari GET id di URL
			$id = $_GET['id'];

			//query ke database SELECT tabel produk berdasarkan id = $id
			$select = mysqli_query($koneksi, "SELECT * FROM produk WHERE id='$id'") or die(mysqli_error($koneksi));

			//jika hasil query = 0 maka muncul pesan error
			if(mysqli_num_rows($select) == 0){
				echo '<div class="alert alert-warning">ID tidak ada dalam database.</div>';
				exit();
			//jika hasil query > 0
			}else{
				//membuat variabel $data dan menyimpan data row dari query
				$data = mysqli_fetch_assoc($select);
			}
		}
		?>

		<?php


		//jika tombol simpan di tekan/klik
		if(isset($_POST['submit'])){

			$id 		= $_POST['id'];
			$nama		= $_POST['nama'];
			$ukuran		= $_POST['ukuran'];
			$harga		= $_POST['harga'];
			$deskripsi	= $_POST['deskripsi'];


			$sql = mysqli_query($koneksi, "UPDATE produk SET nama='$nama', ukuran='$ukuran', harga=$harga, deskripsi='$deskripsi' WHERE id=$id") or die(mysqli_error($koneksi));

			if($sql){
				echo '<script>alert("Berhasil menyimpan data."); document.location="index.php?page=tampil_prdk";</script>';
			}else{
				echo '<div class="alert alert-warning">Gagal melakukan proses edit data.</div>';
			}
		}
		?>



		<form action="index.php?page=edit_prdk" method="post">
			<div class="item form-group">
				<label class="col-form-label col-md-3 col-sm-3 label-align">ID</label>
				<div class="col-md-6 col-sm-6 ">
					<input value="<?php echo $data['id'] ?>" type="text" name="id" class="form-control" size="4" required>
				</div>
			</div>
			<div class="item form-group">
				<label class="col-form-label col-md-3 col-sm-3 label-align">Nama Produk</label>
				<div class="col-md-6 col-sm-6">
					<input value="<?php echo $data['nama'] ?>" type="text" name="nama" class="form-control" required>
				</div>
			</div>
			<div class="item form-group">
				<label class="col-form-label col-md-3 col-sm-3 label-align">Ukuran</label>
				<div class="col-md-6 col-sm-6">
					<input value="<?php echo $data['ukuran'] ?>" type="text" name="ukuran" class="form-control" required>
				</div>
			</div>
			<div class="item form-group">
				<label class="col-form-label col-md-3 col-sm-3 label-align">Harga</label>
				<div class="col-md-6 col-sm-6">
					<input value="<?php echo $data['harga'] ?>" type="text" name="harga" class="form-control" required>
				</div>
			</div>
			<div class="item form-group">
				<label class="col-form-label col-md-3 col-sm-3 label-align">Deskripsi</label>
				<div class="col-md-6 col-sm-6">
					<input value="<?php echo $data['deskripsi'] ?>" type="text" name="deskripsi" class="form-control" required>
				</div>
			</div>

			<div class="item form-group">
				<div class="col-md-6 col-sm-6 offset-md-3">
					<input type="submit" name="submit" class="btn btn-primary" value="Simpan">
					<a href="index.php?page=tampil_prdk" class="btn btn-warning">Kembali</a>
				</div>
			</div>
		</form>
	</div>
