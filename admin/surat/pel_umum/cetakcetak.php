<?php
{
if(@$_GET['data'] == "ket_umum") {
	?>
<html>
	<head>
	<title>Cetak Surat Umum</title>
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
						$sql_tampil = "SELECT tb_surat.nama, tb_surat.keperluan, tb_surat.ttd, tb_surat.nomor_srt,tb_surat.tgl, tb_warga.JK, tb_warga.TMPT_LHR, tb_warga.TGL_LHR, tb_warga.AGAMA, tb_warga.PEKERJAAN, tb_warga.STATUS, tb_warga.ALAMAT, tb_warga.NO_RT, tb_warga.NO_RW, tb_warga.NIK, tb_warga.NO_KK FROM tb_surat JOIN tb_warga ON tb_surat.NIK=tb_warga.NIK WHERE id_surat='".$_GET['id']."'";
			            
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
			<div class="pos" id="_481:205" style="top:205;left:470">
				<span id="_16.2" style=" font-family:Times New Roman; font-size:16.2px; color:#000000">
				/2021</span>
			</div>
			<div class="pos" id="_100:241" style="top:230;left:100">
				<span id="_16.2" style=" font-family:Times New Roman; font-size:16.2px; color:#000000">
				Yang bertanda tangan di bawah ini Kepala Desa Klakahkasihan Kecamatan Gembong Kabupaten Pati,</br>menerangkan bahwa : menerangkan bahwa :</span>
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
				  		}
				  ?></span>
			</div>
			<div class="pos" id="_125:334" style="top:334;left:125">
				<span id="_16.2" style=" font-family:Times New Roman; font-size:16.2px; color:#000000">
				3. Tempat/Tanggal Lahir</span>
			</div>
			<div class="pos" id="_349:334" style="top:334;left:349">
				
				<span id="_16.2" style=" font-family:Times New Roman; font-size:16.2px; color:#000000">
				: <?php echo $data['TMPT_LHR']; ?>, <?php echo date('d-m-Y', strtotime($data['TGL_LHR'])); ?></span>
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
				: <?php echo $data['ALAMAT']; ?> RT 0<?php echo $data['NO_RT']; ?> RW 0<?php echo $data['NO_RW']; ?> Desa Klakahkasihan</span>
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
			<div class="pos" class="rata" id="_350:535" style="top:535;left:350">
				<span id="_16.2" style=" font-family:Times New Roman; font-size:16.2px; color:#000000">
				:
				 </span>
			</div>
			<div class="pos" class="rata" id="_350:535" style="top:535;left:358">
				<span id="_16.2" style=" font-family:Times New Roman; font-size:16.2px; color:#000000">
				<?php 
						$str = $data['keperluan'];
						echo wordwrap($str,55,"<br>\n");
				  ?>
				 </span>
			</div>
			<div class="pos" id="_125:650" style="top:620;left:125">
				<span id="_16.2" style=" font-family:Times New Roman; font-size:16.2px; color:#000000">
				10. Berlaku Mulai</span>
			</div>
			<div class="pos" id="_349:650" style="top:620;left:349">
				<span id="_16.2" style=" font-family:Times New Roman; font-size:16.2px; color:#000000">
				: <?php echo $data['tgl']; ?> s/d selesai</span>
			</div>
			<div class="pos" id="_125:679" style="top:649;left:125">
				<span id="_16.2" style=" font-family:Times New Roman; font-size:16.2px; color:#000000">
				11. Keterangan Lain-lain</span>
			</div>
			<div class="pos" id="_350:679" style="top:649;left:350">
				<span id="_16.2" style=" font-family:Times New Roman; font-size:16.2px; color:#000000">
				: Yang bersangkutan benar-benar warga <?php echo $data['ALAMAT']; ?> RT 0<?php echo $data['NO_RT']; ?> RW 0<?php echo $data['NO_RW']; ?> </br>&nbsp;&nbsp;Desa Klakahkasihan Kec. Gembong Kab. Pati dan memiliki</br>&nbsp;&nbsp;usaha perdagangan</span>
			</div>
			<div class="pos" id="_150:810" style="top:730;left:100">
				<span id="_16.2" style=" font-family:Times New Roman; font-size:16.2px; color:#000000">
				Demikian untuk menjadikan maklum bagi yang berkepentingan.</span>
			</div>
			<div class="pos" id="_455:854" style="top:784;left:550">
				<span id="_16.2" style=" font-family:Times New Roman; font-size:16.2px; color:#000000">
				<?php $date=date('d-m-Y'); ?>
				Klakahkasihan, <?php echo $date; ?></span>
			</div>
			<div class="pos" id="_189:873" style="top:810;left:189">
				<span id="_16.2" style=" font-family:Times New Roman; font-size:16.2px; color:#000000">
				Tanda Tangan Pemegang</span>
			</div>
			<div class="pos" id="_189:873" style="top:897;left:189">
				<span id="_16.2" style=" font-family:Times New Roman; font-size:16.2px; color:#000000">
				<?php echo $data['nama']; ?></span>
			</div>
			<div class="pos" id="_455:873" style="top:810;left:550">
				<span id="_16.2" style=" font-family:Times New Roman; font-size:16.2px; color:#000000">
				Kepala Desa Klakahkasihan</span>
			</div>
			<div class="pos" id="_189:873" style="top:897;left:550">
				<span id="_16.2" style=" font-family:Times New Roman; font-size:16.2px; color:#000000">
				<?php if($data['ttd']=="Kepala Desa"){
						echo "HANDZIQ SJ";
					}else{
						echo "ALI SHODIQIN, SH.";
					}
				?></span>
			</div>
			</nowrap></nobr>
			<?php 
				}
			?>
			<script>
			window.print();
			</script>
</body>
</html>

