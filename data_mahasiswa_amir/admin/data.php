<?php $thisPage="Data"; ?>
<?php $title = "Data Mahasiswa - Aplikasi CRUD" ?>
<?php $description = "Data Mahasiswa - Aplikasi CRUD" ?>
<?php 
include("header.php");
include("../koneksi.php");
?>
	<div class="container">
		<div class="content">
			<h2>Data Mahasiswa</h2>
			<hr />
			
			<?php
			if(isset($_GET['aksi']) == 'delete'){
				$id_discord = $_GET['id_discord'];
				$cek = mysqli_query($koneksi, "SELECT * FROM tbl_discord WHERE id_discord='$id_discord'");
				if(mysqli_num_rows($cek) == 0){
					echo '<div class="alert alert-info alert-dismissable"><button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button> Data tidak ditemukan.</div>';
				}else{
					$delete = mysqli_query($koneksi, "DELETE FROM tbl_discord WHERE id_discord='$id_discord'");
					if($delete){
						echo '<div class="alert alert-primary alert-dismissable"><button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button> Data berhasil dihapus.</div>';
					}else{
						echo '<div class="alert alert-danger alert-dismissable"><button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button> Data gagal dihapus.</div>';
					}
				}
			}
			?>
			<form class="form-inline" method="get">
				<div class="form-group">
					<select name="filter" class="form-control" onchange="form.submit()">
						<option value="0">Filter Data Mahasiswa</option>
						<?php $filter = (isset($_GET['filter']) ? strtolower($_GET['filter']) : NULL);  ?>
						<option value="MOBA" <?php if($filter == 'MOBA'){ echo 'selected'; } ?>>Sistem Informasi</option>
						<option value="FPS" <?php if($filter == 'FPS'){ echo 'selected'; } ?>>Matematika</option>
                        <option value="RPG" <?php if($filter == 'RPG'){ echo 'selected'; } ?>>FBB</option>
						<option value="Racing" <?php if($filter == 'Racing'){ echo 'selected'; } ?>>Keperawatan</option>
					</select>
				</div>
			</form>
			<br />
			<div class="table-responsive">
				<table class="table table-striped table-hover">
					<tr>
						<th>No</th>
						<th>ID Discord</th>
						<th>Nama</th>
						<th>Jenis Kelamin</th>
						<th>Tempat Lahir</th>
						<th>Tanggal Lahir</th>
						<th>No Telepon</th>
						<th>Status</th>
						<th>Fakultas</th>
						<th>Jurusan</th>
						<th>Tools</th>
					</tr>
					<?php
					if($filter){
						$sql = mysqli_query($koneksi, "SELECT * FROM tbl_discord WHERE genre_game='$filter' ORDER BY id_discord ASC");
					}else{
						$sql = mysqli_query($koneksi, "SELECT * FROM tbl_discord ORDER BY id_discord ASC");
					}
					if(mysqli_num_rows($sql) == 0){ 
						echo '<tr><td colspan="14">Data Tidak Ada.</td></tr>';
					}else{
						$no = 1;
						while($row = mysqli_fetch_assoc($sql)){
							echo '
							<tr>
								<td>'.$no.'</td>
								<td>'.$row['id_discord'].'</td>
								<td><a href="profile_mahasiswa.php?nim='.$row['id_discord'].'">'.$row['nama'].'</a></td>
								<td>'.$row['jenis_kelamin'].'</td>
								<td>'.$row['tempat_lahir'].'</td>
								<td>'.$row['tanggal_lahir'].'</td>
								<td>'.$row['no_telepon'].'</td>
								<td>'.$row['status'].'</td>
								
								<td>';
								if($row['game'] == 'Console'){
									echo '<span class="label label-success">Saintek</span>';
								}
								else if ($row['game'] == 'Mobile' ){
									echo '<span class="label label-success">FIK</span>';
								}
								else if ($row['game'] == 'PC' ){
									echo '<span class="label label-success">FKIP</span>';
								}
							echo '
								</td>
								<td>';
								if($row['genre_game'] == 'MOBA'){
									echo '<span class="label label-success">Sistem Informasi</span>';
								}
								else if ($row['genre_game'] == 'FPS' ){
									echo '<span class="label label-success">Matematika</span>';
								}
								else if ($row['genre_game'] == 'RPG' ){
									echo '<span class="label label-success">FBB</span>';
								}
								else if ($row['genre_game'] == 'Racing' ){
									echo '<span class="label label-success">Keperawatan</span>';
								}
							echo '
								</td>
								<td>
									
									<a href="edit_member.php?id_discord='.$row['id_discord'].'" title="Edit Data" data-toggle="tooltip" class="btn btn-primary btn-sm"><span class="glyphicon glyphicon-edit" aria-hidden="true"></span></a>
									<a href="password.php?id_discord='.$row['id_discord'].'" title="Ganti Password" data-toggle="tooltip" class="btn btn-warning btn-sm"><span class="glyphicon glyphicon-refresh" aria-hidden="true"></span></a>
									<a href="data.php?aksi=delete&id_discord='.$row['id_discord'].'" title="Hapus Data" data-toggle="tooltip" onclick="return confirm(\'Anda yakin akan menghapus data '.$row['nama'].'?\')" class="btn btn-danger btn-sm"><span class="glyphicon glyphicon-trash" aria-hidden="true"></span></a>
								</td>
							</tr>
							';
							$no++;
						}
					}
					?>
				</table>
			</div>
		</div>
	</div> <!-- /.container -->
<?php 
include("footer.php"); // memanggil file footer.php
?>