<div class="container mt-5">
	<div class="row">
   <table class="table table-striped table-Secondary">
      <thead class="thead-dark">
        <tr>
            <th scope="col">No</th>
            <th scope="col">Nama</th>
            <th scope="col">Alamat</th>
            <th scope="col">No Telepon</th>
            <th scope="col">Jabatan</th>
               <th>action</th>
        </tr>
  </thead>
  <tbody>
    <?php foreach ($data['karyawan'] as $value): ?>
      <tr>
        <td><?php echo $value["id"] ?></td>
        <td><?php echo $value["nama"] ?></td>
        <td><?php echo $value["alamat"] ?></td>
        <td><?php echo $value["no_telpon"] ?></td>
        <td><?php echo $value["jabatan"] ?></td>
        <td><a href="<?php echo BASEURL; ?>/karyawan/hapus/<?php echo $value['id']; ?>
            " class="badge badge-danger float-right ml-1"
            onclick="return confirm('Apakah anda yakin ingin menghapus data ini?'); ">Hapus</a>
            <a href="<?php echo BASEURL; ?>/karyawan/edit/<?php echo $value['id']; ?>
            " class="badge badge-success float-right ml-1 tampilModalEdit" 
            data-toggle="modal" data-target="#forModal" data-id="<?php echo $value['id']; ?>">Edit</a></td>
      </tr>
    <?php endforeach; ?>    
  </tbody>
</table>
</div>

<!-- Button trigger modal -->
<button type="button" class="btn btn-primary tombolTambahData" data-toggle="modal" data-target="#forModal">
  Tambah Data Karyawan
</button>

<!-- Modal -->
<div class="modal fade" id="forModal" tabindex="-1" role="dialog" aria-labelledby="forModal" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="judulModalLabel">Tambah Data Karyawan</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        
        <form action="<?php echo BASEURL; ?>/karyawan/tambah" method="post">
        <input type="hidden" name="id" id="id">
          <div class="form-group">
          <label for="nama">Nama</label>
          <input type="text" class="form-control" id="nama" name="nama">
        </div>

        <div class="form-group">
          <label for="area">Alamat</label>
          <input type="text" class="form-control" id="alamat" name="alamat">
        </div>

        <div class="form-group">
          <label for="telepon">No Telepon</label>
          <input type="number" class="form-control" id="no_telpon" name="no_telpon">
        </div>

        <div class="form-group">
          <label for="foto">Jabatan</label>
          <input type="foto" class="form-control" id="jabatan" name="jabatan">
          </div>
    
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary">Tambah Data</button>
        </form>
      </div>
    </div>
  </div>
</div>



<script src="<?php echo BASEURL; ?>/js/karyawan.js"></script>

