<?php
    //Mulai Sesion
    session_start();
    if (isset($_SESSION["ses_username"])==""){
	header("location: login.php");
    
    }else{
      $data_id = $_SESSION["ses_id"];
      $data_nama = $_SESSION["ses_nama"];
      $data_user = $_SESSION["ses_username"];
	  $data_level = $_SESSION["ses_level"];
	  $data_jabatan = $_SESSION["ses_jabatan"];
    }

    //KONEKSI DB
	include "inc/koneksi.php";
	
	$sql = $koneksi->query("SELECT * from tb_profil");
	while ($data= $sql->fetch_assoc()) {
	
	$nama=$data['nama_desa'];
	}
?>

<!DOCTYPE html>
<html>

<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>SI Administrasi Umum</title>
	<link rel="icon" href="dist/img/logopati1.png">
	<!-- Tell the browser to be responsive to screen width -->
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<!-- Font Awesome -->
	<link rel="stylesheet" href="plugins/fontawesome-free/css/all.min.css">
	<!-- Ionicons -->
	<link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
	<!-- DataTables -->
	<link rel="stylesheet" href="plugins/datatables-bs4/css/dataTables.bootstrap4.css">
	<!-- overlayScrollbars -->
	<link rel="stylesheet" href="dist/css/adminlte.min.css">
	<!-- Select2 -->
	<link rel="stylesheet" href="plugins/select2/css/select2.min.css">
	<link rel="stylesheet" href="plugins/select2-bootstrap4-theme/select2-bootstrap4.min.css">
	<!-- Google Font: Source Sans Pro -->
	<link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
	<!-- Alert -->
	<script src="plugins/alert.js"></script>
</head>

