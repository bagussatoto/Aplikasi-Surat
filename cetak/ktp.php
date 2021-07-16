<?php
# koneksi database
include "inc/koneksi.php";

# include fdpf
include "fpdf.php";

$tgl = date('d-M-Y');
$pdf = new FPDF('P','mm',array(210,297));
$pdf->Open();
$pdf->addPage();
$pdf->setAutoPageBreak(false);

# header
$pdf->setFont('Arial','B',12);
$pdf->image('dist/img/logopati1.png',30,12);
$pdf->SetTitle("Cetak Data");
$pdf->text(75,20,'LEMBAR PERSETUJUAN KOMITE','0','1','C',false);		//80(jarak kiri text), 20 (jarak sepasi bawah)
$pdf->text(72,26,'PEMBIAYAAN MUDHOROBAH (MDA)','0','1','C',false);
$pdf->Ln(20);
$pdf->Cell(188,0.6,'','0','1','C',true);

#TAPIL IDENTITAS
$pdf->setFont('Arial','B',8);
$pdf->text(10,36,'Nama Anggota');		
$pdf->text(10,40,'Alamat');
$pdf->text(10,52,'Tempat dan tanggal lahir');

$pdf->text(75,36,'Tanggal tb_warga');		
$pdf->text(75,40,'Jml Pengajuan');
$pdf->text(75,44,'Status Anggota');
$pdf->text(75,48,'Usia');

$pdf->text(125,36,'Cabang');		
$pdf->text(125,40,'Pembiayaan ke');
$pdf->text(125,44,'Jenis Pembiayaan');
$pdf->text(125,48,'Jenis Pengajuan');
# untuk : ....................................................
$pdf->setFont('Arial','',8);
$pdf->text(45,36,':');		
$pdf->text(45,40,':');
$pdf->text(45,52,':');

$pdf->text(97,36,':');		
$pdf->text(97,40,':');
$pdf->text(97,44,':');
$pdf->text(97,48,':');

$pdf->text(150,36,':');		
$pdf->text(150,40,':');
$pdf->text(150,44,':');
$pdf->text(150,48,':');


$query = "select * from tb_warga WHERE NIK='3318132702990001'";
$sql = mysqli_query($koneksi,$query);
$no = 1;
$row = 6;

while($data = mysqli_fetch_array($sql)){

	$pdf->setFont('arial','',8);
	$pdf->text(47,36,$data['NAMA']);		
	$pdf->text(47,40,$data['NAMA']);
	$pdf->text(47,52,$data['TMPT_LHR']);$pdf->text(56,52,$data['TGL_LHR']);

	$pdf->text(99,36,$data['NAMA']);		
	$pdf->text(99,40,$data['NAMA']);
	$pdf->text(99,44,$data['NAMA']);
	$pdf->text(99,48,'.');

	$pdf->text(152,36,$data['NAMA']);		
	$pdf->text(152,40,$data['NAMA']);
	$pdf->text(152,44,$data['NAMA']);
	$pdf->text(152,48,$data['NAMA']);

}

$pdf->setFont('arial','B',8);
$pdf->text(80,58,'FASILITAS PEMBIAYAAN LAMA');

$yi = 60;
$ya = 60;
$pdf->setFont('Arial','',8);
$pdf->setFillColor(222,222,222);
$pdf->setXY(10,$ya);							//10 -> jarak tabel dari pinggir kertas
$pdf->CELL(10,6,'NO',1,0,'C',1);				//10 -> lebar kolom, C (center), L(left), R(Right)	
$pdf->CELL(30,6,'Plafond',1,0,'C',1);
$pdf->CELL(20,6,'Jk Waktu (bln)',1,0,'C',1);
$pdf->CELL(40,6,'Jenis Angsuran',1,0,'C',1);
$pdf->CELL(35,6,'Tgl Cair',1,0,'C',1);
$pdf->CELL(25,6,'Tgl Lunas',1,0,'C',1);
$pdf->CELL(28,6,'Coll',1,0,'C',1);

# menampilkan data dari database
// $query = "select a.id_anggota,a.nama,a.nik,a.alamat,s.id_simpanan,s.tgl,s.jumlah
//           from anggota a join simpanan s using (id_anggota)";
// $sql = mysqli_query($koneksi,$query);
// $no = 1;
// $row = 6;
// $ya = $yi + $row;
// while($data = mysqli_fetch_array($sql)){
// 	$rupiah = "Rp ".number_format($data['jumlah'],2,',','.');
// 	$pdf->setXY(10,$ya);
// 	$pdf->setFont('arial','',9);
// 	$pdf->setFillColor(255,255,255);
// 	$pdf->cell(10,6,$no,1,0,'C',1);
// 	$pdf->cell(30,6,$data['id_simpanan'],1,0,'L',1);
// 	$pdf->cell(20,6,$data['tgl'],1,0,'L',1);
// 	$pdf->CELL(40,6,$data['nama'],1,0,'L',1);
// 	$pdf->CELL(35,6,$data['nik'],1,0,'L',1);
// 	$pdf->CELL(25,6,$data['alamat'],1,0,'L',1);
// 	$pdf->CELL(28,6,$rupiah,1,0,'R',1);
// 	$ya = $ya+$row;
// 	$no++;
// }

