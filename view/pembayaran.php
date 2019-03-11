<?php
require_once('koneksi.php')
?>
<div class="container-fluid">
    <div class="col-lg-12">
      <ol class="breadcrumb"> <h1>INPUT PEMBAYARAN</h1>
            <div class="table-responsive">
        </ol>
      </div>

        <table class="table table-border table-hover table-striped">
          <tr>
            <th>NO.</th>
            <th>NAMA MAHASISWA</th>
            <th>NPM</th>
            <th>KELAS</th>
            <th>ANGKATAN</th>
            <th>PRODI</th>
            <th>AKSI</th>
          </tr>

          <?php 
          $sql = mysqli_query($conn, "SELECT mhs.kode_prodi,npm, nama,nama_prodi ,kelas ,nama_prodi, angkatan,prodi.kode_prodi FROM mhs,prodi where mhs.kode_prodi=prodi.kode_prodi ORDER BY npm ASC");
          $no=1;
          while($data= mysqli_fetch_array($sql)){
          ?>
        <tr>
          <th><?php echo$no?></th>
          <th><?php echo $data['npm'] ?></th>
          <th><?php echo $data['nama']; ?></th>
          <th><?php echo $data ['kelas'];?></th>
          <th><?php echo $data['angkatan'];?> </th>
          <th><?php echo $data['nama_prodi'];?> </th>
          <th><a href="?page=input_bayar&ambil=<?php echo $data['npm'];?>">
            <button class="btn btn-info btn-xs"><i class="fa fa-edit"></i>INPUT PEMBAYARAN</button></a>
          </th>

        </tr>
        <?php 
        $no++;
      }
      ?> 
        </table>
        
      </div>
    </div>
</div>