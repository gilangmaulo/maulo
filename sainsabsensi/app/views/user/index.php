<div class="container mt-5">
	<div class="row">
   <table class="table table-striped table-Secondary">
      <thead class="thead-dark">
        <tr>
            <th scope="col">No</th>
            <th scope="col">Username</th>
            <th scope="col">Password</th>
            <th scope="col">Level</th>
               <th>action</th>
        </tr>
  </thead>
  <tbody>
    <?php foreach ($data['user'] as $value): ?>
      <tr>
        <td><?php echo $value["id"] ?></td>
        <td><?php echo $value["username"] ?></td>
        <td><?php echo $value["password"] ?></td>
        <td><?php echo $value["level"] ?></td>
        <td><a href="<?php echo BASEURL; ?>/user/hapus/<?php echo $value['id']; ?>
            " class="badge badge-danger float-right ml-1"
            onclick="return confirm('Apakah anda yakin ingin menghapus data ini?'); ">Hapus</a>
            <a href="<?php echo BASEURL; ?>/user/edit/<?php echo $value['id']; ?>
            " class="badge badge-success float-right ml-1 tampilModalEdit" 
            data-toggle="modal" data-target="#forModal" data-id="<?php echo $value['id']; ?>">Edit</a></td>
      </tr>
    <?php endforeach; ?>    
  </tbody>
</table>
</div>

<!-- Button trigger modal -->
<button type="button" class="btn btn-primary tombolTambahData" data-toggle="modal" data-target="#forModal">
  Tambah Data User
</button>

<!-- Modal -->
<div class="modal fade" id="forModal" tabindex="-1" role="dialog" aria-labelledby="forModal" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="judulModalLabel">Tambah Data User</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        
        <form action="<?php echo BASEURL; ?>/user/tambah" method="post">
        <input type="hidden" name="id" id="id">
          <div class="form-group">
          <label for="nama">Username</label>
          <input type="text" class="form-control" id="username" name="username">
        </div>

        <div class="form-group">
          <label for="area">Password</label>
          <input type="text" class="form-control" id="password" name="password">
        </div>

        <div class="form-group">
          <label for="telepon">level</label>
          <input type="number" class="form-control" id="level" name="level">
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



<script src="<?php echo BASEURL; ?>/js/user.js"></script>