<!-- =================================================== RCK =============================== -->

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
					$sql_tampil = "SELECT tb_surat.nama, tb_surat.keperluan, tb_surat.ttd, tb_surat.nomor_srt,tb_surat.tgl, tb_warga.JK, tb_warga.TMPT_LHR, tb_warga.TGL_LHR, tb_warga.AGAMA, tb_warga.PEKERJAAN, tb_warga.STATUS, tb_warga.ALAMAT, tb_warga.NO_RT, tb_warga.NO_RW, tb_warga.NIK, tb_warga.NO_KK FROM tb_surat JOIN tb_warga ON tb_surat.NIK=tb_warga.NIK WHERE id_surat='".$_GET['id']."'";
		            
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
		<div class="pos" id="_481:205" style="top:205;left:475">
			<span id="_16.2" style=" font-family:Times New Roman; font-size:16.2px; color:#000000">
			/2021</span>
		</div>
		<div class="pos" id="_100:241" style="top:230;left:100">
			<span id="_16.2" style=" font-family:Times New Roman; font-size:16.2px; color:#000000">
			Yang bertanda tangan di bawah ini Kepala Desa Klakahkasihan Kecamatan Gembong Kabupaten Pati,</br>menerangkan bahwa :</span>
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
			: <?php echo $data['TMPT_LHR']; ?>, <?php echo date('d-m-Y', strtotime($data['TGL_LHR'])); ?></span>
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
			: <?php echo $data['ALAMAT']; ?> RT 0<?php echo $data['NO_RT']; ?> RW 0<?php echo $data['NO_RW']; ?> Desa Klakahkasihan</span>
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
			: 
			</span>
		</div>
		<div class="pos" id="_350:535" style="top:535;left:358">
			<span id="_16.2" style=" font-family:Times New Roman; font-size:16.2px; color:#000000">
			<?php $str = $data['keperluan'];
					echo wordwrap($str,55,"<br>\n");
			  ?></span>
		</div>
		<div class="pos" id="_125:650" style="top:620;left:125">
			<span id="_16.2" style=" font-family:Times New Roman; font-size:16.2px; color:#000000">
			10. Berlaku Mulai</span>
		</div>
		<div class="pos" id="_349:650" style="top:620;left:349">
			<span id="_16.2" style=" font-family:Times New Roman; font-size:16.2px; color:#000000">
			: <?php echo $data['tgl']; ?> s/d selesai</span>
		</div>
		<div class="pos" id="_125:679" style="top:649;left:125">
			<span id="_16.2" style=" font-family:Times New Roman; font-size:16.2px; color:#000000">
			11. Keterangan Lain-lain</span>
		</div>
		<div class="pos" id="_350:679" style="top:649;left:350">
			<span id="_16.2" style=" font-family:Times New Roman; font-size:16.2px; color:#000000">
			: Yang bersangkutan belum pernah dipidana penjara yang </br>
			&nbsp;&nbsp;memperoleh kekuatan hukum tetap karena melakukan tindak </br>
			&nbsp;&nbsp;pidana dengan pidana penjara 5 (lima) tahun atau lebih,</br>
			&nbsp;&nbsp;tidak sedang dicabut hak untuk memilih/dipilih dan tidak</br>
			&nbsp;&nbsp;menjadi anggota organisasi terlarang</span>
		</div>
		<div class="pos" id="_150:810" style="top:780;left:100">
			<span id="_16.2" style=" font-family:Times New Roman; font-size:16.2px; color:#000000">
			Demikian untuk menjadikan maklum bagi yang berkepentingan</span>
		</div>
		<div class="pos" id="_455:854" style="top:824;left:550">
			<span id="_16.2" style=" font-family:Times New Roman; font-size:16.2px; color:#000000">
			<?php $date=date('d-m-Y'); ?>
			Klakahkasihan, <?php echo $date; ?></span>
		</div>
		<div class="pos" id="_189:873" style="top:850;left:189">
			<span id="_16.2" style=" font-family:Times New Roman; font-size:16.2px; color:#000000">
			Tanda Tangan Pemegang</span>
		</div>
		<div class="pos" id="_189:873" style="top:937;left:189">
			<span id="_16.2" style=" font-family:Times New Roman; font-size:16.2px; color:#000000">
			<?php echo $data['nama']; ?></span>
		</div>
		<div class="pos" id="_455:873" style="top:850;left:550">
			<span id="_16.2" style=" font-family:Times New Roman; font-size:16.2px; color:#000000">
			Kepala Desa Klakahkasihan</span>
		</div>
		<div class="pos" id="_189:873" style="top:937;left:550">
			<span id="_16.2" style=" font-family:Times New Roman; font-size:16.2px; color:#000000">
			<?php if($data['ttd']=="Kepala Desa"){
					echo "HANDZIQ SJ";
				}else{
					echo "ALI SHODIQIN, SH.";
				}
			?></span>
		</div>
		</nowrap></nobr>
		<?php 
			}
		?>
		<script>
			window.print();
		</script>	
</body>
</html>

<!-- =================================================== SKCK =============================== -->

<?php
}else if(@$_GET['data'] == "skck"){
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
					$sql_tampil = "SELECT tb_surat.nama, tb_surat.keperluan, tb_surat.ttd, tb_surat.nomor_srt,tb_surat.tgl, tb_warga.JK, tb_warga.TMPT_LHR, tb_warga.TGL_LHR, tb_warga.AGAMA, tb_warga.PEKERJAAN, tb_warga.STATUS, tb_warga.ALAMAT, tb_warga.NO_RT, tb_warga.NO_RW, tb_warga.NIK, tb_warga.NO_KK FROM tb_surat JOIN tb_warga ON tb_surat.NIK=tb_warga.NIK WHERE id_surat='".$_GET['id']."'";
		            
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
		<div class="pos" id="_481:205" style="top:205;left:475">
			<span id="_16.2" style=" font-family:Times New Roman; font-size:16.2px; color:#000000">
			/2021</span>
		</div>
		<div class="pos" id="_100:241" style="top:230;left:100">
			<span id="_16.2" style=" font-family:Times New Roman; font-size:16.2px; color:#000000">
			Yang bertanda tangan di bawah ini Kepala Desa Klakahkasihan Kecamatan Gembong Kabupaten Pati,</br>menerangkan bahwa :</span>
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
			: <?php echo $data['TMPT_LHR']; ?>, <?php echo date('d-m-Y', strtotime($data['TGL_LHR'])); ?></span>
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
			: <?php echo $data['ALAMAT']; ?> RT 0<?php echo $data['NO_RT']; ?> RW 0<?php echo $data['NO_RW']; ?> Desa Klakahkasihan</span>
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
			: 
			</span>
		</div>
		<div class="pos" id="_350:535" style="top:535;left:358">
			<span id="_16.2" style=" font-family:Times New Roman; font-size:16.2px; color:#000000">
			<?php $str = $data['keperluan'];
					echo wordwrap($str,55,"<br>\n");
			  ?></span>
		</div>
		<div class="pos" id="_125:650" style="top:620;left:125">
			<span id="_16.2" style=" font-family:Times New Roman; font-size:16.2px; color:#000000">
			10. Berlaku Mulai</span>
		</div>
		<div class="pos" id="_349:650" style="top:620;left:349">
			<span id="_16.2" style=" font-family:Times New Roman; font-size:16.2px; color:#000000">
			: <?php echo $data['tgl']; ?> s/d selesai</span>
		</div>
		<div class="pos" id="_125:679" style="top:649;left:125">
			<span id="_16.2" style=" font-family:Times New Roman; font-size:16.2px; color:#000000">
			11. Keterangan Lain-lain</span>
		</div>
		<div class="pos" id="_350:679" style="top:649;left:350">
			<span id="_16.2" style=" font-family:Times New Roman; font-size:16.2px; color:#000000">
			: Yang bersangkutan belum pernah dipidana penjara yang </br>
			&nbsp;&nbsp;memperoleh kekuatan hukum tetap karena melakukan tindak </br>
			&nbsp;&nbsp;pidana dengan pidana penjara 5 (lima) tahun atau lebih,</br>
			&nbsp;&nbsp;tidak sedang dicabut hak untuk memilih/dipilih dan tidak</br>
			&nbsp;&nbsp;menjadi anggota organisasi terlarang</span>
		</div>
		<div class="pos" id="_150:810" style="top:780;left:100">
			<span id="_16.2" style=" font-family:Times New Roman; font-size:16.2px; color:#000000">
			Demikian untuk menjadikan maklum bagi yang berkepentingan</span>
		</div>
		<div class="pos" id="_455:854" style="top:824;left:550">
			<span id="_16.2" style=" font-family:Times New Roman; font-size:16.2px; color:#000000">
			<?php $date=date('d-m-Y'); ?>
			Klakahkasihan, <?php echo $date; ?></span>
		</div>
		<div class="pos" id="_189:873" style="top:850;left:189">
			<span id="_16.2" style=" font-family:Times New Roman; font-size:16.2px; color:#000000">
			Tanda Tangan Pemegang</span>
		</div>
		<div class="pos" id="_189:873" style="top:937;left:189">
			<span id="_16.2" style=" font-family:Times New Roman; font-size:16.2px; color:#000000">
			<?php echo $data['nama']; ?></span>
		</div>
		<div class="pos" id="_455:873" style="top:850;left:550">
			<span id="_16.2" style=" font-family:Times New Roman; font-size:16.2px; color:#000000">
			Kepala Desa Klakahkasihan</span>
		</div>
		<div class="pos" id="_189:873" style="top:937;left:550">
			<span id="_16.2" style=" font-family:Times New Roman; font-size:16.2px; color:#000000">
			<?php if($data['ttd']=="Kepala Desa"){
					echo "HANDZIQ SJ";
				}else{
					echo "ALI SHODIQIN, SH.";
				}
			?></span>
		</div>
		</nowrap></nobr>
		<?php 
			}
		?>
		<script>
			window.print();
		</script>	
