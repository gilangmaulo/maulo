<div class="container mt-4">
	<div class="row">
	
</div>

<div class="row">
	<table class="table table-striped table-Secondary">
  <thead class="thead-dark">
    <tr>
      <th scope="col">No</th>
      <th scope="col">Nama Karyawan</th>
      <th scope="col">Tanggal Izin</th>
      <th scope="col">Jenis Izin</th>
      <th scope="col">Lama Izin</th>
      <th scope="col">Action</th>
    </tr>
  </thead>
  <tbody>
        <?php foreach ($data['izin'] as $value): ?>
      <tr>
        <td><?php echo $value["id"] ?></td>
        <td><?php echo $value["nama"] ?></td>
        <td><?php echo $value["tanggal"] ?></td>
        <td><?php echo $value["tipe_izin"] ?></td>      
        <td><?php echo $value["lama_izin"] ?></td>
        
        <td><a href="<?php echo BASEURL; ?>/izin/hapus/<?php echo $value['id']; ?>
            " class="badge badge-danger float-right ml-1"
            onclick="return confirm('Apakah anda yakin ingin menghapus data ini?'); ">Hapus</a>
            <a href="<?php echo BASEURL; ?>/izin/edit/<?php echo $value['id']; ?>
            " class="badge badge-success float-right ml-1 tampilModalEdit" 
            data-toggle="modal" data-target="#forModal" data-id="<?php echo $value['id']; ?>">Edit</a></td>
      </tr>
    <?php endforeach; ?>
  </tbody>
</table>
</div>

<!-- Button trigger modal -->
<button type="button" class="btn btn-primary tombolTambahData" data-toggle="modal" data-target="#forModal">
  Tambah Data Izin
</button>

<!-- Modal -->
<div class="modal fade" id="forModal" tabindex="-1" role="dialog" aria-labelledby="forModal" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="judulModalLabel">Tambah Data Izin</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        
        <form action="<?php echo BASEURL; ?>/izin/tambah" method="post">
        <input type="hidden" name="id" id="id">
        
        <div class="form-group">
          <label for="exampleFormControlSelect1">Nama Karyawan</label>
          <select class = "form-control" name="id_karyawan" id="id_karyawan">
            <?php foreach($data['karyawan'] as $karyawan): ?>
            <option value="<?php echo $karyawan['id']; ?>"><?php echo $karyawan['nama']; ?></option>
          <?php endforeach; ?>
          </select>
        </div>
        <div class="form-group">
          <label for="area">Tanggal</label>
          <input type="date" class="form-control" id="tanggal" name="tanggal">
        </div>
        <div class="form-group">
    <label for="exampleFormControlSelect1">Tipe Izin</label>
    <select class="form-control" id="tipe_izin" name="tipe_izin">
      <option value="Sakit">Sakit</option>
      <option value="Perjalanan Dinas">Perjalanan Dinas</option>
      <option value="Keperluan Lainnya">Keperluan Lainnya</option>
    </select>
  </div>
  <div class="form-group">
          <label for="area">Lama Izin</label>
          <input type="text" class="form-control" id="lama_izin" name="lama_izin">
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
</div>
<script src="<?php echo BASEURL; ?>/js/izin.js"></script>