<?php $thisPage="Dashboard"; ?>
<?php $title = "Dashboard User - Data Mahasiswa" ?>
<?php $description = "Dashboard User - Aplikasi CRUD" ?>
<?php 
include("header.php");
include("../koneksi.php");
?>
	<div class="container">
		<div class="content">
			<div class="jumbotron">
			<h1>Data Mahasiswa</h1>
			<p>Selamat Datang di Data Mahasiswa</p>
			<a href="profile.php" data-toggle="tooltip" title="Lihat Data Mahasiswa" class="btn btn-info" role="button"><span class="glyphicon glyphicon-user"></span> Lihat Data Mahasiswa</a>
			<a href="edit.php" data-toggle="tooltip" title="Edit Data Mahasiswa" class="btn btn-info" role="button"><span class="glyphicon glyphicon-edit"></span> Edit Data Mahasiswa</a>
			</div>
		</div>
	</div>
<?php 
include("footer.php");
?>