</body>
</html>

<!-- ================================= SKU ===============================-->

<?php
}else if(@$_GET['data'] == "sku"){
?>
<html>
<head>
<title>Cetak SKU</title>
<style type="text/css">
<!--
body { font-family: Arial; font-size: 22.4px }
.pos { position: absolute; z-index: 0; left: 0px; top: 0px }
-->
</style>
</head>
<body>
<nobr><nowrap>
<div class="pos" id="_0:0" style="top:0">
<img name="_1100:850" src="page_002.jpg" height="1100" width="850" border="0" usemap="#Map"></div>
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
</span>
</div>
<div class="pos" id="_303:183" style="top:183;left:303">
<span id="_16.2" style="font-weight:bold; font-family:Times New Roman; font-size:16.2px; color:#000000">
SURAT KETERANGAN USAHA</span>
</div>
				<?php
					$kon = new mysqli("localhost","root","","desa_adm");
					$sql_tampil = "SELECT tb_surat.nama, tb_surat.keperluan, tb_surat.ttd, tb_surat.nomor_srt,tb_surat.tgl, tb_warga.JK, tb_warga.TMPT_LHR, tb_warga.TGL_LHR, tb_warga.AGAMA, tb_warga.PEKERJAAN, tb_warga.STATUS, tb_warga.ALAMAT, tb_warga.NO_RT, tb_warga.NO_RW, tb_warga.NIK, tb_warga.NO_KK FROM tb_surat JOIN tb_warga ON tb_surat.NIK=tb_warga.NIK WHERE id_surat='".$_GET['id']."'";
		            
		            $query_tampil = mysqli_query($kon, $sql_tampil);
		            $no=1;
		            while ($data = mysqli_fetch_array($query_tampil,MYSQLI_BOTH)) {
				?>
<div class="pos" id="_338:205" style="top:205;left:330">
<span id="_16.2" style=" font-family:Times New Roman; font-size:16.2px; color:#000000">
Nomor : 518.32/ <?php echo $data['nomor_srt']; ?></span>
</div>
<div class="pos" id="_338:205" style="top:205;left:470">
<span id="_16.2" style=" font-family:Times New Roman; font-size:16.2px; color:#000000">
/2021</span>
</div>
<div class="pos" id="_100:241" style="top:241;left:100">
<span id="_16.2" style=" font-family:Times New Roman; font-size:16.2px; color:#000000">
Yang bertanda tangan di bawah ini kami :</span>
</div>
<div class="pos" id="_100:277" style="top:277;left:100">
<span id="_16.2" style=" font-family:Times New Roman; font-size:16.2px; color:#000000">
Nama</span>
</div>
<div class="pos" id="_250:277" style="top:277;left:250">
<span id="_16.2" style=" font-family:Times New Roman; font-size:16.2px; color:#000000">
: <?php if($data['ttd']=="Kepala Desa"){
					echo "HANDZIQ SJ";
				}else{
					echo "ALI SHODIQIN, SH.";
				}
			?>
</span>
</div>
<div class="pos" id="_100:319" style="top:319;left:100">
<span id="_16.2" style=" font-family:Times New Roman; font-size:16.2px; color:#000000">
Jabatan</span>
</div>
<div class="pos" id="_250:319" style="top:319;left:250">
<span id="_16.2" style=" font-family:Times New Roman; font-size:16.2px; color:#000000">
: <?php echo $data['ttd']; ?></span>
</div>
<div class="pos" id="_100:362" style="top:362;left:100">
<span id="_16.2" style=" font-family:Times New Roman; font-size:16.2px; color:#000000">
Menerangkan dengan sesungguhnya bahwa :</span>
</div>
<div class="pos" id="_100:405" style="top:405;left:100">
<span id="_16.2" style=" font-family:Times New Roman; font-size:16.2px; color:#000000">
Nama</span>
</div>
<div class="pos" id="_250:405" style="top:405;left:250">
<span id="_16.2" style=" font-family:Times New Roman; font-size:16.2px; color:#000000">
: <?php echo $data['nama']; ?></span>
</div>
<div class="pos" id="_100:447" style="top:447;left:100">
<span id="_16.2" style=" font-family:Times New Roman; font-size:16.2px; color:#000000">
Pekerjaan</span>
</div>
<div class="pos" id="_250:447" style="top:447;left:250">
<span id="_16.2" style=" font-family:Times New Roman; font-size:16.2px; color:#000000">
: <?php echo $data['PEKERJAAN']; ?></span>
</div>
<div class="pos" id="_100:490" style="top:490;left:100">
<span id="_16.2" style=" font-family:Times New Roman; font-size:16.2px; color:#000000">
Alamat</span>
</div>
<div class="pos" id="_250:490" style="top:490;left:250">
<span id="_16.2" style=" font-family:Times New Roman; font-size:16.2px; color:#000000">
: Desa Klakahkasihan RT 0<?php echo $data['NO_RT']; ?> RW 0<?php echo $data['NO_RW']; ?> Kecamatan Gembong Kabupaten Pati</span>
</div>
<div class="pos" id="_100:533" style="top:533;left:100">
<span id="_16.2" style=" font-family:Times New Roman; font-size:16.2px; color:#000000">
Benar &#150; benar mempunyai usaha <b><i><?php echo $data['keperluan']; ?></i></b></span>
</div>
<div class="pos" id="_100:575" style="top:575;left:100">
<span id="_16.2" style=" font-family:Times New Roman; font-size:16.2px; color:#000000">
Demikian untuk menjadikan maklum dan dapat dipergunakan seperlunya.</span>
</div>
<div class="pos" id="_455:619" style="top:619;left:455">
<span id="_16.2" style=" font-family:Times New Roman; font-size:16.2px; color:#000000">
<?php $date=date('d-m-Y'); ?>
Klakahkasihan, <?php echo $date; ?></span>
</div>
<div class="pos" id="_455:638" style="top:645;left:455">
<span id="_16.2" style=" font-family:Times New Roman; font-size:16.2px; color:#000000">
Kepala Desa Klakahkasihan</span>
</div>
<div class="pos" id="_455:734" style="top:741;left:455">
<span id="_16.2" style=" font-family:Times New Roman; font-size:16.2px; color:#000000">
<?php if($data['ttd']=="Kepala Desa"){
					echo "HANDZIQ SJ";
				}else{
					echo "ALI SHODIQIN, SH.";
				}
			?></span>
</div>
<div class="pos" id="_100:790" style="top:790;left:100">
<span id="_16.2" style="font-weight:bold; font-family:Times New Roman; font-size:16.2px; color:#000000">
KETERANGAN GARAPAN UNTUK USAHA PERTANIAN</span>
</div>
<div class="pos" id="_104:825" style="top:825;left:104">
<span id="_16.2" style=" font-family:Times New Roman; font-size:16.2px; color:#000000">
- Jenis Garapan</span>
</div>
<div class="pos" id="_350:825" style="top:825;left:350">
<span id="_16.2" style=" font-family:Times New Roman; font-size:16.2px; color:#000000">
: Tambak / Sawah / Tegal</span>
</div>
<div class="pos" id="_104:854" style="top:854;left:104">
<span id="_16.2" style=" font-family:Times New Roman; font-size:16.2px; color:#000000">
- Luas</span>
</div>
<div class="pos" id="_350:854" style="top:854;left:350">
<span id="_16.2" style=" font-family:Times New Roman; font-size:16.2px; color:#000000">
: &#133;&#133;&#133;&#133;&#133;Ha</span>
</div>
<div class="pos" id="_104:883" style="top:883;left:104">
<span id="_16.2" style=" font-family:Times New Roman; font-size:16.2px; color:#000000">
- Nama Tambak / Sawah / Tegal</span>
</div>
<div class="pos" id="_104:883" style="top:883;left:350">
<span id="_16.2" style=" font-family:Times New Roman; font-size:16.2px; color:#000000">
: &#133;&#133;&#133;&#133;&#133;&#133;&#133;&#133;&#133;&#133;&#133;&#133;&#133;&#133;&#133;&#133;&#133;</span>
</div>
<div class="pos" id="_104:912" style="top:912;left:104">
<span id="_16.2" style=" font-family:Times New Roman; font-size:16.2px; color:#000000">
- Terletak di Desa</span>
</div>
<div class="pos" id="_349:912" style="top:912;left:349">
<span id="_16.2" style=" font-family:Times New Roman; font-size:16.2px; color:#000000">
: &#133;&#133;&#133;&#133;&#133;&#133;&#133;&#133;&#133;&#133;&#133;&#133;&#133;&#133;&#133;&#133;&#133;</span>
</div>
<div class="pos" id="_104:940" style="top:940;left:104">
<span id="_16.2" style=" font-family:Times New Roman; font-size:16.2px; color:#000000">
- Jenis Bibit</span>
</div>
<div class="pos" id="_350:940" style="top:940;left:350">
<span id="_16.2" style=" font-family:Times New Roman; font-size:16.2px; color:#000000">
: &#133;&#133;&#133;&#133;&#133;&#133;&#133;&#133;&#133;&#133;&#133;&#133;&#133;&#133;&#133;&#133;&#133;</span>
</div>
<div class="pos" id="_104:969" style="top:969;left:104">
<span id="_16.2" style=" font-family:Times New Roman; font-size:16.2px; color:#000000">
- Hasil Tiap Ha</span>
</div>
<div class="pos" id="_349:969" style="top:969;left:349">
<span id="_16.2" style=" font-family:Times New Roman; font-size:16.2px; color:#000000">
: &#133;&#133;&#133;..Ton, &#133;&#133;&#133;&#133;.Kw, &#133;&#133;&#133;&#133;Kg</span>
</div>
</nowrap></nobr>
<?php
	}
?>
		<script>
			window.print();
		</script>
</body>
</html>

<!-- ============================================== KEHILANGAN ============================ -->

<?php 
}else if(@$_GET['data'] == "kehilangan"){	
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
					$sql_tampil = "SELECT tb_surat.nama, tb_surat.keperluan, tb_surat.ttd, tb_surat.nomor_srt,tb_surat.tgl,tb_surat.keterangan, tb_warga.JK, tb_warga.TMPT_LHR, tb_warga.TGL_LHR, tb_warga.AGAMA, tb_warga.PEKERJAAN, tb_warga.STATUS, tb_warga.ALAMAT, tb_warga.NO_RT, tb_warga.NO_RW, tb_warga.NIK, tb_warga.NO_KK FROM tb_surat JOIN tb_warga ON tb_surat.NIK=tb_warga.NIK WHERE id_surat='".$_GET['id']."'";
		            
		            $query_tampil = mysqli_query($kon, $sql_tampil);
		            $no=1;
		            while ($data = mysqli_fetch_array($query_tampil,MYSQLI_BOTH)) {
				?>
		<div class="pos" id="_279:183" style="top:183;left:279">
			<span id="_16.2" style="font-weight:bold; font-family:Times New Roman; font-size:16.2px; color:#000000">
			SURAT KETERANGAN / PENGANTAR</span>
		</div>
		<div class="pos" id="_331:205" style="top:205;left:340">
			<span id="_16.2" style=" font-family:Times New Roman; font-size:16.2px; color:#000000">
			Nomor : 330/ <?php echo $data['nomor_srt']; ?></span>
		</div>
		<div class="pos" id="_481:205" style="top:205;left:460">
			<span id="_16.2" style=" font-family:Times New Roman; font-size:16.2px; color:#000000">
			/2021</span>
		</div>
		<div class="pos" id="_100:241" style="top:230;left:100">
			<span id="_16.2" style=" font-family:Times New Roman; font-size:16.2px; color:#000000">
			Yang bertanda tangan di bawah ini Kepala Desa Klakahkasihan Kecamatan Gembong Kabupaten Pati,</br>menerangkan bahwa :</span>
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
			: <?php echo $data['TMPT_LHR']; ?>, <?php echo date('d-m-Y', strtotime($data['TGL_LHR'])); ?></span>
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
			: <?php echo $data['ALAMAT']; ?> RT 0<?php echo $data['NO_RT']; ?> RW 0<?php echo $data['NO_RW']; ?> Desa Klakahkasihan</span>
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
			: 
			</span>
		</div>
		<div class="pos" id="_350:535" style="top:535;left:358">
			<span id="_16.2" style=" font-family:Times New Roman; font-size:16.2px; color:#000000">
			<?php $str = $data['keperluan'];
					echo wordwrap($str,55,"<br>\n");
			  ?></span>
		</div>
		<div class="pos" id="_125:650" style="top:650;left:125">
			<span id="_16.2" style=" font-family:Times New Roman; font-size:16.2px; color:#000000">
			10. Berlaku Mulai</span>
		</div>
		<div class="pos" id="_349:650" style="top:650;left:349">
			<span id="_16.2" style=" font-family:Times New Roman; font-size:16.2px; color:#000000">
			: <?php echo $data['tgl']; ?> s/d selesai</span>
		</div>
		<div class="pos" id="_125:679" style="top:679;left:125">
			<span id="_16.2" style=" font-family:Times New Roman; font-size:16.2px; color:#000000">
			11. Keterangan Lain-lain</span>
		</div>
		<div class="pos" id="_350:679" style="top:679;left:350">
			<span id="_16.2" style=" font-family:Times New Roman; font-size:16.2px; color:#000000">
			: </span>
		</div>
		<div class="pos" id="_350:679" style="top:679;left:358">
			<span id="_16.2" style=" font-family:Times New Roman; font-size:16.2px; color:#000000">
			<?php 
				$alamat = $data['ALAMAT'];
				$rt = $data['NO_RT'];
				$rw = $data['NO_RW'];
				$ket = $data['keterangan'];
				$str = ("Yang bersangkutan benar-benar warga $alamat RT 0$rt RW 0$rw Desa Klakahkasihan Kec. Gembong Kab. Pati dan $ket");
					echo wordwrap($str,55,"<br>\n");
			  ?></span>
		</div>
		<div class="pos" id="_150:810" style="top:760;left:100">
			<span id="_16.2" style=" font-family:Times New Roman; font-size:16.2px; color:#000000">
			Demikian untuk menjadikan maklum bagi yang berkepentingan</span>
		</div>
		<div class="pos" id="_455:854" style="top:804;left:550">
			<span id="_16.2" style=" font-family:Times New Roman; font-size:16.2px; color:#000000">
			<?php $date=date('d-m-Y'); ?>
			Klakahkasihan, <?php echo $date; ?></span>
		</div>
		<div class="pos" id="_189:873" style="top:830;left:189">
			<span id="_16.2" style=" font-family:Times New Roman; font-size:16.2px; color:#000000">
			Tanda Tangan Pemegang</span>
		</div>
		<div class="pos" id="_189:873" style="top:913;left:189">
			<span id="_16.2" style=" font-family:Times New Roman; font-size:16.2px; color:#000000">
			<?php echo $data['nama']; ?></span>
		</div>
		<div class="pos" id="_455:873" style="top:830;left:550">
			<span id="_16.2" style=" font-family:Times New Roman; font-size:16.2px; color:#000000">
			Kepala Desa Klakahkasihan</span>
		</div>
		<div class="pos" id="_189:873" style="top:913;left:550">
			<span id="_16.2" style=" font-family:Times New Roman; font-size:16.2px; color:#000000">
			<?php if($data['ttd']=="Kepala Desa"){
					echo "HANDZIQ SJ";
				}else{
					echo "ALI SHODIQIN, SH.";
				}
			?></span>
		</div>
		</nowrap></nobr>
		<?php 
			}
		?>
		<script>
			window.print();
		</script>
</body>
</html>

<!-- ========================================== SKTM =================================== -->

<?php
}else if(@$_GET['data'] == "sktm"){
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
				<img name="_1100:850" src="page_sktm.jpg" height="1100" width="850" border="0" usemap="#Map"></div>
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
						$sql_tampil = "SELECT tb_surat.nama, tb_surat.keperluan, tb_surat.ttd, tb_surat.nomor_srt,tb_surat.tgl, tb_warga.JK, tb_warga.TMPT_LHR, tb_warga.TGL_LHR, tb_warga.AGAMA, tb_warga.PEKERJAAN, tb_warga.STATUS, tb_warga.ALAMAT, tb_warga.NO_RT, tb_warga.NO_RW, tb_warga.NIK, tb_warga.NO_KK FROM tb_surat JOIN tb_warga ON tb_surat.NIK=tb_warga.NIK WHERE id_surat='".$_GET['id']."'";
			            
			            $query_tampil = mysqli_query($kon, $sql_tampil);
			            $no=1;
			            while ($data = mysqli_fetch_array($query_tampil,MYSQLI_BOTH)) {
			?>
			<div class="pos" id="_279:183" style="top:183;left:245">
				<span id="_16.2" style="font-weight:bold; font-family:Times New Roman; font-size:16.2px; color:#000000">
				SURAT KETERANGAN TIDAK MAMPU (SKTM)</span>
			</div>
			<div class="pos" id="_331:205" style="top:205;left:345">
				<span id="_16.2" style=" font-family:Times New Roman; font-size:16.2px; color:#000000">
				Nomor : 671/ <?php echo $data['nomor_srt']; ?></span>
			</div>
			<div class="pos" id="_481:205" style="top:205;left:465">
				<span id="_16.2" style=" font-family:Times New Roman; font-size:16.2px; color:#000000">
				/2021</span>
			</div>
			<div class="pos" id="_100:241" style="top:230;left:100">
				<span id="_16.2" style=" font-family:Times New Roman; font-size:16.2px; color:#000000">
				Yang bertanda tangan di bawah ini Kepala Desa Klakahkasihan Kecamatan Gembong Kabupaten Pati,</br>menerangkan bahwa :</span>
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
				  		}
				  ?></span>
			</div>
			<div class="pos" id="_125:334" style="top:334;left:125">
				<span id="_16.2" style=" font-family:Times New Roman; font-size:16.2px; color:#000000">
				3. Tempat/Tanggal Lahir</span>
			</div>
			<div class="pos" id="_349:334" style="top:334;left:349">
				<span id="_16.2" style=" font-family:Times New Roman; font-size:16.2px; color:#000000">
				: <?php echo $data['TMPT_LHR']; ?>, <?php echo date('d-m-Y', strtotime($data['TGL_LHR'])); ?></span>
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
				: <?php echo $data['ALAMAT']; ?> RT 0<?php echo $data['NO_RT']; ?> RW 0<?php echo $data['NO_RW']; ?> Desa Klakahkasihan</span>
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
			<div class="pos" class="rata" id="_350:535" style="top:535;left:350">
				<span id="_16.2" style=" font-family:Times New Roman; font-size:16.2px; color:#000000">
				: 
				 </span>
			</div>
			<div class="pos" class="rata" id="_350:535" style="top:535;left:358">
				<span id="_16.2" style=" font-family:Times New Roman; font-size:16.2px; color:#000000">
				 <?php 
					$str = $data['keperluan'];
					echo wordwrap($str,55,"<br>\n");
				 ?>
				 </span>
			</div>
			<div class="pos" id="_125:650" style="top:650;left:125">
				<span id="_16.2" style=" font-family:Times New Roman; font-size:16.2px; color:#000000">
				10. Berlaku Mulai</span>
			</div>
			<div class="pos" id="_349:650" style="top:650;left:349">
				<span id="_16.2" style=" font-family:Times New Roman; font-size:16.2px; color:#000000">
				: <?php echo $data['tgl']; ?> s/d selesai</span>
			</div>
			<div class="pos" id="_125:679" style="top:679;left:125">
				<span id="_16.2" style=" font-family:Times New Roman; font-size:16.2px; color:#000000">
				11. Keterangan Lain-lain</span>
			</div>
			<div class="pos" id="_350:679" style="top:679;left:350">
				<span id="_16.2" style=" font-family:Times New Roman; font-size:16.2px; color:#000000">
				: Yang bersangkutan benar-benar warga <?php echo $data['ALAMAT']; ?> RT 0<?php echo $data['NO_RT']; ?> RW 0<?php echo $data['NO_RW']; ?> </br>&nbsp;&nbsp;Desa Klakahkasihan Kec. Gembong Kab. Pati dan benar-benar</br>&nbsp;&nbsp;dari keluarga tidak mampu</span>
			</div>
			<div class="pos" id="_150:810" style="top:750;left:100">
				<span id="_16.2" style=" font-family:Times New Roman; font-size:16.2px; color:#000000">
				Demikian untuk menjadikan maklum bagi yang berkepentingan</span>
			</div>
			<div class="pos" id="_455:854" style="top:794;left:550">
				<span id="_16.2" style=" font-family:Times New Roman; font-size:16.2px; color:#000000">
				<?php $date=date('d-m-Y'); ?>
				Klakahkasihan, <?php echo $date; ?></span>
			</div>
			<div class="pos" id="_189:873" style="top:820;left:189">
				<span id="_16.2" style=" font-family:Times New Roman; font-size:16.2px; color:#000000">
				Tanda Tangan Pemegang</span>
			</div>
			<div class="pos" id="_189:873" style="top:907;left:189">
				<span id="_16.2" style=" font-family:Times New Roman; font-size:16.2px; color:#000000">
				<?php echo $data['nama']; ?></span>
			</div>
			<div class="pos" id="_455:873" style="top:820;left:550">
				<span id="_16.2" style=" font-family:Times New Roman; font-size:16.2px; color:#000000">
				Kepala Desa Klakahkasihan</span>
			</div>
			<div class="pos" id="_189:873" style="top:907;left:550">
				<span id="_16.2" style=" font-family:Times New Roman; font-size:16.2px; color:#000000">
				<?php if($data['ttd']=="Kepala Desa"){
						echo "HANDZIQ SJ";
					}else{
						echo "ALI SHODIQIN, SH.";
					}
				?></span>
			</div>
			</nowrap></nobr>
			<?php 
				}
			?>
			<script>
			window.print();
			</script>
