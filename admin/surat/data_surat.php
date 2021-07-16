<?php
	$id = @$_GET['id'];
	$sql_per_id = mysqli_query($koneksi, "SELECT * FROM tb_surat WHERE id_surat = '$id'") or die ($db->error);
	$data = mysqli_fetch_array($sql_per_id); {?>
<div class="card card-info">
	<div class="card-header">
		<h3 class="card-title">
			<i class="fa fa-table"></i> Data Surat</h3>
	</div>
	<!-- /.card-header -->
	<div class="card-body">
		<div class="table-responsive">
			<br>
			<table id="example1" method="get" class="table table-bordered table-striped">
				<thead>
					<tr>
						<th>No</th>
						<th>PETUGAS</th>
						<th>TANGGAL</th>
						<th>NIK</th>
						<th>NAMA</th>
						<th>NO KK</th>
						<th>KEPERLUAN/KETERANGAN</th>
						<th>Aksi</th>
					</tr>
				</thead>
				<tbody>

			<?php
			  
			  $no = 1;
			  $sql = $koneksi->query("SELECT * FROM tb_surat ORDER BY id_surat DESC");
              while ($data= $sql->fetch_assoc()) {
            ?>

					<tr>
						<td><?php echo $no++; ?></td>
						<td><?php echo $data['namapetugas']; ?></td>
						<td><?php echo $data['tgl']; ?></td>
						<td><?php echo $data['nik']; ?></td>
						<td><?php echo $data['nama']; ?></td>
						<td><?php echo $data['no_kk']; ?></td>
						<td><?php echo $data['keperluan']; ?></td>
						<td>
							</a>
							<a href="#" title="Edit" class="btn btn-primary btn-sm"><i class="fa fa-edit"></i></a>
							<a href="./admin/surat/pel_umum/cetakcetak.php?data=<?php echo $data['jenis'];?>&id=<?php echo $data['id_surat'];?>" target="_blank" title="Cetak" class="btn btn-success btn-sm"><i class="fa fa-print"></i></a>
							<a href="?page=del-surat&kode=<?php echo $data['id_surat'];?>&nmr=<?php echo $data['nomor_srt'];?>&jns=<?php echo $data['jenis'];?>" onclick="return confirm('Apakah anda yakin hapus data ini ?')"
							 title="Hapus" class="btn btn-danger btn-sm">
								<i class="fa fa-trash"></i>
						</td>
					</tr>

					<?php
              }}
            ?>
				</tbody>
				</tfoot>
			</table>
		</div>
	</div>
	<!-- /.card-body -->