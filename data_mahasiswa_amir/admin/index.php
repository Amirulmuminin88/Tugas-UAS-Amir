<?php $thisPage="Dashboard"; ?>
<?php $title = "Dashboard Admin - Data Mahasiswa" ?>
<?php $description = "Dashboard Admin - Data Mahasiswa" ?>
<?php 
include("header.php");
include("../koneksi.php");
?>
	<div class="container">
		<div class="content">
			<?php
			$username = $_SESSION['admin'];
			$sql = mysqli_query($koneksi, "SELECT * FROM tbl_discord WHERE username='$username'");
			if(mysqli_num_rows($sql) == 0){
				header("Location: index.php");
			}else{
				$row = mysqli_fetch_assoc($sql);
			}
			?>
			<div class="jumbotron">
				<h1>Data Mahasiswa</h1>
				<p>Aplikasi CRUD <br>Nama	: M. Amirul M.<br>NIM	: 4122053</p><br /><br />
				<p>Anda login sebagai <strong><a href="profile.php"><?php echo $row['nama']; ?></a></strong></p>
				<a href="data.php" data-toggle="tooltip" title="Lihat Data Mahasiswa" class="btn btn-info" role="button"><span class="glyphicon glyphicon-list"></span> Lihat Data Mahasiswa</a>
				<a href="tambah.php" data-toggle="tooltip" title="Tambah Data Mahasiswa" class="btn btn-success" role="button"><span class="glyphicon glyphicon-user"></span> Tambah Mahasiswa</a>
			</div>
		</div>
	</div>
<?php 
include("footer.php");
?>