</body>
</html>

<!-- ========================================== DOMISILI =================================== -->


<?php
}else if(@$_GET['data'] == "domisili"){
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
				<img name="_1100:850" src="page_domisili.jpg" height="1100" width="850" border="0" usemap="#Map"></div>
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
						$sql_tampil = "SELECT tb_surat.nama, tb_surat.keperluan, tb_surat.ttd, tb_surat.nomor_srt,tb_surat.tgl, tb_warga.JK, tb_warga.TMPT_LHR, tb_warga.TGL_LHR, tb_warga.AGAMA, tb_warga.PEKERJAAN, tb_warga.STATUS, tb_warga.ALAMAT, tb_warga.NO_RT, tb_warga.NO_RW, tb_warga.NIK, tb_warga.NO_KK FROM tb_surat JOIN tb_warga ON tb_surat.NIK=tb_warga.NIK WHERE id_surat='".$_GET['id']."'";
			            
			            $query_tampil = mysqli_query($kon, $sql_tampil);
			            $no=1;
			            while ($data = mysqli_fetch_array($query_tampil,MYSQLI_BOTH)) {
			?>
			<div class="pos" id="_279:183" style="top:183;left:295">
				<span id="_16.2" style="font-weight:bold; font-family:Times New Roman; font-size:16.2px; color:#000000">
				SURAT KETERANGAN DOMISILI</span>
			</div>
			<div class="pos" id="_331:205" style="top:205;left:345">
				<span id="_16.2" style=" font-family:Times New Roman; font-size:16.2px; color:#000000">
				Nomor : 474.4/ <?php echo $data['nomor_srt']; ?></span>
			</div>
			<div class="pos" id="_481:205" style="top:205;left:475">
				<span id="_16.2" style=" font-family:Times New Roman; font-size:16.2px; color:#000000">
				/2021</span>
			</div>
			<div class="pos" id="_100:241" style="top:230;left:100">
				<span id="_16.2" style=" font-family:Times New Roman; font-size:16.2px; color:#000000">
				Yang bertanda tangan di bawah ini Kepala Desa Klakahkasihan Kecamatan Gembong Kabupaten Pati,</br>menerangkan bahwa :</span>
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
				  		}
				  ?></span>
			</div>
			<div class="pos" id="_125:334" style="top:334;left:125">
				<span id="_16.2" style=" font-family:Times New Roman; font-size:16.2px; color:#000000">
				3. Tempat/Tanggal Lahir</span>
			</div>
			<div class="pos" id="_349:334" style="top:334;left:349">
				<span id="_16.2" style=" font-family:Times New Roman; font-size:16.2px; color:#000000">
				: <?php echo $data['TMPT_LHR']; ?>, <?php echo date('d-m-Y', strtotime($data['TGL_LHR'])); ?></span>
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
				: <?php echo $data['ALAMAT']; ?> RT 0<?php echo $data['NO_RT']; ?> RW 0<?php echo $data['NO_RW']; ?> Desa Klakahkasihan</span>
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
			<div class="pos" class="rata" id="_350:535" style="top:535;left:350">
				<span id="_16.2" style=" font-family:Times New Roman; font-size:16.2px; color:#000000">
				: 
				 </span>
			</div>
			<div class="pos" class="rata" id="_350:535" style="top:535;left:358">
				<span id="_16.2" style=" font-family:Times New Roman; font-size:16.2px; color:#000000">
				 <?php 
					$str = $data['keperluan'];
					echo wordwrap($str,55,"<br>\n");
				 ?>
				 </span>
			</div>
			<div class="pos" id="_125:650" style="top:650;left:125">
				<span id="_16.2" style=" font-family:Times New Roman; font-size:16.2px; color:#000000">
				10. Berlaku Mulai</span>
			</div>
			<div class="pos" id="_349:650" style="top:650;left:349">
				<span id="_16.2" style=" font-family:Times New Roman; font-size:16.2px; color:#000000">
				: <?php echo $data['tgl']; ?> s/d selesai</span>
			</div>
			<div class="pos" id="_125:679" style="top:679;left:125">
				<span id="_16.2" style=" font-family:Times New Roman; font-size:16.2px; color:#000000">
				11. Keterangan Lain-lain</span>
			</div>
			<div class="pos" id="_350:679" style="top:679;left:350">
				<span id="_16.2" style=" font-family:Times New Roman; font-size:16.2px; color:#000000">
				: Yang bersangkutan masih tercatat sebagai warga <?php echo $data['ALAMAT']; ?> </br>&nbsp;&nbsp; RT 0<?php echo $data['NO_RT']; ?> RW 0<?php echo $data['NO_RW']; ?> Desa Klakahkasihan Kec. Gembong </br>&nbsp;&nbsp; Kab. Pati</span>
			</div>
			<div class="pos" id="_150:810" style="top:750;left:100">
				<span id="_16.2" style=" font-family:Times New Roman; font-size:16.2px; color:#000000">
				Demikian untuk menjadikan maklum bagi yang berkepentingan</span>
			</div>
			<div class="pos" id="_455:854" style="top:794;left:550">
				<span id="_16.2" style=" font-family:Times New Roman; font-size:16.2px; color:#000000">
				<?php $date=date('d-m-Y'); ?>
				Klakahkasihan, <?php echo $date; ?></span>
			</div>
			<div class="pos" id="_189:873" style="top:820;left:189">
				<span id="_16.2" style=" font-family:Times New Roman; font-size:16.2px; color:#000000">
				Tanda Tangan Pemegang</span>
			</div>
			<div class="pos" id="_189:873" style="top:907;left:189">
				<span id="_16.2" style=" font-family:Times New Roman; font-size:16.2px; color:#000000">
				<?php echo $data['nama']; ?></span>
			</div>
			<div class="pos" id="_455:873" style="top:820;left:550">
				<span id="_16.2" style=" font-family:Times New Roman; font-size:16.2px; color:#000000">
				Kepala Desa Klakahkasihan</span>
			</div>
			<div class="pos" id="_189:873" style="top:907;left:550">
				<span id="_16.2" style=" font-family:Times New Roman; font-size:16.2px; color:#000000">
				<?php if($data['ttd']=="Kepala Desa"){
						echo "HANDZIQ SJ";
					}else{
						echo "ALI SHODIQIN, SH.";
					}
				?></span>
			</div>
			</nowrap></nobr>
			<?php 
				}
			?>
			<script>
			window.print();
			</script>
