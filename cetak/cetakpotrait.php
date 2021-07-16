<?php
@session_start();
include "../../+koneksi.php";
include "fpdf.php";

$tgl = date('d-M-Y');
$pdf = new FPDF('P','mm','A4');
$pdf->SetMargins(15,20,15);
$pdf->AddPage();

$pdf->Image('../../style/assets/img/logo2.png',15,18,16);
$pdf->SetTitle("Cetak Data");
$pdf->SetFont('Arial','B',18);
$pdf->Cell(0,5,'INABA NETWORK','0','1','C',false);
$pdf->SetFont('Arial','i',8);
$pdf->Cell(0,5,'Alamat : Desa Bermi Kecamatan Gembong Kabupaten Pati','0','1','C',false);
$pdf->Cell(0,2,'Telp : 085221996996 - Email : inabanetwork@gmail.com','0','1','C',false);
$pdf->Ln(3);
$pdf->Cell(265,0.6,'','0','1','C',true);
$pdf->Ln(5);

if(@$_GET['data'] == "karyawan") {
	$pdf->SetFont('Arial','B',11);
	$pdf->Cell(50,5,'Laporan Data Karyawan','0','1','L',false);
	$pdf->Ln(3);

	$pdf->SetFont('Arial','B',8);
	$pdf->Cell(10,6,'No.',1,0,'C');
	$pdf->Cell(25,6,'ID',1,0,'C');
	$pdf->Cell(40,6,'Nama Lengkap',1,0,'C');
	$pdf->Cell(40,6,'TTL',1,0,'C');
	$pdf->Cell(23,6,'Jenis Kelamin',1,0,'C');
	$pdf->Cell(20,6,'No HP',1,0,'C');
	$pdf->Cell(33,6,'Jobdesk',1,0,'C');
	$pdf->Cell(52,6,'Alamat',1,0,'C');
	$pdf->Cell(22,6,'Status',1,0,'C');
	$pdf->Ln(2);
	$no = 1;
	$sql = mysqli_query($db, "SELECT * FROM karyawan ORDER BY id_karyawan ASC") or die ($db->error);
	while($data = mysqli_fetch_array($sql)) {
		if($data['jenis_kelamin'] == 'L') { $jk = "Laki-laki"; } else { $jk = "Perempuan"; }
		$pdf->Ln(4);
		$pdf->SetFont('Arial','',8);
		$pdf->Cell(10,4,$no++.".",1,0,'C');
		$pdf->Cell(25,4,$data['id_karyawan'],1,0,'L');
		$pdf->Cell(40,4,$data['nama'],1,0,'L');
		$pdf->Cell(40,4,$data['tempat_lahir'].", ".tgl_indo($data['tgl_lahir']),1,0,'L');
		$pdf->Cell(23,4,$jk,1,0,'C');
		$pdf->Cell(20,4,$data['no_hp'],1,0,'C');
		$pdf->Cell(33,4,$data['jobdesk'],1,0,'L');
		$pdf->Cell(52,4,$data['alamat'],1,0,'L');
		$pdf->Cell(22,4,ucfirst($data['status']),1,0,'C');
	}
} else if(@$_GET['data'] == "pelanggan") {
	$pdf->SetFont('Arial','B',11);
	$pdf->Cell(50,5,'Laporan Data Pelanggan','0','1','L',false);
	$pdf->Ln(3);

	$pdf->SetFont('Arial','B',7);
	$pdf->Cell(7,6,'No.',1,0,'C');
	$pdf->Cell(14,6,'ID Daftar',1,0,'C');
	$pdf->Cell(15,6,'Tanggal',1,0,'C');
	$pdf->Cell(35,6,'Nama',1,0,'C');
	$pdf->Cell(35,6,'Alamat',1,0,'C');
	$pdf->Cell(40,6,'Email',1,0,'C');
	$pdf->Cell(25,6,'No HP',1,0,'C');
	$pdf->Cell(30,6,'Kode Paket',1,0,'C');
	$pdf->Cell(14,6,'Harga',1,0,'C');
	$pdf->Cell(20,6,'Username',1,0,'C');
	$pdf->Cell(19,6,'Password',1,0,'C');
	$pdf->Cell(12,6,'Status',1,0,'C');
	$pdf->Ln(2);
	$no = 1;
	$sql = mysqli_query($db, "SELECT * FROM pelanggan ORDER BY id_pel ASC") or die ($db->error);
	while($data = mysqli_fetch_array($sql)) {
		$pdf->Ln(4);
		$pdf->SetFont('Arial','',7);
		$pdf->Cell(7,4,$no++.".",1,0,'C');
		$pdf->Cell(14,4,$data['id_pel'],1,0,'L');
		$pdf->Cell(15,4,$data['tgl'],1,0,'L');
		$pdf->Cell(35,4,$data['nama'],1,0,'L');
		$pdf->Cell(35,4,$data['alamat'],1,0,'L');
		$pdf->Cell(40,4,$data['email'],1,0,'L');
		$pdf->Cell(25,4,$data['no_hp'],1,0,'L');
		$pdf->Cell(30,4,$data['id_paket'],1,0,'L');
		$pdf->Cell(14,4,$data['harga'],1,0,'R');
		$pdf->Cell(20,4,$data['username'],1,0,'L');
		$pdf->Cell(19,4,$data['password'],1,0,'L');
		$pdf->Cell(12,4,$data['status'],1,0,'L');
	}
} else if(@$_GET['data'] == "pendaftaran") {
	$pdf->SetFont('Arial','B',11);
	$pdf->Cell(50,5,'Laporan Data Pendaftaran Pelanggan','0','1','L',false);
	$pdf->Ln(3);

	$pdf->SetFont('Arial','B',7);
	$pdf->Cell(7,6,'No.',1,0,'C');
	$pdf->Cell(19,6,'No Daftar',1,0,'C');
	$pdf->Cell(28,6,'Tanggal',1,0,'C');
	$pdf->Cell(36,6,'Nama',1,0,'C');
	$pdf->Cell(40,6,'Alamat',1,0,'C');
	$pdf->Cell(20,6,'No HP',1,0,'C');
	$pdf->Cell(25,6,'Jenis Antena',1,0,'C');
	$pdf->Cell(20,6,'Harga',1,0,'C');
	$pdf->Cell(19,6,'Biaya',1,0,'C');
	$pdf->Cell(30,6,'Paket',1,0,'C');
	$pdf->Cell(20,6,'Total',1,0,'C');
	$pdf->Ln(2);
	$no = 1;
	$sql = mysqli_query($db, "SELECT pendaftaran.id_daftar, pendaftaran.tgl, pendaftaran.nama, pendaftaran.alamat, pendaftaran.no_hp, pendaftaran.biaya_pasang, pendaftaran.total_harga, antena.jenis, antena.harga, paket.namapaket FROM pendaftaran JOIN antena ON pendaftaran.id_antena = antena.id_antena JOIN paket ON pendaftaran.id_paket = paket.id_paket ORDER BY id_daftar ASC") or die ($db->error);
	while($data = mysqli_fetch_array($sql)) {
		$pdf->Ln(4);
		$pdf->SetFont('Arial','',7);
		$pdf->Cell(7,4,$no++.".",1,0,'C');
		$pdf->Cell(19,4,$data['id_daftar'],1,0,'L');
		$pdf->Cell(28,4,$data['tgl'],1,0,'L');
		$pdf->Cell(36,4,$data['nama'],1,0,'L');
		$pdf->Cell(40,4,$data['alamat'],1,0,'L');
		$pdf->Cell(20,4,$data['no_hp'],1,0,'L');
		$pdf->Cell(25,4,$data['jenis'],1,0,'L');
		$pdf->Cell(20,4,$data['harga'],1,0,'L');
		$pdf->Cell(19,4,$data['biaya_pasang'],1,0,'L');
		$pdf->Cell(30,4,$data['namapaket'],1,0,'L');
		$pdf->Cell(20,4,$data['total_harga'],1,0,'L');
	}
} else if(@$_GET['data'] == "cetaklaporan") {
	$pdf->SetFont('Arial','B',11);
	$pdf->Cell(50,5,'Laporan Keuangan','0','1','L',false);
	$pdf->Ln(3);

	$pdf->SetFont('Arial','B',8);
	$pdf->Cell(10,6,'No.',1,0,'C');
	$pdf->Cell(40,6,'Tanggal',1,0,'C');
	$pdf->Cell(60,6,'Pemasukan',1,0,'C');
	$pdf->Cell(60,6,'Pengeluaran',1,0,'C');
	$pdf->Cell(60,6,'Keuntungan',1,0,'C');
	$pdf->Ln(2);
	$no = 1;
	$sql = mysqli_query($db, "SELECT tgl, jml_bayarpel as pemasukan,bayar_isp+bayar_listrik+jml_gaji as pengeluaran, jml_bayarpel-(bayar_isp+bayar_listrik+jml_gaji) as keuntungan FROM pembayaran;") or die ($db->error);
	while($data = mysqli_fetch_array($sql)) {
		$pdf->Ln(4);
		$pdf->SetFont('Arial','',8);
		$pdf->Cell(10,4,$no++.".",1,0,'C');
		$pdf->Cell(40,4,$data['tgl'],1,0,'C');
		$pdf->Cell(60,4,$data['pemasukan'],1,0,'L');
		$pdf->Cell(60,4,$data['pengeluaran'],1,0,'L');
		$pdf->Cell(60,4,$data['keuntungan'],1,0,'L');
	}
} else if(@$_GET['data'] == "keuntungan") {
	$pdf->SetFont('Arial','B',11);
	$pdf->Cell(50,5,'Laporan Data Keuntungan','0','1','L',false);
	$pdf->Ln(3);

	$pdf->SetFont('Arial','B',7);
	$pdf->Cell(7,6,'No.',1,0,'C');
	$pdf->Cell(20,6,'Tanggal',1,0,'C');
	$pdf->Cell(28,6,'Bayar ISP',1,0,'C');
	$pdf->Cell(36,6,'Bayar Listrik',1,0,'C');
	$pdf->Cell(40,6,'Jumlah Gaji Karyawan',1,0,'C');
	$pdf->Cell(35,6,'Jumlah Keuntungan',1,0,'C');
	$pdf->Ln(2);
	$no = 1;
	$sql = mysqli_query($db, "SELECT tgl, bayar_isp,bayar_listrik,jml_gaji, jml_bayarpel-(bayar_isp+bayar_listrik+jml_gaji) as untung from pembayaran") or die ($db->error);
	while($data = mysqli_fetch_array($sql)) {
		$pdf->Ln(4);
		$pdf->SetFont('Arial','',7);
		$pdf->Cell(7,4,$no++.".",1,0,'C');
		$pdf->Cell(20,4,$data['tgl'],1,0,'L');
		$pdf->Cell(28,4,$data['bayar_isp'],1,0,'L');
		$pdf->Cell(36,4,$data['bayar_listrik'],1,0,'L');
		$pdf->Cell(40,4,$data['jml_gaji'],1,0,'L');
		$pdf->Cell(35,4,$data['untung'],1,0,'L');
	}
}else if(@$_GET['data'] == "gaji") {
	$pdf->SetFont('Arial','B',11);
	$pdf->Cell(50,5,'Laporan Gaji Karyawan','0','1','L',false);
	$pdf->Ln(3);

	$pdf->SetFont('Arial','B',7);
	$pdf->Cell(7,6,'No.',1,0,'C');
	$pdf->Cell(20,6,'ID Karyawan',1,0,'C');
	$pdf->Cell(20,6,'Tanggal',1,0,'C');
	$pdf->Cell(28,6,'Nama Karyawan',1,0,'C');
	$pdf->Cell(36,6,'Gaji',1,0,'C');
	$pdf->Ln(2);
	$no = 1;
	$sql = mysqli_query($db, "SELECT gaji.tgl, gaji.gaji, karyawan.id_karyawan, karyawan.nama FROM gaji JOIN karyawan ON gaji.id_karyawan=karyawan.id_karyawan") or die ($db->error);
	while($data = mysqli_fetch_array($sql)) {
		$pdf->Ln(4);
		$pdf->SetFont('Arial','',7);
		$pdf->Cell(7,4,$no++.".",1,0,'C');
		$pdf->Cell(20,4,$data['id_karyawan'],1,0,'L');
		$pdf->Cell(20,4,$data['tgl'],1,0,'L');
		$pdf->Cell(28,4,$data['nama'],1,0,'L');
		$pdf->Cell(36,4,$data['gaji'],1,0,'L');
	}
}else if(@$_GET['data'] == "gajiper") {
	$pdf->SetFont('Arial','B',11);
	$pdf->Cell(50,5,'Laporan Gaji Karyawan','0','1','L',false);
	$pdf->Ln(3);

	$pdf->SetFont('Arial','B',7);
	$pdf->Cell(7,6,'No.',1,0,'C');
	$pdf->Cell(20,6,'ID Karyawan',1,0,'C');
	$pdf->Cell(20,6,'Tanggal',1,0,'C');
	$pdf->Cell(28,6,'Nama Karyawan',1,0,'C');
	$pdf->Cell(36,6,'Gaji',1,0,'C');
	$pdf->Ln(2);
	if (isset($_GET['cetak'])){
	$no = 1;
	$sql = mysqli_query($db, "SELECT gaji.tgl, gaji.gaji, karyawan.id_karyawan, karyawan.nama FROM gaji JOIN karyawan ON gaji.id_karyawan=karyawan.id_karyawan WHERE karyawan.nama='".$_GET['kar']."'") or die ($db->error);
	while($data = mysqli_fetch_array($sql)) {
		$pdf->Ln(4);
		$pdf->SetFont('Arial','',7);
		$pdf->Cell(7,4,$no++.".",1,0,'C');
		$pdf->Cell(20,4,$data['id_karyawan'],1,0,'L');
		$pdf->Cell(20,4,$data['tgl'],1,0,'L');
		$pdf->Cell(28,4,$data['nama'],1,0,'L');
		$pdf->Cell(36,4,$data['gaji'],1,0,'L');
	}
	}
}else if(@$_GET['data'] == "berita") {
	$pdf->SetFont('Arial','B',11);
	$pdf->Cell(50,5,'Laporan Berita','0','1','L',false);
	$pdf->Ln(3);

	$pdf->SetFont('Arial','B',8);
	$pdf->Cell(10,6,'No.',1,0,'C');
	$pdf->Cell(78,6,'Judul',1,0,'C');
	$pdf->Cell(108,6,'Isi',1,0,'C');
	$pdf->Cell(27,6,'Tanggal Posting',1,0,'L');
	$pdf->Cell(27,6,'Penerbit',1,0,'C');
	$pdf->Cell(15,6,'Status',1,0,'C');
	$pdf->Ln(2);
	$no = 1;
	if(@$_SESSION['hak_akses'] = 'admin') {
        $sql_berita = mysqli_query($db, "SELECT * FROM tb_berita") or die($db->error);
    } else if(@$_SESSION['keuangan']) {
    	$sql_berita = mysqli_query($db, "SELECT * FROM tb_berita WHERE penerbit = 'keuangan'") or die($db->error);
    }
	while($data = mysqli_fetch_array($sql_berita)) {
		$pdf->Ln(4);
		$pdf->SetFont('Arial','',8);
		$pdf->Cell(10,4,$no++.".",1,0,'C');
		$pdf->Cell(78,4,$data['judul'],1,0,'L');
		$pdf->Cell(108,4,substr($data['isi'], 0, 70)." ...",1,0,'L');
		$pdf->Cell(27,4,tgl_indo($data['tgl_posting']),1,0,'C');
		if($data['penerbit'] == 'admin') {
			$pdf->Cell(27,4,'Admin',1,0,'L');
		} else {
			$sql_pengajar = mysqli_query($db, "SELECT * FROM pengguna WHERE hak_akses = 'penerbit'") or die($db->error);
			$data_pengajar = mysqli_fetch_array($sql_pengajar);
			$pdf->Cell(27,4,$data_pengajar['username'],1,0,'L');
		}
		$pdf->Cell(15,4,ucfirst($data['status']),1,0,'C'); 
	}
}
# untuk menuliskan nama bulan dengan format Indonesia
$bln_list = array(
  '01' => 'Januari',
  '02' => 'Februari',
  '03' => 'Maret',
  '04' => 'April',
  '05' => 'Mei',
  '06' => 'Juni',
  '07' => 'Juli',
  '08' => 'Agustus',
  '09' => 'September',
  '10' => 'Oktober',
  '11' => 'November',
  '12' => 'Desember'
  );
# footer
$pdf->Ln(10);
$pdf->SetLeftMargin(236);
$pdf->SetFont('Arial','',10);
$pdf->Cell(0,0,"Gembong, ".tgl_indo(date('Y-m-d')),0,0,'L');
$pdf->Ln(4);
$pdf->Cell(0,1,'Inaba Network','0','1','C',false);
$pdf->Ln(20);
$pdf->Cell(0,2,'ARIFUL HADI, S.Pd','0','1','C',false);

$pdf->Output();
?>