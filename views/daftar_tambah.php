<div class="container">
    <div class="row">
        <div class="col-xs-12">
            <div class="panel panel-danger">
                <div class="panel-heading">
                    <h3 class="panel-title">Form Data Pegawai</h3>
                </div>
                <div class="panel-body">
                    <!--membuat form untuk tambah data-->
                    <form class="form-horizontal" action="" method="post">
                        <div class="form-group">
                        </div>
						 <div class="form-group">
                            <label for="nip" class="col-sm-3 control-label">NIP</label>
                            <div class="col-sm-9">
                                <input type="text" name="nip" class="form-control" id="inputEmail3" placeholder="Inputkan NIP" required>
                            </div>
                        </div>
						 
						 <div class="form-group">
                            <label for="nama" class="col-sm-3 control-label">Nama</label>
                            <div class="col-sm-9">
                                <input type="text" name="nama" class="form-control" id="inputEmail3" placeholder="Inputkan Nama" required>
                            </div>
                        </div>
						
						 <div class="form-group">
                            <label for="alamat" class="col-sm-3 control-label">Alamat</label>
                            <div class="col-sm-9">
                                <input type="text" name="alamat" class="form-control" id="inputEmail3" placeholder="Inputkan Alamat" required>
                            </div>
						</div>
							
							 <div class="form-group">
                            <label for="tanggallahir" class="col-sm-3 control-label">Tanggal Lahir</label>
                            <div class="col-sm-3">
                                <input type="date" name="tanggallahir" class="form-control" id="inputEmail3" placeholder="Inputkan Tanggal Lahir" required>
                            </div>
                        </div>
						
						 <div class="form-group">
                            <label for="jeniskelamin" class="col-sm-3 control-label">Jenis  Kelamin</label>
                            <div class="col-sm-9">
                                <input type="text" name="jeniskelamin" class="form-control" id="inputEmail3" placeholder="Inputkan Jenis Kelamin" required>
                            </div>
                        </div>
                        </div>
                        

                       
                        </div>
						
                     

 

                       
                        <div class="form-group">
                            <div class="col-sm-offset-3 col-sm-9">
                                <button type="submit" class="btn btn-success">
                                    <span class="fa fa-save"></span> Simpan Data</button>
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
    $sql="INSERT INTO tbl_pegawai (nip,nama,alamat,tanggallahir,jeniskelamin) VALUES ('$nip','$nama','$alamat','$tanggallahir','$jeniskelamin')";
    $query=mysqli_query($koneksi, $sql) or die ("SQL Simpan Data Pegawai Error");
    if ($query){
        echo "<script>window.location.assign('?page=daftar&actions=tampil');</script>";
    }else{
        echo "<script>alert('Simpan Data Gagal');<script>";
    }
    }

?>