</body>
</html>

<!-- ===========================================BEDA IDENTITAS===================================== -->

<?php
}else if(@$_GET['data'] == "bedaidentitas"){
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
						$sql_tampil = "SELECT tb_surat.nama, tb_surat.keperluan, tb_surat.ttd, tb_surat.nomor_srt,tb_surat.tgl, tb_warga.JK, tb_warga.TMPT_LHR, tb_warga.TGL_LHR, tb_warga.AGAMA, tb_warga.PEKERJAAN,tb_surat.keterangan, tb_warga.STATUS, tb_warga.ALAMAT, tb_warga.NO_RT, tb_warga.NO_RW, tb_warga.NIK, tb_warga.NO_KK FROM tb_surat JOIN tb_warga ON tb_surat.NIK=tb_warga.NIK WHERE id_surat='".$_GET['id']."'";
			            
			            $query_tampil = mysqli_query($kon, $sql_tampil);
			            $no=1;
			            while ($data = mysqli_fetch_array($query_tampil,MYSQLI_BOTH)) {
			?>
			<div class="pos" id="_279:183" style="top:183;left:279">
				<span id="_16.2" style="font-weight:bold; font-family:Times New Roman; font-size:16.2px; color:#000000">
				SURAT KETERANGAN / PENGANTAR</span>
			</div>
			<div class="pos" id="_331:205" style="top:205;left:345">
				<span id="_16.2" style=" font-family:Times New Roman; font-size:16.2px; color:#000000">
				Nomor : 474.4/ <?php echo $data['nomor_srt']; ?></span>
			</div>
			<div class="pos" id="_481:205" style="top:205;left:475">
				<span id="_16.2" style=" font-family:Times New Roman; font-size:16.2px; color:#000000">
				/2021</span>
			</div>
			<div class="pos" id="_100:241" style="top:230;left:100">
				<span id="_16.2" style=" font-family:Times New Roman; font-size:16.2px; color:#000000">
				Yang bertanda tangan di bawah ini Kepala Desa Klakahkasihan Kecamatan Gembong Kabupaten Pati,</br>menerangkan bahwa :</span>
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
				  		}
				  ?></span>
			</div>
			<div class="pos" id="_125:334" style="top:334;left:125">
				<span id="_16.2" style=" font-family:Times New Roman; font-size:16.2px; color:#000000">
				3. Tempat/Tanggal Lahir</span>
			</div>
			<div class="pos" id="_349:334" style="top:334;left:349">
				<span id="_16.2" style=" font-family:Times New Roman; font-size:16.2px; color:#000000">
				: <?php echo $data['TMPT_LHR']; ?>, <?php echo date('d-m-Y', strtotime($data['TGL_LHR'])); ?></span>
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
				: <?php echo $data['ALAMAT']; ?> RT 0<?php echo $data['NO_RT']; ?> RW 0<?php echo $data['NO_RW']; ?> Desa Klakahkasihan</span>
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
			<div class="pos" class="rata" id="_350:535" style="top:535;left:350">
				<span id="_16.2" style=" font-family:Times New Roman; font-size:16.2px; color:#000000">
				: 
				 </span>
			</div>
			<div class="pos" class="rata" id="_350:535" style="top:535;left:358">
				<span id="_16.2" style=" font-family:Times New Roman; font-size:16.2px; color:#000000">
				 <?php 
					$str = $data['keperluan'];
					echo wordwrap($str,55,"<br>\n");
				 ?>
				 </span>
			</div>
			<div class="pos" id="_125:650" style="top:650;left:125">
				<span id="_16.2" style=" font-family:Times New Roman; font-size:16.2px; color:#000000">
				10. Berlaku Mulai</span>
			</div>
			<div class="pos" id="_349:650" style="top:650;left:349">
				<span id="_16.2" style=" font-family:Times New Roman; font-size:16.2px; color:#000000">
				: <?php echo $data['tgl']; ?> s/d selesai</span>
			</div>
			<div class="pos" id="_125:679" style="top:679;left:125">
				<span id="_16.2" style=" font-family:Times New Roman; font-size:16.2px; color:#000000">
				11. Keterangan Lain-lain</span>
			</div>
			<div class="pos" id="_350:679" style="top:679;left:350">
				<span id="_16.2" style=" font-family:Times New Roman; font-size:16.2px; color:#000000">
				:
				</span>
			</div>
			<div class="pos" id="_350:679" style="top:679;left:358">
				<span id="_16.2" style=" font-family:Times New Roman; font-size:16.2px; color:#000000">
				<?php 
					$str1 = $data['keterangan'];
					echo wordwrap($str1,55,"<br>\n");
				 ?>
				</span>
			</div>
			<div class="pos" id="_150:810" style="top:790;left:100">
				<span id="_16.2" style=" font-family:Times New Roman; font-size:16.2px; color:#000000">
				Demikian untuk menjadikan maklum bagi yang berkepentingan</span>
			</div>
			<div class="pos" id="_455:854" style="top:834;left:550">
				<span id="_16.2" style=" font-family:Times New Roman; font-size:16.2px; color:#000000">
				<?php $date=date('d-m-Y'); ?>
				Klakahkasihan, <?php echo $date; ?></span>
			</div>
			<div class="pos" id="_189:873" style="top:860;left:189">
				<span id="_16.2" style=" font-family:Times New Roman; font-size:16.2px; color:#000000">
				Tanda Tangan Pemegang</span>
			</div>
			<div class="pos" id="_189:873" style="top:947;left:189">
				<span id="_16.2" style=" font-family:Times New Roman; font-size:16.2px; color:#000000">
				<?php echo $data['nama']; ?></span>
			</div>
			<div class="pos" id="_455:873" style="top:860;left:550">
				<span id="_16.2" style=" font-family:Times New Roman; font-size:16.2px; color:#000000">
				Kepala Desa Klakahkasihan</span>
			</div>
			<div class="pos" id="_189:873" style="top:947;left:550">
				<span id="_16.2" style=" font-family:Times New Roman; font-size:16.2px; color:#000000">
				<?php if($data['ttd']=="Kepala Desa"){
						echo "HANDZIQ SJ";
					}else{
						echo "ALI SHODIQIN, SH.";
					}
				?></span>
			</div>
			</nowrap></nobr>
			<?php 
				}
			?>
			<script>
			window.print();
			</script>
