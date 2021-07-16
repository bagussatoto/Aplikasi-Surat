<?php
    if(isset($_GET['kode'])){
    $sql_hapus = "DELETE FROM tb_surat WHERE id_surat='".$_GET['kode']."'";
                if($_GET['jns']=='bbm'){
                    $sql_hapus1 = "DELETE FROM tb_bbm WHERE id='".$_GET['nmr']."'";
                    $query_hapus = mysqli_query($koneksi, $sql_hapus1);
                }else if($_GET['jns']=='skck'){
                    $sql_hapus2 = "DELETE FROM tb_rck WHERE id='".$_GET['nmr']."'";
                    $query_hapus = mysqli_query($koneksi, $sql_hapus2);
                }else if($_GET['jns']=='domisili'){
                    $sql_hapus3 = "DELETE FROM tb_datadirinasabah WHERE id='".$_GET['nmr']."'";
                    $query_hapus = mysqli_query($koneksi, $sql_hapus3);
                }else if($_GET['jns']=='ket_umum'){
                    $sql_hapus4 = "DELETE FROM tb_hutang WHERE id='".$_GET['nmr']."'";
                    $query_hapus = mysqli_query($koneksi, $sql_hapus4);
                }else if($_GET['jns']=='rck'){
                    $sql_hapus5 = "DELETE FROM tb_rck WHERE id='".$_GET['nmr']."'";
                    $query_hapus = mysqli_query($koneksi, $sql_hapus5);
                }else if($_GET['jns']=='sku'){
                    $sql_hapus6 = "DELETE FROM tb_hutang WHERE id='".$_GET['nmr']."'";
                    $query_hapus = mysqli_query($koneksi, $sql_hapus6);
                }else if($_GET['jns']=='kehilangan'){
                    $sql_hapus7 = "DELETE FROM tb_kehilangan WHERE id='".$_GET['nmr']."'";
                    $query_hapus = mysqli_query($koneksi, $sql_hapus7);
                }else if($_GET['jns']=='sktm'){
                    $sql_hapus8 = "DELETE FROM tb_kettdkmampu WHERE id='".$_GET['nmr']."'";
                    $query_hapus = mysqli_query($koneksi, $sql_hapus8);
                }else if($_GET['jns']=='bedaidentitas'){
                    $sql_hapus9 = "DELETE FROM tb_datadirinasabah WHERE id='".$_GET['nmr']."'";
                    $query_hapus = mysqli_query($koneksi, $sql_hapus9);
                }else if($_GET['jns']=='tkmr'){
                    $sql_hapus10 = "DELETE FROM tb_tkmr WHERE id='".$_GET['nmr']."'";
                    $query_hapus = mysqli_query($koneksi, $sql_hapus10);
                }else{
                    echo ("GAGAL");
                }
    
    $query_hapus = mysqli_query($koneksi, $sql_hapus);
    if ($query_hapus) {
        echo "<script>
        Swal.fire({title: 'Hapus Data Berhasil',text: '',icon: 'success',confirmButtonText: 'OK'
        }).then((result) => {if (result.value) {window.location = 'index.php?page=data-surat'
        ;}})</script>";
        }else{
        echo "<script>
        Swal.fire({title: 'Hapus Data Gagal',text: '',icon: 'error',confirmButtonText: 'OK'
        }).then((result) => {if (result.value) {window.location = 'index.php?page=data-surat'
        ;}})</script>";
    }
}