<body class="hold-transition sidebar-mini">
	<!-- Site wrapper -->
	<div class="wrapper">
		<!-- Navbar -->
		<nav class="main-header navbar navbar-expand navbar-blue navbar-light">
			<!-- Left navbar links -->
			<ul class="navbar-nav">
				<li class="nav-item">
					<a class="nav-link" data-widget="pushmenu" href="#">
						<i class="fas fa-bars text-white"></i>
					</a>
				</li>

			</ul>

			<!-- SEARCH FORM -->
			<ul class="navbar-nav ml-auto">

				<li class="nav-item d-none d-sm-inline-block">
					<a href="index.php" class="nav-link">
						<font color="white">
							<b>
								<?php echo $nama; ?>
							</b>
						</font>
					</a>
				</li>
			</ul>

		</nav>
		<!-- /.navbar -->

		<!-- Main Sidebar Container -->
		<aside class="main-sidebar sidebar-dark-primary elevation-4">
			<!-- Brand Logo -->
			<a href="index.php" class="brand-link">
				<img src="dist/img/logo.png" alt="AdminLTE Logo" class="brand-image" style="opacity: .8">
				<span class="brand-text"> SI AD-UM</span>
			</a>

			<!-- Sidebar -->
			<div class="sidebar">
				<!-- Sidebar user (optional) -->
				<div class="user-panel mt-2 pb-2 mb-2 d-flex">
					<div class="image">
						<img src="dist/img/user.png" class="img-circle elevation-1" alt="User Image">
					</div>
					<div class="info">
						<a href="index.php" class="d-block">
							<?php echo $data_nama; ?>
						</a>
						<span class="badge badge-success">
							<?php echo $data_jabatan; ?>
						</span>
					</div>
				</div>

				<!-- Sidebar Menu -->
				<nav class="mt-2">
					<ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">

						<!-- Level  -->
						<?php
						if ($data_level=="Administrator"){
						?>
						<li class="nav-item">
							<a href="index.php" class="nav-link">
								<i class="nav-icon fas fa-tachometer-alt"></i>
								<p>
									Dashboard
								</p>
							</a>
						</li>


						<li class="nav-item">
							<a href="?page=data-surat" class="nav-link">
								<i class="nav-icon far fa fa-copy"></i>
								<p>
									Surat Pelayanan Umum
								</p>
							</a>
						</li>
						<li class="nav-item">
							<a href="?page=data-surat" class="nav-link">
								<i class="nav-icon far fa fa-copy"></i>
								<p>
									Surat Kependudukan
								</p>
							</a>
						</li>
						
						<li class="nav-item has-treeview">
				            <a href="#" class="nav-link">
				              <i class="nav-icon fas fa-flag"></i>
				              <p>
				                Pelayanan Umum
				                <i class="right fas fa-angle-left"></i>
				              </p>
				            </a>
				            <ul class="nav nav-treeview">
				              <li class="nav-item">
				                <a href="?page=ket-domisili" class="nav-link">
				                  <i class="far fa-circle nav-icon"></i>
				                  <p>Keterangan Domisili</p>
				                </a>
				              </li>
				              <li class="nav-item">
				                <a href="?page=ket-sktm" class="nav-link">
				                  <i class="far fa-circle nav-icon"></i>
				                  <p>SKTM</p>
				                </a>
				              </li>
				              <li class="nav-item">
				                <a href="?page=sku-agunan" class="nav-link">
				                  <i class="far fa-circle nav-icon"></i>
				                  <p>SKU/Agunan</p>
				                </a>
				              </li>
				              <li class="nav-item">
				                <a href="?page=ket-skck" class="nav-link">
				                  <i class="far fa-circle nav-icon"></i>
				                  <p>SKCK</p>
				                </a>
				              </li>
				              <li class="nav-item">
				                <a href="?page=ket-bedaidentitas" class="nav-link">
				                  <i class="far fa-circle nav-icon"></i>
				                  <p>Perbedaan Identitas</p>
				                </a>
				              </li>
				              <li class="nav-item">
				                <a href="?page=ket-kehilangan" class="nav-link">
				                  <i class="far fa-circle nav-icon"></i>
				                  <p>Kehilangan</p>
				                </a>
				              </li>
				              <li class="nav-item">
				                <a href="#" class="nav-link">
				                  <i class="far fa-file nav-icon"></i>
				                  <p>Keterangan Umum
				                  <i class="right fas fa-angle-left"></i></p>
				                </a>
				                	<ul class="nav nav-treeview">
				              <li class="nav-item">
				                <a href="?page=ket-umum" class="nav-link">
				                  <i class="far fa- nav-icon"></i>
				                  <p>Umum</p>
				                </a>
				              </li>
				          	<li class="nav-item">
				                <a href="?page=ket-tkmr" class="nav-link">
				                  <i class="far fa- nav-icon"></i>
				                  <p>TKMR</p>
				                </a>
				              </li>
				              <li class="nav-item">
				                <a href="?page=ket-bbm" class="nav-link">
				                  <i class="far fa- nav-icon"></i>
				                  <p>BBM</p>
				                </a>
				              </li>
				            </ul>
          					</li>
				              </li>
				            </ul>
          					</li>

						<li class="nav-item has-treeview">
				            <a href="#" class="nav-link">
				              <i class="nav-icon fas fa-flag"></i>
				              <p>
				                Kependudukan
				                <i class="right fas fa-angle-left"></i>
				              </p>
				            </a>
				            <ul class="nav nav-treeview">
				              <li class="nav-item">
				                <a href="pages/charts/chartjs.html" class="nav-link">
				                  <i class="far fa-circle nav-icon"></i>
				                  <p>KTP</p>
				                </a>
				              </li>
				              <li class="nav-item">
				                <a href="pages/charts/flot.html" class="nav-link">
				                  <i class="far fa-circle nav-icon"></i>
				                  <p>KK</p>
				                </a>
				              </li>
				              <li class="nav-item">
				                <a href="pages/charts/inline.html" class="nav-link">
				                  <i class="far fa-circle nav-icon"></i>
				                  <p>Pindah Keluar</p>
				                </a>
				              </li>
				              <li class="nav-item">
				                <a href="pages/charts/inline.html" class="nav-link">
				                  <i class="far fa-circle nav-icon"></i>
				                  <p>Kelahiran</p>
				                </a>
				              </li>
				              <li class="nav-item">
				                <a href="pages/charts/inline.html" class="nav-link">
				                  <i class="far fa-circle nav-icon"></i>
				                  <p>Kematian</p>
				                </a>
				              </li>
				            </ul>
          					</li>
          					<li class="nav-item">
							<a href="?page=data-coba" class="nav-link" target="_blank">
								<i class="nav-icon far fa fa-flag"></i>
								<p>
									Nikah
								</p>
							</a>
						</li>

						<li class="nav-header">Setting</li>
						<li class="nav-item">
							<a href="?page=data-profil" class="nav-link">
								<i class="nav-icon far fa fa-bars"></i>
								<p>
									Profil Desa
								</p>
							</a>
						</li>

						<li class="nav-item">
							<a href="?page=kode-surat" class="nav-link">
								<i class="nav-icon far fa fa-book"></i>
								<p>
									Kode Surat
								</p>
							</a>
						</li>
						<li class="nav-item">
							<a href="?page=data-pejabat" class="nav-link">
								<i class="nav-icon far fa fa-user"></i>
								<p>
									Pejabat Desa
								</p>
							</a>
						</li>

						<li class="nav-item">
							<a href="?page=data-pengguna" class="nav-link">
								<i class="nav-icon far fa-user"></i>
								<p>
									Pengguna Sistem
								</p>
							</a>
						</li>

						<?php
          				} elseif($data_level=="Sekretaris"){
          				?>

						<li class="nav-item">
							<a href="index.php" class="nav-link">
								<i class="nav-icon fas fa-tachometer-alt"></i>
								<p>
									Dashboard
								</p>
							</a>
						</li>


						<li class="nav-item">
							<a href="?page=data-surat" class="nav-link">
								<i class="nav-icon far fa fa-book"></i>
								<p>
									Surat Pelayanan Umum
								</p>
							</a>
						</li>
						<li class="nav-item">
							<a href="?page=data-pindah" class="nav-link">
								<i class="nav-icon far fa fa-book"></i>
								<p>
									Surat Kependudukan
								</p>
							</a>
						</li>
						
						<li class="nav-item has-treeview">
				            <a href="#" class="nav-link">
				              <i class="nav-icon fas fa-copy"></i>
				              <p>
				                Pelayanan Umum
				                <i class="right fas fa-angle-left"></i>
				              </p>
				            </a>
				            <ul class="nav nav-treeview">
				              <li class="nav-item">
				                <a href="?page=ket-domisili" class="nav-link">
				                  <i class="far fa- nav-icon"></i>
				                  <p>- Keterangan Domisili</p>
				                </a>
				              </li>
				              <li class="nav-item">
				                <a href="?page=ket-sktm" class="nav-link">
				                  <i class="far fa- nav-icon"></i>
				                  <p>- SKTM</p>
				                </a>
				              </li>
				              <li class="nav-item">
				                <a href="?page=sku-agunan" class="nav-link">
				                  <i class="far fa- nav-icon"></i>
				                  <p>- SKU/Agunan</p>
				                </a>
				              </li>
				              <li class="nav-item">
				                <a href="?page=ket-skck" class="nav-link">
				                  <i class="far fa- nav-icon"></i>
				                  <p>- SKCK</p>
				                </a>
				              </li>
				              <li class="nav-item">
				                <a href="?page=ket-bedaidentitas" class="nav-link">
				                  <i class="far fa- nav-icon"></i>
				                  <p>- Perbedaan Identitas</p>
				                </a>
				              </li>
				              <li class="nav-item">
				                <a href="?page=ket-kehilangan" class="nav-link">
				                  <i class="far fa- nav-icon"></i>
				                  <p>- Kehilangan</p>
				                </a>
				              </li>
				              <li class="nav-item">
				                <a href="#" class="nav-link">
				                  <i class="far fa-file nav-icon"></i>
				                  <p>Keterangan Umum
				                  <i class="right fas fa-angle-left"></i></p>
				                </a>
				                	<ul class="nav nav-treeview">
				              <li class="nav-item">
				                <a href="?page=ket-umum" class="nav-link">
				                  <i class="far fa- nav-icon"></i>
				                  <p>- Umum</p>
				                </a>
				              </li>
				          	<li class="nav-item">
				                <a href="?page=ket-tkmr" class="nav-link">
				                  <i class="far fa- nav-icon"></i>
				                  <p>- TKMR</p>
				                </a>
				              </li>
				              <li class="nav-item">
				                <a href="?page=ket-bbm" class="nav-link">
				                  <i class="far fa- nav-icon"></i>
				                  <p>- BBM</p>
				                </a>
				              </li>
				            </ul>
          					</li>
				              </li>
				            </ul>
          					</li>

						<li class="nav-item has-treeview">
				            <a href="#" class="nav-link">
				              <i class="nav-icon fas fa-copy"></i>
				              <p>
				                Kependudukan
				                <i class="right fas fa-angle-left"></i>
				              </p>
				            </a>
				            <ul class="nav nav-treeview">
				              <li class="nav-item">
				                <a href="pages/charts/chartjs.html" class="nav-link">
				                  <i class="far fa- nav-icon"></i>
				                  <p>- KTP</p>
				                </a>
				              </li>
				              <li class="nav-item">
				                <a href="pages/charts/flot.html" class="nav-link">
				                  <i class="far fa- nav-icon"></i>
				                  <p>- KK</p>
				                </a>
				              </li>
				              <li class="nav-item">
				                <a href="?page=ket-pindah" class="nav-link">
				                  <i class="far fa- nav-icon"></i>
				                  <p>- Pindah Keluar</p>
				                </a>
				              </li>
				              <li class="nav-item">
				                <a href="pages/charts/inline.html" class="nav-link">
				                  <i class="far fa- nav-icon"></i>
				                  <p>- Kelahiran</p>
				                </a>
				              </li>
				              <li class="nav-item">
				                <a href="pages/charts/inline.html" class="nav-link">
				                  <i class="far fa- nav-icon"></i>
				                  <p>- Kematian</p>
				                </a>
				              </li>
				            </ul>
          					</li>
          					<li class="nav-item">
							<a href="?page=data-coba" class="nav-link" target="_blank">
								<i class="nav-icon far fa fa-copy"></i>
								<p>
									Nikah
								</p>
							</a>
						</li>

						<?php
							}
						?>

						<li class="nav-item">
							<a onclick="return confirm('Apakah anda yakin akan keluar ?')" href="logout.php" class="nav-link">
								<i class="nav-icon far fa-circle text-danger"></i>
								<p>
									Logout
								</p>
							</a>
						</li>

				</nav>
				<!-- /.sidebar-menu -->
			</div>
			<!-- /.sidebar -->
		</aside>

		<!-- Content Wrapper. Contains page content -->
		<div class="content-wrapper">
			<!-- Content Header (Page header) -->
			<section class="content-header">
			</section>

			<!-- Main content -->
			<section class="content">
				<!-- /. WEB DINAMIS DISINI ############################################################################### -->
				<div class="container-fluid">

					<?php 
      if(isset($_GET['page'])){
          $hal = $_GET['page'];
  
          switch ($hal) {
              //Klik Halaman Home Pengguna
              	case 'admin':
                  include "home/admin.php";
                  break;
				case 'sekretaris':
                  include "home/sekretaris.php";
				  break;

				//Pengguna
				case 'data-pengguna':
					include "admin/pengguna/data_pengguna.php";
					break;
				case 'add-pengguna':
					include "admin/pengguna/add_pengguna.php";
					break;
				case 'edit-pengguna':
					include "admin/pengguna/edit_pengguna.php";
					break;
				case 'del-pengguna':
					include "admin/pengguna/del_pengguna.php";
					break;

				//surat
				case 'data-surat':
					include "admin/surat/data_surat.php";
					break;
				case 'del-surat':
					include "admin/surat/del_surat.php";
					break;
				case 'kode-surat':
					include "admin/surat/kode_surat.php";
					break;

				//pelayanan umum
				case 'ket-umum':
					include "admin/surat/pel_umum/input_ket_umum.php";
					break;
				case 'ket-domisili':
					include "admin/surat/pel_umum/domisili.php";
					break;
				case 'sku-agunan':
					include "admin/surat/pel_umum/sku-agunan.php";
					break;
				case 'ket-kehilangan':
					include "admin/surat/pel_umum/kehilangan.php";
					break;
				case 'ket-sktm':
					include "admin/surat/pel_umum/sktm.php";
					break;
				case 'ket-bedaidentitas':
					include "admin/surat/pel_umum/bedaidentitas.php";
					break;
				case 'ket-skck':
					include "admin/surat/pel_umum/skck.php";
					break;
				case 'ket-tkmr':
					include "admin/surat/pel_umum/tkmr.php";
					break;
				case 'ket-bbm':
					include "admin/surat/pel_umum/bbm.php";
					break;
					
				//Kependudukan
				case 'data-pindah':
					include "admin/surat/kependudukan/data_surat.php";
					break;
				case 'ket-pindah':
					include "admin/surat/kependudukan/pindah.php";
					break;
				case 'ket-domisili':
					include "admin/surat/kependudukan/ktp.php";
					break;
				case 'sku-agunan':
					include "admin/surat/kependudukan/kelahiran.php";
					break;
				case 'ket-kehilangan':
					include "admin/surat/kependudukan/Kematian.php";
					break;
				case 'ket-sktm':
					include "admin/surat/kependudukan/kk.php";
					break;

				//Data Belum Ada
				case 'ket-umum-blm':
					include "admin/surat/pel_umum/input_ket_umum_blm.php";
					break;
				case 'ket-domisili-blm':
					include "admin/surat/pel_umum/domisili_blm.php";
					break;
				case 'ket-sktm-blm':
					include "admin/surat/pel_umum/sktm_blm.php";
					break;
				case 'ket-sku-blm':
					include "admin/surat/pel_umum/sku-agunan-blm.php";
					break;
				case 'ket-skck-blm':
					include "admin/surat/pel_umum/skck_blm.php";
					break;
				case 'ket-bedaidentitas-blm':
					include "admin/surat/pel_umum/bedaidentitas_blm.php";
					break;
				case 'ket-kehilangan-blm':
					include "admin/surat/pel_umum/kehilangan_blm.php";
					break;
				case 'ket-tkmr-blm':
					include "admin/surat/pel_umum/tkmr_blm.php";
					break;
				case 'ket-bbm-blm':
					include "admin/surat/pel_umum/bbm_blm.php";
					break;
			
				//Profil
				case 'data-profil':
					include "admin/profil/data_profil.php";
					break;
				case 'edit-profil':
					include "admin/profil/edit_profil.php";
					break;
				case 'data-pejabat':
					include "admin/profil/data_pejabat.php";
					break;
				case 'edit-pejabat':
					include "admin/profil/edit_pejabat.php";
					break;

			
              //default
              default:
                  echo "<center><h1> ERROR !</h1></center>";
                  break;    
          }
      }else{
        // Auto Halaman Home Pengguna
          if($data_level=="Administrator"){
              include "home/admin.php";
              }
          elseif($data_level=="Sekretaris"){
              include "home/sekretaris.php";
              }
          }
    ?>

				</div>
			</section>
			<!-- /.content -->
		</div>
		<!-- /.content-wrapper -->

		<footer class="main-footer">
			<div class="float-right d-none d-sm-block">
				Copyright &copy;
				<a target="_blank" href="#">
					<strong> YRMedia</strong>
				</a>
				All rights reserved.
			</div>
			<b>Created 2021</b>
		</footer>

		<!-- Control Sidebar -->
		<aside class="control-sidebar control-sidebar-dark">
			<!-- Control sidebar content goes here -->
		</aside>
		<!-- /.control-sidebar -->
	</div>
	<!-- ./wrapper -->

	<!-- jQuery -->
	<script src="plugins/jquery/jquery.min.js"></script>
	<!-- Bootstrap 4 -->
	<script src="plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
	<!-- Select2 -->
	<script src="plugins/select2/js/select2.full.min.js"></script>
	<!-- DataTables -->
	<script src="plugins/datatables/jquery.dataTables.js"></script>
	<script src="plugins/datatables-bs4/js/dataTables.bootstrap4.js"></script>
	<!-- AdminLTE App -->
	<script src="dist/js/adminlte.min.js"></script>
	<!-- AdminLTE for demo purposes -->
	<script src="dist/js/demo.js"></script>
	<!-- page script -->
	<script src="plugins/jquery-datatable/extensions/export/dataTables.buttons.min.js"></script>
	<script src="plugins/jquery-datatable/extensions/export/buttons.flash.min.js"></script>
	<script src="plugins/jquery-datatable/extensions/export/jszip.min.js"></script>
	<script src="plugins/jquery-datatable/extensions/export/pdfmake.min.js"></script>
	<script src="plugins/jquery-datatable/extensions/export/vfs_fonts.js"></script>
	<script src="plugins/jquery-datatable/extensions/export/buttons.html5.min.js"></script>
	<script src="plugins/jquery-datatable/extensions/export/buttons.print.min.js"></script>

	<script>
		$(function() {
			$("#example1").DataTable();
			$('#example2').DataTable({
				"paging": true,
				"lengthChange": false,
				"searching": false,
				"ordering": true,
				"info": true,
				"autoWidth": false,
			});
		});
	</script>

	<script>
		$(function() {
			//Initialize Select2 Elements
			$('.select2').select2()

			//Initialize Select2 Elements
			$('.select2bs4').select2({
				theme: 'bootstrap4'
			})
		})
	</script>

</body>

</html>