$pdf->setFont('arial','B',8);
$pdf->text(70,70,'KETERANGAN FASILITAS YANG DIBERIKAN');
$pdf->text(10,72,'1. FASILITAS PEMBIAYAAN :');

$pdf->setFont('arial','',8);
$pdf->text(14,76,'1. Tujuan Penggunaan');		
$pdf->text(14,80,'2. Skema Pembiayaan');
$pdf->text(14,84,'3. Pembiayaan');
$pdf->text(14,88,'4. Jenis Angsuran');		
$pdf->text(14,92,'5. Jangka Waktu');
$pdf->text(14,96,'6. Renana Pendapatan');
$pdf->text(14,100,'7. Nisbah');		
$pdf->text(14,104,'8. Angsuran per Bulan');
$pdf->text(14,108,'9. Bagi Hasil Setara');
$pdf->text(100,76,'10. Biaya Administrasi');		
$pdf->text(100,80,'11. Pengikatan');
$pdf->text(105,84,'a. Jaminan');




$pdf->setFont('Arial','',8);
$pdf->text(45,76,':');		
$pdf->text(45,80,':');
$pdf->text(45,84,':  Rp');
$pdf->text(45,88,':');		
$pdf->text(45,92,':');
$pdf->text(45,96,':  Rp');
$pdf->text(45,100,':');
$pdf->text(45,104,':  Rp');
$pdf->text(45,108,':');
$pdf->text(140,76,':  Rp');
$pdf->text(140,84,':');

$query = "select * from tb_warga WHERE NIK='3318132702990001'";
$sql = mysqli_query($koneksi,$query);
$no = 1;
$row = 6;

while($data = mysqli_fetch_array($sql)){

	$pdf->setFont('arial','',8);
	$pdf->text(47,76,$data['NAMA']);		
	$pdf->text(47,80,$data['NAMA']);
	// $pdf->text(52,84,number_format($data['pembiayaan'],2,',','.'));
	// $pdf->text(47,88,$data['NAMA']);		
	// $pdf->text(47,92,$data['jangka_waktu']);$pdf->text(52,92,'bulan (musiman)');
	// $pdf->text(52,96,number_format($data['rencana_dapat'],2,',','.'));
	// $pdf->text(47,100,$data['nisbah']);
	// $pdf->text(52,104,number_format($data['angsuran'],2,',','.'));		
	// $pdf->text(47,108,$data['bagi_hasil']);
	// $pdf->text(148,76,$data['administrasi']);		
	// $pdf->text(143,84,$data['jaminan']);
}

$pdf->setFont('arial','B',8);
$pdf->text(100,88,'ANALISA USAHA');
$pdf->setFont('arial','',8);
$pdf->text(100,92,'1. Sektor Usaha');
$pdf->text(100,96,'2. Bidang Usaha');
$pdf->text(100,100,'3. Volume Usaha / bulan');
$pdf->text(100,104,'4. Keuntungan / bulan');
$pdf->text(100,108,'5. Kemampuan Angsur');

$pdf->text(140,92,':');
$pdf->text(140,96,':');
$pdf->text(140,100,':');
$pdf->text(140,104,':');
$pdf->text(140,108,':');


$query = "select * from tb_warga WHERE NIK='3318132702990001'";
$sql = mysqli_query($koneksi,$query);
$no = 1;
$row = 6;

while($data = mysqli_fetch_array($sql)){

	$pdf->setFont('arial','',8);
	$pdf->text(143,92,$data['NAMA']);		
	// $pdf->text(143,96,$data['bidang']);
	// $pdf->text(143,100,number_format($data['volume'],2,',','.'));
	// $pdf->text(143,104,number_format($data['untung'],2,',','.'));		
	// $pdf->text(143,108,number_format($data['mampu'],2,',','.'));
}


$pdf->setFont('arial','B',8);
$pdf->text(10,114,'2. JAMINAN PEMBIAYAAN :');
$pdf->text(13,118,'Untuk Jenis Jaminan Tanah dan atau Bangunan');
$yi = 120;
$ya = 120;
$pdf->setFont('Arial','',8);
$pdf->setFillColor(222,222,222);
$pdf->setXY(10,$ya);							//10 -> jarak tabel dari pinggir kertas
$pdf->CELL(10,6,'NO',1,0,'C',1);				//10 -> lebar kolom, C (center), L(left), R(Right)	
$pdf->CELL(20,6,'BENTUK',1,0,'C',1);
$pdf->CELL(30,6,'ATAS NAMA',1,0,'C',1);
$pdf->CELL(30,6,'NOMOR SERTIFIKAT',1,0,'C',1);
$pdf->CELL(36,6,'ALAMAT',1,0,'C',1);
$pdf->CELL(15,6,'LT / LB',1,0,'C',1);
$pdf->CELL(20,6,'NILAI PASAR',1,0,'C',1);
$pdf->CELL(27,6,'NILAI LIKUIDASI',1,0,'C',1);

