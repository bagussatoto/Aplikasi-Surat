<?php
        $sql_cek = "SELECT * FROM tb_kodesurat";
        $query_cek = mysqli_query($koneksi, $sql_cek);
        $data_cek = mysqli_fetch_array($query_cek,MYSQLI_BOTH);
?>

<div class="card card-success">
	<div class="card-header">
		<h3 class="card-title">
			<i class="fa fa-edit"></i>Kode Surat</h3>
	</div>
	<form action="" method="post" enctype="multipart/form-data">
		<div class="card-body">
			<div class="form-group row">
			<input type='hidden' class="form-control" name="kode1" value="<?php echo $data_cek['kode']; ?>"
			 readonly/>
				<label class="col-sm-2 col-form-label">Hutang/Kridit</label>
				<div class="col-sm-1">
					<input type="text" class="form-control" id="a" name="a" value="<?php echo $data_cek['1']; ?>"
					/>
				</div>
			</div>
			<div class="form-group row">
				<label class="col-sm-2 col-form-label">Data Diri Nasabah</label>
				<div class="col-sm-1">
					<input type="text" class="form-control" id="b" name="b" value="<?php echo $data_cek['2']; ?>"
					/>
				</div>
			</div>
			<div class="form-group row">
				<label class="col-sm-2 col-form-label">RCK</label>
				<div class="col-sm-1">
					<input type="text" class="form-control" id="c" name="c" value="<?php echo $data_cek['3']; ?>"
					/>
				</div>
			</div>
			<div class="form-group row">
				<label class="col-sm-2 col-form-label">Ket Pengadilan</label>
				<div class="col-sm-1">
					<input type="text" class="form-control" id="d" name="d" value="<?php echo $data_cek['4']; ?>"
					/>
				</div>
			</div>
			<div class="form-group row">
				<label class="col-sm-2 col-form-label">Ket Tidak Mampu</label>
				<div class="col-sm-1">
					<input type="text" class="form-control" id="e" name="e" value="<?php echo $data_cek['5']; ?>"
					/>
				</div>
			</div>
			<div class="form-group row">
				<label class="col-sm-2 col-form-label">TKMR/Tebang Kayu</label>
				<div class="col-sm-1">
					<input type="text" class="form-control" id="f" name="f" value="<?php echo $data_cek['6']; ?>"
					/>
				</div>
			</div>
			<div class="form-group row">
				<label class="col-sm-2 col-form-label">BBM</label>
				<div class="col-sm-1">
					<input type="text" class="form-control" id="g" name="g" value="<?php echo $data_cek['7']; ?>"
					/>
				</div>
			</div>
			<div class="form-group row">
				<label class="col-sm-2 col-form-label">Kehilangan</label>
				<div class="col-sm-1">
					<input type="text" class="form-control" id="h" name="h" value="<?php echo $data_cek['8']; ?>"
					/>
				</div>
			</div>
			<div class="form-group row">
				<label class="col-sm-2 col-form-label">Ijin Keramaian/Hiburan</label>
				<div class="col-sm-1">
					<input type="text" class="form-control" id="i" name="i" value="<?php echo $data_cek['9']; ?>"
					/>
				</div>
			</div>

		</div>
		<div class="card-footer">
			<input type="submit" name="Ubah" value="Simpan" class="btn btn-success">
			<a href="index.php" title="Kembali" class="btn btn-secondary">Kembali</a>
		</div>
	</form>
</div>



<?php

    if (isset ($_POST['Ubah'])){
    $sql_ubah = "UPDATE tb_kodesurat SET 
    n1='".$_POST['a']."', 
    n2='".$_POST['b']."',
    n3='".$_POST['c']."',
    n4='".$_POST['d']."',
    n5='".$_POST['e']."',
    n6='".$_POST['f']."',
    n7='".$_POST['g']."',
    n8='".$_POST['h']."', 
    n9='".$_POST['i']."'
    WHERE kode='".$_POST['kode1']."'";
    $query_ubah = mysqli_query($koneksi, $sql_ubah);
    mysqli_close($koneksi);

    if ($query_ubah) {
        echo "<script>
      Swal.fire({title: 'Ubah Data Berhasil',text: '',icon: 'success',confirmButtonText: 'OK'
      }).then((result) => {if (result.value)
        {window.location = 'index.php?page=kode-surat';
        }
      })</script>";
      }else{
      echo "<script>
      Swal.fire({title: 'Ubah Data Gagal',text: '',icon: 'error',confirmButtonText: 'OK'
      }).then((result) => {if (result.value)
        {window.location = 'index.php?page=kode-surat';
        }
      })</script>";
    }}
