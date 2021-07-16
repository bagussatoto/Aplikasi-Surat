<?php
session_start();
ob_start();
include_once("../koneksi.php"); //buat koneksi ke database
$kode   = $_GET['id']; //kode berita yang akan dikonvert
$query  = mysqli_query("SELECT * FROM tb_surat WHERE id_surat='".$_GET['id']."'");
$data   = mysqli_fetch_array($query);

?>

<?php
{
if(@$_GET['data'] == "ket_umum") {
	?>
<html>
<head>
<title>Cetak Surat</title>
<style type="text/css">
<!--
body { font-family: Arial; font-size: 22.4px }
.pos { position: absolute; z-index: 0; left: 0px; top: 0px; right: 0px; }
-->
</style>
</head>
<body>
<nobr><nowrap>
<div class="pos" id="_0:0" style="top:0">
<img name="_1100:850" src="page_001.jpg" height="1100" width="850" border="0" usemap="#Map"></div>
<div class="pos" id="_299:34" style="top:34;left:299">
<span id="_16.2" style="font-weight:bold; font-family:Times New Roman; font-size:16.2px; color:#000000">
PEMERINTAH KABUPATEN PATI</span>
</div>
<div class="pos" id="_331:56" style="top:56;left:331">
<span id="_16.2" style="font-weight:bold; font-family:Times New Roman; font-size:16.2px; color:#000000">
KECAMATAN GEMBONG</span>
</div>
<div class="pos" id="_299:79" style="top:79;left:299">
<span id="_21.6" style="font-weight:bold; font-family:Times New Roman; font-size:21.6px; color:#000000">
DESA KLAKAHKASIHAN</span>
</div>
<div class="pos" id="_216:107" style="top:107;left:216">
<span id="_16.2" style=" font-family:Times New Roman; font-size:16.2px; color:#000000">
Sekretariat : Desa Klakahkasihan RT 03 RW 01 Kode Pos 59162</span>
</div>
<div class="pos" id="_100:147" style="top:147;left:100">
<span id="_16.2" style=" font-family:Times New Roman; font-size:16.2px; color:#000000">
Kode : 33.18.130.009</span>
</div>
<?php
			$kon = new mysqli("localhost","root","","desa_adm");
			$sql_tampil = "SELECT tb_surat.nama, tb_surat.keperluan, tb_surat.ttd, tb_surat.nomor_srt, tb_warga.JK, tb_warga.TMPT_LHR, tb_warga.TGL_LHR, tb_warga.AGAMA, tb_warga.PEKERJAAN, tb_warga.STATUS, tb_warga.ALAMAT, tb_warga.NO_RT, tb_warga.NO_RW, tb_warga.NIK, tb_warga.NO_KK FROM tb_surat JOIN tb_warga ON tb_surat.NIK=tb_warga.NIK WHERE id_surat='".$_GET['id']."'";
            
            $query_tampil = mysqli_query($kon, $sql_tampil);
            $no=1;
            while ($data = mysqli_fetch_array($query_tampil,MYSQLI_BOTH)) {
?>
<div class="pos" id="_279:183" style="top:183;left:279">
<span id="_16.2" style="font-weight:bold; font-family:Times New Roman; font-size:16.2px; color:#000000">
SURAT KETERANGAN / PENGANTAR</span>
</div>
<div class="pos" id="_331:205" style="top:205;left:331">
<span id="_16.2" style=" font-family:Times New Roman; font-size:16.2px; color:#000000">
Nomor : 518.32/ <?php echo $data['nomor_srt']; ?></span>
</div>
<div class="pos" id="_481:205" style="top:205;left:481">
<span id="_16.2" style=" font-family:Times New Roman; font-size:16.2px; color:#000000">
/2021</span>
</div>
<div class="pos" id="_100:241" style="top:241;left:100">
<span id="_16.2" style=" font-family:Times New Roman; font-size:16.2px; color:#000000">
Yang bertanda tangan di bawah ini, menerangkan bahwa :</span>
</div>
<div class="pos" id="_125:277" style="top:277;left:125">
<span id="_16.2" style=" font-family:Times New Roman; font-size:16.2px; color:#000000">
1. Nama</span>
</div>
<div class="pos" id="_350:277" style="top:277;left:350">
<span id="_16.2" style=" font-family:Times New Roman; font-size:16.2px; color:#000000">
: <?php echo $data['nama']; ?></span>
</div>
<div class="pos" id="_125:305" style="top:305;left:125">
<span id="_16.2" style=" font-family:Times New Roman; font-size:16.2px; color:#000000">
2. Jenis Kelamin</span>
</div>
<div class="pos" id="_350:305" style="top:305;left:350">
<span id="_16.2" style=" font-family:Times New Roman; font-size:16.2px; color:#000000">
: <?php if($data['JK']=='L'){
		echo "Laki - laki";
	}else{
		echo "Perempuan";
		}?></span>
</div>
<div class="pos" id="_125:334" style="top:334;left:125">
<span id="_16.2" style=" font-family:Times New Roman; font-size:16.2px; color:#000000">
3. Tempat/Tanggal Lahir</span>
</div>
<div class="pos" id="_349:334" style="top:334;left:349">
<span id="_16.2" style=" font-family:Times New Roman; font-size:16.2px; color:#000000">
: <?php echo $data['TMPT_LHR']; ?>, <?php echo $data['TGL_LHR']; ?></span>
</div>
<div class="pos" id="_125:363" style="top:363;left:125">
<span id="_16.2" style=" font-family:Times New Roman; font-size:16.2px; color:#000000">
4. Kewarganegaraan/Agama</span>
</div>
<div class="pos" id="_349:363" style="top:363;left:349">
<span id="_16.2" style=" font-family:Times New Roman; font-size:16.2px; color:#000000">
: WNI / <?php echo $data['AGAMA']; ?></span>
</div>
<div class="pos" id="_125:392" style="top:392;left:125">
<span id="_16.2" style=" font-family:Times New Roman; font-size:16.2px; color:#000000">
5. Pekerjaan</span>
</div>
<div class="pos" id="_350:392" style="top:392;left:350">
<span id="_16.2" style=" font-family:Times New Roman; font-size:16.2px; color:#000000">
: <?php echo $data['PEKERJAAN']; ?></span>
</div>
<div class="pos" id="_125:420" style="top:420;left:125">
<span id="_16.2" style=" font-family:Times New Roman; font-size:16.2px; color:#000000">
6. Status</span>
</div>
<div class="pos" id="_350:420" style="top:420;left:350">
<span id="_16.2" style=" font-family:Times New Roman; font-size:16.2px; color:#000000">
: <?php echo $data['STATUS']; ?></span>
</div>
<div class="pos" id="_125:449" style="top:449;left:125">
<span id="_16.2" style=" font-family:Times New Roman; font-size:16.2px; color:#000000">
7. Tempat Tinggal</span>
</div>
<div class="pos" id="_349:449" style="top:449;left:349">
<span id="_16.2" style=" font-family:Times New Roman; font-size:16.2px; color:#000000">
: <?php echo $data['ALAMAT']; ?> RT 0<?php echo $data['NO_RT']; ?> RW0<?php echo $data['NO_RW']; ?> Desa Klakahkasihan</span>
</div>
<div class="pos" id="_125:478" style="top:478;left:125">
<span id="_16.2" style=" font-family:Times New Roman; font-size:16.2px; color:#000000">
8. Surat Bukti Diri</span>
</div>
<div class="pos" id="_350:478" style="top:478;left:350">
<span id="_16.2" style=" font-family:Times New Roman; font-size:16.2px; color:#000000">
: KK. No</span>
</div>
<div class="pos" id="_450:478" style="top:478;left:450">
<span id="_16.2" style=" font-family:Times New Roman; font-size:16.2px; color:#000000">
: <?php echo $data['NO_KK']; ?></span>
</div>
<div class="pos" id="_350:507" style="top:507;left:350">
<span id="_16.2" style=" font-family:Times New Roman; font-size:16.2px; color:#000000">
  &nbsp;&nbsp;NIK. No</span>
</div>
<div class="pos" id="_450:507" style="top:507;left:450">
<span id="_16.2" style=" font-family:Times New Roman; font-size:16.2px; color:#000000">
: <?php echo $data['NIK']; ?></span>
</div>
<div class="pos" id="_125:535" style="top:535;left:125">
<span id="_16.2" style=" font-family:Times New Roman; font-size:16.2px; color:#000000">
9. Keperluan</span>
</div>
<div class="pos" id="_350:535" style="top:535;left:350">
<span id="_16.2" style=" font-family:Times New Roman; font-size:16.2px; color:#000000">
: <?php echo $data['keperluan']; ?></span>
</div>
<div class="pos" id="_125:650" style="top:650;left:125">
<span id="_16.2" style=" font-family:Times New Roman; font-size:16.2px; color:#000000">
10. Berlaku Mulai</span>
</div>
<div class="pos" id="_349:650" style="top:650;left:349">
<span id="_16.2" style=" font-family:Times New Roman; font-size:16.2px; color:#000000">
<?php $date=date('d-m-Y'); ?>
: <?php echo $date; ?> s/d selesai</span>
</div>
<div class="pos" id="_125:679" style="top:679;left:125">
<span id="_16.2" style=" font-family:Times New Roman; font-size:16.2px; color:#000000">
11. Keterangan Lain-lain</span>
</div>
<div class="pos" id="_350:679" style="top:679;left:350">
<span id="_16.2" style=" font-family:Times New Roman; font-size:16.2px; color:#000000">
: Yang bersangkutan benar-benar warga <?php echo $data['ALAMAT']; ?> RT 0<?php echo $data['NO_RT']; ?> RW 0<?php echo $data['NO_RW']; ?> </br>&nbsp;&nbsp;Desa Klakahkasihan Kec. Gembong Kab. Pati dan memiliki</br>&nbsp;&nbsp;usaha perdagangan</span>
</div>
<div class="pos" id="_150:810" style="top:810;left:150">
<span id="_16.2" style=" font-family:Times New Roman; font-size:16.2px; color:#000000">
Demikian untuk menjadikan maklum bagi yang berkepentingan</span>
</div>
<div class="pos" id="_455:854" style="top:854;left:550">
<span id="_16.2" style=" font-family:Times New Roman; font-size:16.2px; color:#000000">
Klakahkasihan, <?php echo $date; ?></span>
</div>
<div class="pos" id="_189:873" style="top:873;left:189">
<span id="_16.2" style=" font-family:Times New Roman; font-size:16.2px; color:#000000">
Tanda Tangan Pemegang</span>
</div>
<div class="pos" id="_189:873" style="top:960;left:189">
<span id="_16.2" style=" font-family:Times New Roman; font-size:16.2px; color:#000000">
<?php echo $data['nama']; ?></span>
</div>
<div class="pos" id="_455:873" style="top:873;left:550">
<span id="_16.2" style=" font-family:Times New Roman; font-size:16.2px; color:#000000">
Kepala Desa Klakahkasihan</span>
</div>
<div class="pos" id="_189:873" style="top:960;left:550">
<span id="_16.2" style=" font-family:Times New Roman; font-size:16.2px; color:#000000">
<?php if($data['ttd']=="Kepala Desa"){
		echo "HANDZIQ SJ";
	}else{
		echo "ALI SHODIQIN, SH.";
		}?></span>
</div>
</nowrap></nobr>
<?php 
	}
?>
</body>
</html>

<!-- =================================================== surat 2 =============================== -->

<?php
}else if(@$_GET['data'] == "rck"){
	?>
<html>
<head>
<title>Cetak Surat</title>
<style type="text/css">
<!--
body { font-family: Arial; font-size: 22.4px }
.pos { position: absolute; z-index: 0; left: 0px; top: 0px; right: 0px; }
-->
</style>
</head>
<body>
<nobr><nowrap>
<div class="pos" id="_0:0" style="top:0">
<img name="_1100:850" src="page_001.jpg" height="1100" width="850" border="0" usemap="#Map"></div>
<div class="pos" id="_299:34" style="top:34;left:299">
<span id="_16.2" style="font-weight:bold; font-family:Times New Roman; font-size:16.2px; color:#000000">
PEMERINTAH KABUPATEN PATI</span>
</div>
<div class="pos" id="_331:56" style="top:56;left:331">
<span id="_16.2" style="font-weight:bold; font-family:Times New Roman; font-size:16.2px; color:#000000">
KECAMATAN GEMBONG</span>
</div>
<div class="pos" id="_299:79" style="top:79;left:299">
<span id="_21.6" style="font-weight:bold; font-family:Times New Roman; font-size:21.6px; color:#000000">
DESA KLAKAHKASIHAN</span>
</div>
<div class="pos" id="_216:107" style="top:107;left:216">
<span id="_16.2" style=" font-family:Times New Roman; font-size:16.2px; color:#000000">
Sekretariat : Desa Klakahkasihan RT 03 RW 01 Kode Pos 59162</span>
</div>
<div class="pos" id="_100:147" style="top:147;left:100">
<span id="_16.2" style=" font-family:Times New Roman; font-size:16.2px; color:#000000">
Kode : 33.18.130.009</span>
</div>
<?php
			$kon = new mysqli("localhost","root","","desa_adm");
			$sql_tampil = "SELECT tb_surat.nama, tb_surat.keperluan, tb_surat.ttd, tb_surat.nomor_srt, tb_warga.JK, tb_warga.TMPT_LHR, tb_warga.TGL_LHR, tb_warga.AGAMA, tb_warga.PEKERJAAN, tb_warga.STATUS, tb_warga.ALAMAT, tb_warga.NO_RT, tb_warga.NO_RW, tb_warga.NIK, tb_warga.NO_KK FROM tb_surat JOIN tb_warga ON tb_surat.NIK=tb_warga.NIK WHERE id_surat='".$_GET['id']."'";
            
            $query_tampil = mysqli_query($kon, $sql_tampil);
            $no=1;
            while ($data = mysqli_fetch_array($query_tampil,MYSQLI_BOTH)) {
?>
<div class="pos" id="_279:183" style="top:183;left:279">
<span id="_16.2" style="font-weight:bold; font-family:Times New Roman; font-size:16.2px; color:#000000">
SURAT KETERANGAN / PENGANTAR</span>
</div>
<div class="pos" id="_331:205" style="top:205;left:331">
<span id="_16.2" style=" font-family:Times New Roman; font-size:16.2px; color:#000000">
Nomor : 331.1/ <?php echo $data['nomor_srt']; ?></span>
</div>
<div class="pos" id="_481:205" style="top:205;left:481">
<span id="_16.2" style=" font-family:Times New Roman; font-size:16.2px; color:#000000">
/2021</span>
</div>
<div class="pos" id="_100:241" style="top:241;left:100">
<span id="_16.2" style=" font-family:Times New Roman; font-size:16.2px; color:#000000">
Yang bertanda tangan di bawah ini, menerangkan bahwa :</span>
</div>
<div class="pos" id="_125:277" style="top:277;left:125">
<span id="_16.2" style=" font-family:Times New Roman; font-size:16.2px; color:#000000">
1. Nama</span>
</div>
<div class="pos" id="_350:277" style="top:277;left:350">
<span id="_16.2" style=" font-family:Times New Roman; font-size:16.2px; color:#000000">
: <?php echo $data['nama']; ?></span>
</div>
<div class="pos" id="_125:305" style="top:305;left:125">
<span id="_16.2" style=" font-family:Times New Roman; font-size:16.2px; color:#000000">
2. Jenis Kelamin</span>
</div>
<div class="pos" id="_350:305" style="top:305;left:350">
<span id="_16.2" style=" font-family:Times New Roman; font-size:16.2px; color:#000000">
: <?php if($data['JK']=='L'){
		echo "Laki - laki";
	}else{
		echo "Perempuan";
		}?></span>
</div>
<div class="pos" id="_125:334" style="top:334;left:125">
<span id="_16.2" style=" font-family:Times New Roman; font-size:16.2px; color:#000000">
3. Tempat/Tanggal Lahir</span>
</div>
<div class="pos" id="_349:334" style="top:334;left:349">
<span id="_16.2" style=" font-family:Times New Roman; font-size:16.2px; color:#000000">
: <?php echo $data['TMPT_LHR']; ?>, <?php echo $data['TGL_LHR']; ?></span>
</div>
<div class="pos" id="_125:363" style="top:363;left:125">
<span id="_16.2" style=" font-family:Times New Roman; font-size:16.2px; color:#000000">
4. Kewarganegaraan/Agama</span>
</div>
<div class="pos" id="_349:363" style="top:363;left:349">
<span id="_16.2" style=" font-family:Times New Roman; font-size:16.2px; color:#000000">
: WNI / <?php echo $data['AGAMA']; ?></span>
</div>
<div class="pos" id="_125:392" style="top:392;left:125">
<span id="_16.2" style=" font-family:Times New Roman; font-size:16.2px; color:#000000">
5. Pekerjaan</span>
</div>
<div class="pos" id="_350:392" style="top:392;left:350">
<span id="_16.2" style=" font-family:Times New Roman; font-size:16.2px; color:#000000">
: <?php echo $data['PEKERJAAN']; ?></span>
</div>
<div class="pos" id="_125:420" style="top:420;left:125">
<span id="_16.2" style=" font-family:Times New Roman; font-size:16.2px; color:#000000">
6. Status</span>
</div>
<div class="pos" id="_350:420" style="top:420;left:350">
<span id="_16.2" style=" font-family:Times New Roman; font-size:16.2px; color:#000000">
: <?php echo $data['STATUS']; ?></span>
</div>
<div class="pos" id="_125:449" style="top:449;left:125">
<span id="_16.2" style=" font-family:Times New Roman; font-size:16.2px; color:#000000">
7. Tempat Tinggal</span>
</div>
<div class="pos" id="_349:449" style="top:449;left:349">
<span id="_16.2" style=" font-family:Times New Roman; font-size:16.2px; color:#000000">
: <?php echo $data['ALAMAT']; ?> RT 0<?php echo $data['NO_RT']; ?> RW0<?php echo $data['NO_RW']; ?> Desa Klakahkasihan</span>
</div>
<div class="pos" id="_125:478" style="top:478;left:125">
<span id="_16.2" style=" font-family:Times New Roman; font-size:16.2px; color:#000000">
8. Surat Bukti Diri</span>
</div>
<div class="pos" id="_350:478" style="top:478;left:350">
<span id="_16.2" style=" font-family:Times New Roman; font-size:16.2px; color:#000000">
: KK. No</span>
</div>
<div class="pos" id="_450:478" style="top:478;left:450">
<span id="_16.2" style=" font-family:Times New Roman; font-size:16.2px; color:#000000">
: <?php echo $data['NO_KK']; ?></span>
</div>
<div class="pos" id="_350:507" style="top:507;left:350">
<span id="_16.2" style=" font-family:Times New Roman; font-size:16.2px; color:#000000">
  &nbsp;&nbsp;NIK. No</span>
</div>
<div class="pos" id="_450:507" style="top:507;left:450">
<span id="_16.2" style=" font-family:Times New Roman; font-size:16.2px; color:#000000">
: <?php echo $data['NIK']; ?></span>
</div>
<div class="pos" id="_125:535" style="top:535;left:125">
<span id="_16.2" style=" font-family:Times New Roman; font-size:16.2px; color:#000000">
9. Keperluan</span>
</div>
<div class="pos" id="_350:535" style="top:535;left:350">
<span id="_16.2" style=" font-family:Times New Roman; font-size:16.2px; color:#000000">
: <?php echo $data['keperluan']; ?></span>
</div>
<div class="pos" id="_125:650" style="top:650;left:125">
<span id="_16.2" style=" font-family:Times New Roman; font-size:16.2px; color:#000000">
10. Berlaku Mulai</span>
</div>
<div class="pos" id="_349:650" style="top:650;left:349">
<span id="_16.2" style=" font-family:Times New Roman; font-size:16.2px; color:#000000">
<?php $date=date('d-m-Y'); ?>
: <?php echo $date; ?> s/d selesai</span>
</div>
<div class="pos" id="_125:679" style="top:679;left:125">
<span id="_16.2" style=" font-family:Times New Roman; font-size:16.2px; color:#000000">
11. Keterangan Lain-lain</span>
</div>
<div class="pos" id="_350:679" style="top:679;left:350">
<span id="_16.2" style=" font-family:Times New Roman; font-size:16.2px; color:#000000">
: Yang bersangkutan benar-benar warga <?php echo $data['ALAMAT']; ?> RT 0<?php echo $data['NO_RT']; ?> RW 0<?php echo $data['NO_RW']; ?> </br>&nbsp;&nbsp;Desa Klakahkasihan Kec. Gembong Kab. Pati dan memiliki</br>&nbsp;&nbsp;usaha perdagangan</span>
</div>
<div class="pos" id="_150:810" style="top:810;left:150">
<span id="_16.2" style=" font-family:Times New Roman; font-size:16.2px; color:#000000">
Demikian untuk menjadikan maklum bagi yang berkepentingan</span>
</div>
<div class="pos" id="_455:854" style="top:854;left:550">
<span id="_16.2" style=" font-family:Times New Roman; font-size:16.2px; color:#000000">
Klakahkasihan, <?php echo $date; ?></span>
</div>
<div class="pos" id="_189:873" style="top:873;left:189">
<span id="_16.2" style=" font-family:Times New Roman; font-size:16.2px; color:#000000">
Tanda Tangan Pemegang</span>
</div>
<div class="pos" id="_189:873" style="top:960;left:189">
<span id="_16.2" style=" font-family:Times New Roman; font-size:16.2px; color:#000000">
<?php echo $data['nama']; ?></span>
</div>
<div class="pos" id="_455:873" style="top:873;left:550">
<span id="_16.2" style=" font-family:Times New Roman; font-size:16.2px; color:#000000">
Kepala Desa Klakahkasihan</span>
</div>
<div class="pos" id="_189:873" style="top:960;left:550">
<span id="_16.2" style=" font-family:Times New Roman; font-size:16.2px; color:#000000">
<?php if($data['ttd']=="Kepala Desa"){
		echo "HANDZIQ SJ";
	}else{
		echo "ALI SHODIQIN, SH.";
		}?></span>
</div>
</nowrap></nobr>
<?php 
	}
?>
</body>
</html>

<?php
}} ?>

<?php
$filename="mhs-".$id.".pdf"; //ubah untuk menentukan nama file pdf yang dihasilkan nantinya
//==========================================================================================================
//Copy dan paste langsung script dibawah ini,untuk mengetahui lebih jelas tentang fungsinya silahkan baca-baca tutorial tentang HTML2PDF
//==========================================================================================================
$content = ob_get_clean();
$content = '<page style="font-family: freeserif">'.nl2br($content).'</page>';
 require_once(dirname(__FILE__).'/src/Html2Pdf.php');
 try
 {
  $html2pdf = new HTML2PDF('P','A4','en', false, 'ISO-8859-15',array(30, 0, 20, 0));
  $html2pdf->setDefaultFont('Arial');
  $html2pdf->writeHTML($content, isset($_GET['vuehtml']));
  $html2pdf->Output($filename);
 }
 catch(HTML2PDF_exception $e) { echo $e; }
?>