</body>
</html>

<!-- ====================================================== TKMR ======================================= -->

<?php
}else if(@$_GET['data'] == "tkmr"){
	?>
	<html>
	<head>
	<title>Cetak Surat TKMR</title>
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
						$sql_tampil = "SELECT tb_surat.nama, tb_surat.keperluan, tb_surat.ttd, tb_surat.nomor_srt,tb_surat.tgl, tb_warga.JK, tb_warga.TMPT_LHR, tb_warga.TGL_LHR, tb_warga.AGAMA, tb_warga.PEKERJAAN,tb_surat.keterangan, tb_warga.STATUS, tb_warga.ALAMAT, tb_warga.NO_RT, tb_warga.NO_RW, tb_warga.NIK, tb_warga.NO_KK FROM tb_surat JOIN tb_warga ON tb_surat.NIK=tb_warga.NIK WHERE id_surat='".$_GET['id']."'";
			            
			            $query_tampil = mysqli_query($kon, $sql_tampil);
			            $no=1;
			            while ($data = mysqli_fetch_array($query_tampil,MYSQLI_BOTH)) {
			?>
			<div class="pos" id="_279:183" style="top:183;left:279">
				<span id="_16.2" style="font-weight:bold; font-family:Times New Roman; font-size:16.2px; color:#000000">
				SURAT KETERANGAN / PENGANTAR</span>
			</div>
			<div class="pos" id="_331:205" style="top:205;left:340">
				<span id="_16.2" style=" font-family:Times New Roman; font-size:16.2px; color:#000000">
				Nomor : 522/ <?php echo $data['nomor_srt']; ?></span>
			</div>
			<div class="pos" id="_481:205" style="top:205;left:460">
				<span id="_16.2" style=" font-family:Times New Roman; font-size:16.2px; color:#000000">
				/2021</span>
			</div>
			<div class="pos" id="_100:241" style="top:230;left:100">
				<span id="_16.2" style=" font-family:Times New Roman; font-size:16.2px; color:#000000">
				Yang bertanda tangan di bawah ini Kepala Desa Klakahkasihan Kecamatan Gembong Kabupaten Pati,</br>menerangkan bahwa :</span>
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
				  		}
				  ?></span>
			</div>
			<div class="pos" id="_125:334" style="top:334;left:125">
				<span id="_16.2" style=" font-family:Times New Roman; font-size:16.2px; color:#000000">
				3. Tempat/Tanggal Lahir</span>
			</div>
			<div class="pos" id="_349:334" style="top:334;left:349">
				<span id="_16.2" style=" font-family:Times New Roman; font-size:16.2px; color:#000000">
				: <?php echo $data['TMPT_LHR']; ?>, <?php echo date('d-m-Y', strtotime($data['TGL_LHR'])); ?></span>
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
				: <?php echo $data['ALAMAT']; ?> RT 0<?php echo $data['NO_RT']; ?> RW 0<?php echo $data['NO_RW']; ?> Desa Klakahkasihan</span>
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
			<div class="pos" class="rata" id="_350:535" style="top:535;left:350">
				<span id="_16.2" style=" font-family:Times New Roman; font-size:16.2px; color:#000000">
				: 
				 </span>
			</div>
			<div class="pos" class="rata" id="_350:535" style="top:535;left:358">
				<span id="_16.2" style=" font-family:Times New Roman; font-size:16.2px; color:#000000">
				 <?php 
					$str = $data['keperluan'];
					echo wordwrap($str,55,"<br>\n");
				 ?>
				 </span>
			</div>
			<div class="pos" id="_125:650" style="top:650;left:125">
				<span id="_16.2" style=" font-family:Times New Roman; font-size:16.2px; color:#000000">
				10. Berlaku Mulai</span>
			</div>
			<div class="pos" id="_349:650" style="top:650;left:349">
				<span id="_16.2" style=" font-family:Times New Roman; font-size:16.2px; color:#000000">
				: <?php echo $data['tgl']; ?> s/d selesai</span>
			</div>
			<div class="pos" id="_125:679" style="top:679;left:125">
				<span id="_16.2" style=" font-family:Times New Roman; font-size:16.2px; color:#000000">
				11. Keterangan Lain-lain</span>
			</div>
			<div class="pos" id="_350:679" style="top:679;left:350">
				<span id="_16.2" style=" font-family:Times New Roman; font-size:16.2px; color:#000000">
				:
				</span>
			</div>
			<div class="pos" id="_350:679" style="top:679;left:358">
				<span id="_16.2" style=" font-family:Times New Roman; font-size:16.2px; color:#000000">
				<?php 
					$str1 = $data['keterangan'];
					echo wordwrap($str1,55,"<br>\n");
				 ?>
				</span>
			</div>
			<div class="pos" id="_150:810" style="top:780;left:100">
				<span id="_16.2" style=" font-family:Times New Roman; font-size:16.2px; color:#000000">
				Demikian untuk menjadikan maklum bagi yang berkepentingan</span>
			</div>
			<div class="pos" id="_455:854" style="top:824;left:550">
				<span id="_16.2" style=" font-family:Times New Roman; font-size:16.2px; color:#000000">
				<?php $date=date('d-m-Y'); ?>
				Klakahkasihan, <?php echo $date; ?></span>
			</div>
			<div class="pos" id="_189:873" style="top:850;left:189">
				<span id="_16.2" style=" font-family:Times New Roman; font-size:16.2px; color:#000000">
				Tanda Tangan Pemegang</span>
			</div>
			<div class="pos" id="_189:873" style="top:937;left:189">
				<span id="_16.2" style=" font-family:Times New Roman; font-size:16.2px; color:#000000">
				<?php echo $data['nama']; ?></span>
			</div>
			<div class="pos" id="_455:873" style="top:850;left:550">
				<span id="_16.2" style=" font-family:Times New Roman; font-size:16.2px; color:#000000">
				Kepala Desa Klakahkasihan</span>
			</div>
			<div class="pos" id="_189:873" style="top:937;left:550">
				<span id="_16.2" style=" font-family:Times New Roman; font-size:16.2px; color:#000000">
				<?php if($data['ttd']=="Kepala Desa"){
						echo "HANDZIQ SJ";
					}else{
						echo "ALI SHODIQIN, SH.";
					}
				?></span>
			</div>
			</nowrap></nobr>
			<?php 
				}
			?>
			<script>
			window.print();
			</script>
