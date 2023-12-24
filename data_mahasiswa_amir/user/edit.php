<?php $thisPage="Edit"; ?>
<?php $title = "Edit Profile - Data Mahasiswa" ?>
<?php $description = "Halaman Edit Profile" ?>
<?php 
include("header.php");
include("../koneksi.php");
?>
	<div class="container">
		<div class="content">
			<h2>Edit Profile</h2>
			<hr />
			
			<?php
			$username = $_SESSION['user'];
			$sql = mysqli_query($koneksi, "SELECT * FROM tbl_discord WHERE username='$username'");
			if(mysqli_num_rows($sql) == 0){
				header("Location: index.php");
			}else{
				$row = mysqli_fetch_assoc($sql);
			}
			if(isset($_POST['save'])){
				$nim		     = $_POST['nim'];
				$nama		     = $_POST['nama'];
				$jenis_kelamin   = $_POST['jenis_kelamin'];
				$tempat_lahir	 = $_POST['tempat_lahir'];
				$tanggal_lahir	 = $_POST['tanggal_lahir'];
				$alamat_asal     = $_POST['alamat_asal'];
				$alamat_sekarang = $_POST['alamat_sekarang'];
				$no_telepon		 = $_POST['no_telepon'];
				$email  		 = $_POST['email'];
				$status = $_POST['status'];
				$game	     = $_POST['game'];
				$genre_game	     = $_POST['genre_game'];
								
				$update = mysqli_query($koneksi, "UPDATE tbl_discord SET nama='$nama', jenis_kelamin='$jenis_kelamin', tempat_lahir='$tempat_lahir', tanggal_lahir='$tanggal_lahir', alamat_asal='$alamat_asal', alamat_sekarang='$alamat_sekarang', no_telepon='$no_telepon', email='$email', status='$status', game='$game', genre_game='$genre_game' WHERE username='$username'") or die(mysqli_error());
				if($update){
					header("Location: edit.php?username=".$username."&pesan=sukses");
				}else{
					echo '<div class="alert alert-danger alert-dismissable"><button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>Data gagal disimpan, silahkan coba lagi.</div>';
				}
			}
			
			if(isset($_GET['pesan']) == 'sukses'){
				echo '<div class="alert alert-success alert-dismissable"><button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>Data berhasil disimpan. <- <a href="profile.php">Kembali ke Profile</a></div>';
			}
			?>
			<form class="form-horizontal" action="" method="post">
				<div class="form-group">
					<label class="col-sm-3 control-label">ID Mahasiswa</label>
					<div class="col-sm-2">
						<input type="text" name="id_discord" value="<?php echo $row ['id_discord']; ?>" class="form-control" placeholder="id_discord" required>
					</div>
				</div>
				<div class="form-group">
					<label class="col-sm-3 control-label">Nama</label>
					<div class="col-sm-4">
						<input type="text" name="nama" value="<?php echo $row ['nama']; ?>" class="form-control" placeholder="Nama" required>
					</div>
				</div>
				<div class="form-group">
					<label class="col-sm-3 control-label">Jenis Kelamin</label>
					<div class="col-sm-2">
						<select name="jenis_kelamin" class="form-control" required>
							<option value="<?php echo $row ['jenis_kelamin']; ?>"><?php echo $row ['jenis_kelamin']; ?></option>
							<option value="Laki-Laki">Laki-Laki</option>
							<option value="Perempuan">Perempuan</option>
						</select>
					</div>
				</div>
				<div class="form-group">
					<label class="col-sm-3 control-label">Tempat Lahir</label>
					<div class="col-sm-4">
						<input type="text" name="tempat_lahir" value="<?php echo $row ['tempat_lahir']; ?>" class="form-control" placeholder="Tempat Lahir" required>
					</div>
				</div>
				<div class="form-group">
					<label class="col-sm-3 control-label">Tanggal Lahir</label>
					<div class="col-sm-4">
						<input type="text" name="tanggal_lahir" value="<?php echo $row ['tanggal_lahir']; ?>" class="input-group datepicker form-control" date="" data-date-format="dd-mm-yyyy" placeholder="dd-mm-yyyy" required>
					</div>
				</div>
				<div class="form-group">
					<label class="col-sm-3 control-label">Alamat Asal</label>
					<div class="col-sm-3">
						<textarea name="alamat_asal" class="form-control" placeholder="Alamat Asal"><?php echo $row ['alamat_asal']; ?></textarea>
					</div>
				</div>
				<div class="form-group">
					<label class="col-sm-3 control-label">Alamat Sekarang</label>
					<div class="col-sm-3">
						<textarea name="alamat_sekarang" class="form-control" placeholder="Alamat Sekarang"><?php echo $row ['alamat_sekarang']; ?></textarea>
					</div>
				</div>
				<div class="form-group">
					<label class="col-sm-3 control-label">No Telepon</label>
					<div class="col-sm-3">
						<input type="text" name="no_telepon" value="<?php echo $row ['no_telepon']; ?>" class="form-control" placeholder="No Telepon" required>
					</div>
				</div>
				<div class="form-group">
					<label class="col-sm-3 control-label">Email</label>
					<div class="col-sm-3">
						<input type="email" name="email" value="<?php echo $row ['email']; ?>" class="form-control" placeholder="Email" required>
					</div>
				</div>
				<div class="form-group">
					<label class="col-sm-3 control-label">Status</label>
					<div class="col-sm-4">
						<input type="text" name="status" value="<?php echo $row ['status']; ?>" class="form-control" placeholder="status" required>
					</div>
				</div>
				<div class="form-group">
				<label class="col-sm-3 control-label">Fakultas</label>
					<div class="col-sm-2">
						<select name="game" class="form-control" required>
							<option value="<?php echo $row['game']; ?>"> - Pilih Fakultas - </option>
							<option value="Console">Saintek</option>
							<option value="PC">FKIP</option>
							<option value="Mobile">FIK</option>
						</select>
					</div>
                    <!-- <div class="col-sm-3">
                    <b>Game Sekarang :</b> <span class="label label-success"><?php echo $row['game']; ?></span>
				    </div> -->
				</div>
				<div class="form-group">
				<label class="col-sm-3 control-label">Jurusan</label>
					<div class="col-sm-2">
						<select name="genre_game" class="form-control" required>
							<option value="<?php echo $row['genre_game']; ?>"> - Jurusan - </option>
							<option value="MOBA">Sistem Informasi</option>
							<option value="FPS">Matematika</option>
							<option value="RPG">FBB</option>
							<option value="Racing">Keperawatan</option>
						</select>
					</div>
                    <!-- <div class="col-sm-3">
                    <b>Genre Game Sekarang :</b> <span class="label label-success"><?php echo $row['genre_game']; ?></span>
				    </div> -->
				</div>
				<div class="form-group">
					<label class="col-sm-3 control-label">&nbsp;</label>
					<div class="col-sm-6">
						<input type="submit" name="save" class="btn btn-sm btn-primary" value="Simpan" data-toggle="tooltip" title="Simpan Data Discord">
						<a href="profile.php" class="btn btn-sm btn-danger" data-toggle="tooltip" title="Batal">Batal</a>
					</div>
				</div>
			</form>
		</div>
	</div> 
<?php 
include("footer.php");
?>