<?php $thisPage="Login"; ?>
<?php $title = "Login - data mahasiswa" ?>
<?php $description = "Login - data mahasiswa" ?>
<?php 
include("akses.php");
include("header.php");
require("koneksi.php");
?>
	<div class="container">
		<div class="content login">
			<form class="form-signin" action="" method="post">
				<h2 class="form-signin-heading">Please login</h2>
				<label for="username" class="sr-only">Username</label>
				<input type="text" name="username" class="form-control" placeholder="Username" required autofocus>
				<label for="password" class="sr-only">Password</label>
				<input type="password" name="password" class="form-control" placeholder="Password" required>
				<div class="checkbox">
				  <label>
				  </label>
				</div>
				<button class="btn btn-lg btn-primary btn-block" type="submit" name="login" value="Login">Login</button>
			</form>
		</div>
	</div>

	<?php
	if(isset($_POST['login'])){
		$user = mysqli_real_escape_string($koneksi, htmlentities($_POST['username']));
		$pass = mysqli_real_escape_string($koneksi, htmlentities(md5($_POST['password'])));

		$sql = mysqli_query($koneksi, "SELECT * FROM tbl_discord WHERE username='$user' AND password='$pass'") or die(mysqli_error($koneksi));
		if(mysqli_num_rows($sql) == 0){
			echo '<center><span class="label label-danger">User tidak ditemukan</span></center>';
		}else{
			$row = mysqli_fetch_assoc($sql);
			if($row['level'] == 'admin'){
				$_SESSION['admin']=$user;
				$_SESSION['level']='admin';
				echo '<script language="javascript">document.location="admin/index.php";</script>';
			}
			elseif($row['level'] == 'user'){
				$_SESSION['user']=$user;
				$_SESSION['level']='user';
				echo '<script language="javascript">document.location="user/index.php";</script>';
			}else{
				echo '<center><div class="alert alert-danger">Upss...!!! Login gagal.</div></center>';
			}
		}
	}
	?>

<?php 
include("footer.php");
?>