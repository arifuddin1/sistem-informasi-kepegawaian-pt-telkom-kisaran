<?php
$id=$_GET['id'];
$ambil=  mysqli_query($koneksi, "SELECT * FROM tbl_pegawai WHERE nip ='$id'") or die ("SQL Edit error");
$data= mysqli_fetch_array($ambil);
?>
<div class="container">
    <div class="row">
        <div class="col-xs-12">
            <div class="panel panel-success">
                <div class="panel-heading">
                    <h3 class="panel-title">Form Update Data Pegawai</h3>
                </div>
                <div class="panel-body">
                    <!--membuat form untuk tambah data-->
                    <form class="form-horizontal" action="" method="post">
                        
                        <div class="form-group">
                            <label for="nip" class="col-sm-3 control-label">NIP</label>
                            <div class="col-sm-9">
                                <input type="text" name="nip" value="<?=$data['nip']?>"class="form-control" id="inputEmail3" placeholder="NIP">
                            </div>
                        </div>
						
						<div class="form-group">
                            <label for="nama" class="col-sm-3 control-label">Nama</label>
                            <div class="col-sm-9">
                                <input type="text" name="nama" value="<?=$data['nama']?>"class="form-control" id="inputEmail3" placeholder="Nama">
                            </div>
						</div>
							
						<div class="form-group">
                            <label for="alamat" class="col-sm-3 control-label">Alamat</label>
                            <div class="col-sm-9">
                                <input type="text" name="alamat" value="<?=$data['alamat']?>"class="form-control" id="inputEmail3" placeholder="Alamat">
                            </div>
                        </div>
						
						<div class="form-group">
                            <label for="tanggallahir" class="col-sm-3 control-label">Tanggal lahir</label>
                            <div class="col-sm-3">
                                <input type="date" name="tanggallahir" value="<?=$data['tanggallahir']?>"class="form-control" id="inputEmail3" placeholder="Tanggal Lahir">
                            </div>
                        </div>
						
							<div class="form-group">
                            <label for="jeniskelamin" class="col-sm-3 control-label">Jenis Kelamin</label>
                            <div class="col-sm-9">
                                <input type="text" name="jeniskelamin" value="<?=$data['jeniskelamin']?>"class="form-control" id="inputEmail3" placeholder="Jenis Kelamin" >
                            </div>
                        </div>
						
                        
                       
                        <div class="form-group">
                            <div class="col-sm-offset-3 col-sm-9">
                                <button type="submit" class="btn btn-danger">
                                    <span class="fa fa-edit"></span> Update Data Pegawai</button>
                            </div>
                        </div>
                    </form>


                </div>
                <div class="panel-footer">
                    <a href="?page=daftar&actions=tampil" class="btn btn-danger btn-sm">
                        Kembali Ke Data Pegawai
                    </a>
                </div>
            </div>

        </div>
    </div>
</div>

<?php 
if($_POST){
    //Ambil data dari form
        $nip=$_POST['nip'];
	$nama=$_POST['nama'];
	$alamat=$_POST['alamat'];
	$tanggallahir=$_POST['tanggallahir'];
 $jeniskelamin=$_POST['jeniskelamin'];
    //buat sql
    $sql="UPDATE tbl_pegawai SET nip='$nip',nama='$nama',alamat='$alamat',tanggallahir='$tanggallahir',jeniskelamin='$kjeniskelamin' WHERE nip ='$id'"; 
    $query=  mysqli_query($koneksi, $sql) or die ("SQL Edit MHS Error");
    if ($query){
        echo "<script>window.location.assign('?page=daftar&actions=tampil');</script>";
    }else{
        echo "<script>alert('Edit Data Gagal');<script>";
    }
    }

?>