</body>
</html>

<!-- ==================================================== BBM ==========================================-->

<?php
}else if(@$_GET['data'] == "bbm"){
	?>
<html>
	<head>
	<title>Cetak Surat BBM</title>
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
					$sql_tampil = "SELECT tb_surat.nama, tb_surat.keperluan, tb_surat.ttd, tb_surat.nomor_srt,tb_Surat.tgl, tb_warga.JK, tb_warga.TMPT_LHR, tb_warga.TGL_LHR, tb_warga.AGAMA, tb_warga.PEKERJAAN, tb_warga.STATUS, tb_warga.ALAMAT, tb_warga.NO_RT, tb_warga.NO_RW, tb_warga.NIK, tb_warga.NO_KK FROM tb_surat JOIN tb_warga ON tb_surat.NIK=tb_warga.NIK WHERE id_surat='".$_GET['id']."'";
		            
		            $query_tampil = mysqli_query($kon, $sql_tampil);
		            $no=1;
		            while ($data = mysqli_fetch_array($query_tampil,MYSQLI_BOTH)) {
				?>
		<div class="pos" id="_279:183" style="top:183;left:279">
			<span id="_16.2" style="font-weight:bold; font-family:Times New Roman; font-size:16.2px; color:#000000">
			SURAT KETERANGAN / PENGANTAR</span>
		</div>
		<div class="pos" id="_331:205" style="top:205;left:340">
			<span id="_16.2" style=" font-family:Times New Roman; font-size:16.2px; color:#000000">
			Nomor : 541/ <?php echo $data['nomor_srt']; ?></span>
		</div>
		<div class="pos" id="_481:205" style="top:205;left:460">
			<span id="_16.2" style=" font-family:Times New Roman; font-size:16.2px; color:#000000">
			/2021</span>
		</div>
		<div class="pos" id="_100:241" style="top:230;left:100">
			<span id="_16.2" style=" font-family:Times New Roman; font-size:16.2px; color:#000000">
			Yang bertanda tangan di bawah ini Kepala Desa Klakahkasihan Kecamatan Gembong Kabupaten Pati,</br>menerangkan bahwa :</span>
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
			: <?php echo $data['TMPT_LHR']; ?>, <?php echo date('d-m-Y', strtotime($data['TGL_LHR'])); ?></span>
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
			: <?php echo $data['ALAMAT']; ?> RT 0<?php echo $data['NO_RT']; ?> RW 0<?php echo $data['NO_RW']; ?> Desa Klakahkasihan</span>
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
			: 
			</span>
		</div>
		<div class="pos" id="_350:535" style="top:535;left:358">
			<span id="_16.2" style=" font-family:Times New Roman; font-size:16.2px; color:#000000">
			<?php $str = $data['keperluan'];
					echo wordwrap($str,55,"<br>\n");
			  ?></span>
		</div>
		<div class="pos" id="_125:650" style="top:620;left:125">
			<span id="_16.2" style=" font-family:Times New Roman; font-size:16.2px; color:#000000">
			10. Berlaku Mulai</span>
		</div>
		<div class="pos" id="_349:650" style="top:620;left:349">
			<span id="_16.2" style=" font-family:Times New Roman; font-size:16.2px; color:#000000">
			: <?php echo $data['tgl']; ?> s/d selesai</span>
		</div>
		<div class="pos" id="_125:679" style="top:649;left:125">
			<span id="_16.2" style=" font-family:Times New Roman; font-size:16.2px; color:#000000">
			11. Keterangan Lain-lain</span>
		</div>
		<div class="pos" id="_350:679" style="top:649;left:350">
			<span id="_16.2" style=" font-family:Times New Roman; font-size:16.2px; color:#000000">
			: Yang bersangkutan benar-benar warga <?php echo $data['ALAMAT']; ?> RT 0<?php echo $data['NO_RT']; ?></br>&nbsp;&nbsp;RW 0<?php echo $data['NO_RW']; ?> Desa Klakahkasihan Kec. Gembong Kab. Pati </br>&nbsp;&nbsp;dan mempunyai usaha sebagai penyedia BBM untuk</br>&nbsp;&nbsp;keperluan home industri</span>
		</div>
		<div class="pos" id="_150:810" style="top:750;left:100">
			<span id="_16.2" style=" font-family:Times New Roman; font-size:16.2px; color:#000000">
			Demikian untuk menjadikan maklum bagi yang berkepentingan</span>
		</div>
		<div class="pos" id="_455:854" style="top:794;left:550">
			<span id="_16.2" style=" font-family:Times New Roman; font-size:16.2px; color:#000000">
			<?php $date=date('d-m-Y'); ?>
			Klakahkasihan, <?php echo $date; ?></span>
		</div>
		<div class="pos" id="_189:873" style="top:820;left:189">
			<span id="_16.2" style=" font-family:Times New Roman; font-size:16.2px; color:#000000">
			Tanda Tangan Pemegang</span>
		</div>
		<div class="pos" id="_189:873" style="top:907;left:189">
			<span id="_16.2" style=" font-family:Times New Roman; font-size:16.2px; color:#000000">
			<?php echo $data['nama']; ?></span>
		</div>
		<div class="pos" id="_455:873" style="top:820;left:550">
			<span id="_16.2" style=" font-family:Times New Roman; font-size:16.2px; color:#000000">
			Kepala Desa Klakahkasihan</span>
		</div>
		<div class="pos" id="_189:873" style="top:907;left:550">
			<span id="_16.2" style=" font-family:Times New Roman; font-size:16.2px; color:#000000">
			<?php if($data['ttd']=="Kepala Desa"){
					echo "HANDZIQ SJ";
				}else{
					echo "ALI SHODIQIN, SH.";
				}
			?></span>
		</div>
		</nowrap></nobr>
		<?php 
			}
		?>
		<script>
			window.print();
		</script>	
</body>
</html>
<?php
}
} ?>