# menampilkan data dari database
$query = "select * from tb_warga WHERE NIK='3318132702990001'";
$sql = mysqli_query($koneksi,$query);
$no = 1;
$row = 6;
$ya = $yi + $row;
while($data = mysqli_fetch_array($sql)){
	
	$pdf->setXY(10,$ya);
	$pdf->setFont('arial','',8);
	$pdf->setFillColor(255,255,255);
	$pdf->cell(10,6,$no,1,0,'C',1);
	$pdf->cell(20,6,$data['NAMA'],1,0,'L',1);
	// $pdf->cell(30,6,$data['atasnama'],1,0,'L',1);
	// $pdf->CELL(30,6,$data['nomorsertifikat'],1,0,'L',1);
	// $pdf->CELL(36,6,$data['alamat_ser'],1,0,'L',1);
	// $pdf->CELL(15,6,$data['ltlb'],1,0,'L',1);
	// $pdf->CELL(20,6,$data['nilai_pasar'],1,0,'L',1);
	// $pdf->CELL(27,6,$data['nilai_likuidasi'],1,0,'L',1);
	$ya = $ya+$row;
	$no++;
}
$pdf->setFont('arial','B',8);
$pdf->text(13,137,'Untuk Jaminan Kendaraan Bergerak');

$yi = 140;
$ya = 140;
$pdf->setFont('Arial','',8);
$pdf->setFillColor(222,222,222);
$pdf->setXY(10,$ya);							//10 -> jarak tabel dari pinggir kertas
$pdf->CELL(10,6,'NO',1,0,'C',1);				//10 -> lebar kolom, C (center), L(left), R(Right)	
$pdf->CELL(20,6,'BENTUK',1,0,'C',1);
$pdf->CELL(16,6,'MERK',1,0,'C',1);
$pdf->CELL(20,6,'TYPE',1,0,'C',1);
$pdf->CELL(25,6,'NOMOR POLISI',1,0,'C',1);
$pdf->CELL(20,6,'ATAS NAMA',1,0,'C',1);
$pdf->CELL(30,6,'TAHUN KENDARAAN',1,0,'C',1);
$pdf->CELL(20,6,'NILAI PASAR',1,0,'C',1);
$pdf->CELL(27,6,'NILAI LIKUIDASI',1,0,'C',1);

# menampilkan data dari database
$query = "select * from tb_warga WHERE NIK=3318132702990001";
$sql = mysqli_query($koneksi,$query);
$no = 1;
$row = 6;
$ya = $yi + $row;
while($data = mysqli_fetch_array($sql)){
	
	$pdf->setXY(10,$ya);
	$pdf->setFont('arial','',8);
	$pdf->setFillColor(255,255,255);
	$pdf->cell(10,6,$no,1,0,'C',1);
	$pdf->cell(20,6,$data['NAMA'],1,0,'L',1);
	// $pdf->cell(16,6,$data['merk'],1,0,'L',1);
	// $pdf->CELL(20,6,$data['type'],1,0,'L',1);
	// $pdf->CELL(25,6,$data['no_polisi'],1,0,'L',1);
	// $pdf->CELL(20,6,$data['atasnama1'],1,0,'L',1);
	// $pdf->CELL(30,6,$data['tahun_kendaraan'],1,0,'L',1);
	// $pdf->CELL(20,6,$data['nilai_pasar1'],1,0,'L',1);
	// $pdf->CELL(27,6,$data['nilai_likuidasi1'],1,0,'L',1);
	$ya = $ya+$row;
	$no++;
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
$pdf->Ln();
$pdf->SetFont('Arial','B',8);
$pdf->Cell(0,8,'PENGUSUL                                                                            KOMITE CABANG');
$pdf->Ln(4);
$pdf->Cell(0,9,'Tanggal : ...................                                   Tanggal : ...................');
$pdf->Ln(4);
$pdf->Cell(0,10,'Surveyor / AO                                                   AO                         Admin             Manajer Cabang');
$pdf->Ln(20);
$pdf->SetFont('Arial','',8);
$pdf->Cell(0,10,'   IMRON                                                        IMRON                      HANIK                  KHOLIQ');

$pdf->SetX(125); 
// $pdf->MultiCell(95,10,'Klakahkasihan, '.date('d').' '.$bln_list[date('m')].' '.date('Y'),0,'C');
$pdf->Ln();
$pdf->output();
?>