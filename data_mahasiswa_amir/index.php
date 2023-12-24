<?php $thisPage="Home"; ?>
<?php $title = "Home - Data Mahasiswa" ?>
<?php $description = "Home - Aplikasi CRUD" ?>
<?php require('akses.php'); ?>
<?php 
include("header.php");
include("koneksi.php");
?>
	<div class="container">
		<div class="content">
			<div class="jumbotron">
				<h1>Data Mahasiswa</h1>
				<p>Aplikasi Data Mahasiswa<br>Nama	: M. Amirul M.<br>NIM	: 4122053</p>
				<a href="login.php" data-toggle="tooltip" title="Login" class="btn btn-info" role="button">Login</a>
			</div>
		</div>
	</div>
<?php 
include("footer.php");
?>