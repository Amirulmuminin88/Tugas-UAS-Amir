<?php $thisPage="Profile"; ?>
<?php $title = "Profile - Spades Discord" ?>
<?php $description = "Halaman Profile" ?>
<?php 
include("header.php");
include("../koneksi.php");
?>
	<div class="container">
		<div class="content">
			<h2>Profile</h2>
			<hr />
			
			<?php
			$username = $_SESSION['admin'];
			
			$sql = mysqli_query($koneksi, "SELECT * FROM tbl_discord WHERE username='$username'");
			if(mysqli_num_rows($sql) == 0){
				header("Location: index.php");
			}else{
				$row = mysqli_fetch_assoc($sql);
			}
			?>
			<table class="table table-striped table-condensed">
			<tr>
					<th width="20%">ID Mahasiswa</th>
					<td><?php echo $row['id_discord']; ?></td>
				</tr>
				<tr>
					<th>Nama mahasiswa</th>
					<td><?php echo $row['nama']; ?></td>
				</tr>
				<tr>
					<th>Jenis Kelamin</th>
					<td><?php echo $row['jenis_kelamin']; ?></td>
				</tr>
				<tr>
					<th>Tempat & Tanggal Lahir</th>
					<td><?php echo $row['tempat_lahir'].', '.$row['tanggal_lahir']; ?></td>
				</tr>
				<tr>
					<th>Alamat Asal</th>
					<td><?php echo $row['alamat_asal']; ?></td>
				</tr>
				<tr>
					<th>Alamat Sekarang</th>
					<td><?php echo $row['alamat_sekarang']; ?></td>
				</tr>
				<tr>
					<th>No Telepon</th>
					<td><?php echo $row['no_telepon']; ?></td>
				</tr>
				<tr>
					<th>Email</th>
					<td><?php echo $row['email']; ?></td>
				</tr>
				<tr>
					<th>Status</th>
					<td><?php echo $row['status']; ?></td>
				</tr>
				<tr>
					<th>Fakultas</th>
					<!-- <td><?php echo $row['game']; ?></td> -->
					<td><?php if($row['game'] == 'Console'){
									echo '<span>Saintek</span>';
								}
								else if ($row['game'] == 'Mobile' ){
									echo '<span>FIK</span>';
								}
								else if ($row['game'] == 'PC' ){
									echo '<span>FKIP</span>';
								}
							?></td>
				</tr>
				<tr>
					<th>Jurusan</th>
					<!-- <td><?php echo $row['genre_game']; ?></td> -->
					<td><?php if($row['genre_game'] == 'MOBA'){
									echo '<span>Sistem Informasi</span>';
								}
								else if ($row['genre_game'] == 'FPS' ){
									echo '<span>Matematika</span>';
								}
								else if ($row['genre_game'] == 'RPG' ){
									echo '<span>FBB</span>';
								}
								else if ($row['genre_game'] == 'Racing' ){
									echo '<span>Keperawatan</span>';
								}
							?>
								</td>
				</tr>
				<tr>
					<th>Username</th>
					<td><?php echo $row['username']; ?></td>
				</tr>
			</table>
			
			<a href="index.php" class="btn btn-sm btn-info"><span class="glyphicon glyphicon-arrow-left" aria-hidden="true"></span> Dashboard</a>
			<a href="edit.php?username=<?php echo $row['username']; ?>" class="btn btn-sm btn-success"><span class="glyphicon glyphicon-edit" aria-hidden="true"></span> Edit Profile</a>
			<a href="password_admin.php?username=<?php echo $row['username']; ?>" class="btn btn-sm btn-warning"><span class="glyphicon glyphicon-edit" aria-hidden="true"></span> Ganti Password</a>
		</div>
	</div>
<?php 
include("footer.php");
?>