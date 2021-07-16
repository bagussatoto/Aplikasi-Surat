<?php
@session_start();
include "inc/koneksi.php";
if (isset($_SESSION["ses_username"])==""){
    header("location: login.php");
    
    }else{
      $data_id = $_SESSION["ses_id"];
      $data_nama = $_SESSION["ses_nama"];
      $data_user = $_SESSION["ses_username"];
      $data_level = $_SESSION["ses_level"];
    }
?>
<div class="card card-primary">
    <div class="card-header">
        <h3 class="card-title">
            <i class="fa fa-edit"></i> Tambah Data</h3>
    </div>
    <form action="" method="post" enctype="multipart/form-data">
        <div class="card-body">

            <div class="form-group row">
                <div class="col-sm-5">
                    <input type="text" class="search" id="nik" name="nik" placeholder="Tuliskan NIK Disini">
                    <input type="submit" name="cari" value="Cari" class="btn btn-success ">
                    <a href="?page=ket-bbm-blm" title="Kembali" class="btn btn-info">Data Belum Ada</a>
                </div>
            </div>

            <?php
              if (isset($_POST['cari'])){
                $sql = mysqli_query($koneksi,"SELECT * FROM tb_warga WHERE NIK= '".$_POST['nik']."'");
                               
                $data = mysqli_fetch_array($sql);
                if ($data['NIK']==false OR Null)
                { echo "<script>
                    Swal.fire({title: 'Data Tidak Ditemukan',text: '',icon: 'error',confirmButtonText: 'OK'
                    }).then((result) => {if (result.value)
                        {window.location = '?page=ket-bbm';}
                    })</script>";
                  
                }else
                   {
              ?>
            <div class="form-group row">
                <label class="col-sm-2 col-form-label">NIK</label>
                <div class="col-sm-5">
                    <input type="text" class="form-control" id="nik1" name="nik1" value="<?php echo $data['NIK'] ?>" required>
                </div>
            </div>
            <div class="form-group row">
                <label class="col-sm-2 col-form-label">Nama</label>
                <div class="col-sm-5">
                    <input type="text" class="form-control" id="nama" name="nama" value="<?php echo $data['NAMA'] ?>" placeholder="Nama" required>
                </div>
            </div>

            <div class="form-group row">
                <label class="col-sm-2 col-form-label">Tempat Lahir</label>
                <div class="col-sm-5">
                    <input type="text" class="form-control" id="tplahir" name="tplahir" value="<?php echo $data['TMPT_LHR'] ?>" placeholder="Tempat Lahir" required>
                </div>
            </div>

            <div class="form-group row">
                <label class="col-sm-2 col-form-label">Tanggal Lahir</label>
                <div class="col-sm-5">
                    <input type="text" class="form-control" id="tgl_lhr" name="tgl_lhr" value="<?php echo $data['TGL_LHR'] ?>" placeholder="Tanggal Lahir" required>
                </div>
            </div>

            <div class="form-group row">
                <label class="col-sm-2 col-form-label">Agama</label>
                <div class="col-sm-5">
                    <input type="text" class="form-control" id="agama" name="agama" value="<?php echo $data['AGAMA'] ?>" placeholder="Agama" required>
                </div>
            </div>

            <div class="form-group row">
                <label class="col-sm-2 col-form-label">Pekerjaan</label>
                <div class="col-sm-5">
                    <input type="text" class="form-control" id="pekerjaan" name="pekerjaan" value="<?php echo $data['PEKERJAAN'] ?>" placeholder="Pekerjaan" required>
                </div>
            </div>

            <div class="form-group row">
                <label class="col-sm-2 col-form-label">Status</label>
                <div class="col-sm-5">
                    <input type="text" class="form-control" id="status" name="status" value="<?php echo $data['STATUS'] ?>" placeholder="Status" required>
                </div>
            </div>

            <div class="form-group row">
                <label class="col-sm-2 col-form-label">Tempat Tinggal</label>
                <div class="col-sm-5">
                    <input type="text" class="form-control" id="tp_tinggal" name="tp_tinggal" value="<?php echo $data['ALAMAT']?>" placeholder="Tempat Tinggal" required>
                </div>
            </div>

            <div class="form-group row">
                <label class="col-sm-2 col-form-label">No KK</label>
                <div class="col-sm-5">
                    <input type="text" class="form-control" id="no_kk" name="no_kk" value= "<?php echo $data['NO_KK'] ?>" placeholder="No KK" required>
                </div>
            </div>

            <div class="form-group row">
                <label class="col-sm-2 col-form-label">Keperluan</label>
                <div class="col-sm-5">
                    <textarea type="text" class="form-control" id="perlu" name="perlu" placeholder="Keperluan" required></textarea>
                </div>
            </div>
            <div class="form-group row">
            <div class="col-sm-2">
                            <?php
                                     $db = mysqli_connect("localhost","root","","desa_adm");
                                     $sql = "select * from tb_pejabat";
                                     $q = mysqli_query($db,$sql);
                                     $jsArray = "var dtPel = new Array();";
                                     echo '<label>Yang Tanda Tangan :</label>

                                    <select name="ttd" class="form-control" onchange="changeValue(this.value)" required="">';
                                    echo '<option value="" ></option>';
                                    while($data = mysqli_fetch_array($q)){
                                      echo '<option value="'.$data['jabatan'].'">'.$data['jabatan'].'</option>';
                                      $jsArray .= "dtPel['" . $data['jabatan'] . "'] = {nam:'" . addslashes($data['nama']) . "',id_pejabat:'" . addslashes($data['id_pejabat']) . "'};";  
                                    }
                                    echo '</select>';

                            ?>
            </div></div>
                            <?php
                              $date=date('d-m-Y');
                            ?>
            <input type="hidden" class="form-control" id="tgl" name="tgl" value= "<?php echo $date; ?>">
            <input type="hidden" class="form-control" id="nm" name="nm" value= "<?php echo $data_nama; ?>">
            <input type="hidden" class="form-control" id="jns" name="jns" value= "bbm">
                
                                    <?php
                                           $kon = mysqli_connect("localhost","root","","desa_adm");

                                      $carikode = mysqli_query($kon, "select max(id_surat) from tb_surat") or die (mysql_error());
                                      // menjadikannya array
                                      $datakode = mysqli_fetch_array($carikode);
                                      // jika $datakode
                                      if ($datakode) {
                                       $nilaikode = substr($datakode[0], 2);
                                       // menjadikan $nilaikode ( int )
                                       $kode = (int) $nilaikode;
                                       // setiap $kode di tambah 1
                                       $kode = $kode + 1;
                                       $kode_otomatis = "S".str_pad($kode, 9, "0", STR_PAD_LEFT);
                                      } else {
                                       $kode_otomatis = "S000000001";
                                      }
                                      ?>
            <input type="hidden" class="form-control" id="id" name="id" value="<?php echo $kode_otomatis; ?>">
                                    <?php
                                           $kon = mysqli_connect("localhost","root","","desa_adm");

                                      $carikodee = mysqli_query($kon, "select max(id) from tb_bbm") or die (mysql_error());
                                      // menjadikannya array
                                      $datakodee = mysqli_fetch_array($carikodee);
                                      // jika $datakode
                                      if ($datakodee) {
                                       $nilaikodee = substr($datakodee[0], 2);
                                       // menjadikan $nilaikode ( int )
                                       $kodee = (int) $nilaikodee;
                                       // setiap $kode di tambah 1
                                       $kodee = $kodee + 1;
                                       $kodee_otomatis = str_pad($kodee, 3, "0", STR_PAD_LEFT);
                                      } else {
                                       $kodee_otomatis = "001";
                                      }
                                      ?>
            <input type="hidden" class="form-control" id="id_rck" name="id_bbm" value="<?php echo $kodee_otomatis; ?>">
        </div>
        <div class="card-footer">
            <input type="submit" name="Simpan" value="Simpan" class="btn btn-info">
            <a href="?page=ket-bbm" title="Kembali" class="btn btn-warning">Batal</a>
        </div>
    </form>
</div>
        <?php
            }
        }
         ?>

    <?php

        if (isset ($_POST['Simpan'])){
        //mulai proses simpan data
            $sql_simpan1 = "INSERT INTO tb_bbm (id,tgl,NIK,id_surat) VALUES ('".$_POST['id_bbm']."','".$_POST['tgl']."','".$_POST['nik1']."','".$_POST['id']."')";
            $sql_simpan = "INSERT INTO tb_surat (id_surat,namapetugas,nomor_srt,tgl,nik,nama,no_kk,keperluan,jenis,ttd) VALUES (
            '".$_POST['id']."',
            '".$_POST['nm']."',
            '".$_POST['id_bbm']."',
            '".$_POST['tgl']."',
            '".$_POST['nik1']."',
            '".$_POST['nama']."',
            '".$_POST['no_kk']."',
            '".$_POST['perlu']."',
            '".$_POST['jns']."',
            '".$_POST['ttd']."')";
            $query_simpan = mysqli_query($koneksi, $sql_simpan);
            $query_simpan = mysqli_query($koneksi, $sql_simpan1);
            mysqli_close($koneksi);
            
        if ($query_simpan) {
          echo "<script>
          Swal.fire({title: 'Tambah Data Berhasil',text: '',icon: 'success',confirmButtonText: 'OK'
          }).then((result) => {if (result.value){
              window.location = 'index.php?page=data-surat';
              }
          })</script>";
          }else{
          echo "<script>
          Swal.fire({title: 'Tambah Data Gagal',text: '',icon: 'error',confirmButtonText: 'OK'
          }).then((result) => {if (result.value){
              window.location = 'index.php?page=ket-bbm';
              }
          })</script>";
        }}
     //selesai proses simpan data
