<?php include '../app/views/templates/header.php'; $no = 1; ?>
<div class="container-fluid">
        <div class="row">
          <div class="col-12">
            <div class="card">
              
              <!-- /.card-header -->
              <div class="card-body bg-purple">
              <a href="<?= urlTo('/user/cetakuser'); ?>" class="btn btn-success float-left">
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-printer-fill" viewBox="0 0 16 16">
  <path d="M5 1a2 2 0 0 0-2 2v1h10V3a2 2 0 0 0-2-2zm6 8H5a1 1 0 0 0-1 1v3a1 1 0 0 0 1 1h6a1 1 0 0 0 1-1v-3a1 1 0 0 0-1-1"/>
  <path d="M0 7a2 2 0 0 1 2-2h12a2 2 0 0 1 2 2v3a2 2 0 0 1-2 2h-1v-2a2 2 0 0 0-2-2H5a2 2 0 0 0-2 2v2H2a2 2 0 0 1-2-2zm2.5 1a.5.5 0 1 0 0-1 .5.5 0 0 0 0 1"/>
</svg> Cetak Laporan</a>           
   <a href="<?= urlTo('/user/create'); ?>" class="btn btn-primary float-left"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-plus-lg" viewBox="0 0 16 16">
  <path fill-rule="evenodd" d="M8 2a.5.5 0 0 1 .5.5v5h5a.5.5 0 0 1 0 1h-5v5a.5.5 0 0 1-1 0v-5h-5a.5.5 0 0 1 0-1h5v-5A.5.5 0 0 1 8 2"/>
</svg> Tambah Data Petugas</a>

                <table id="example1" class="table table-striped table-hover">
                  <thead>
                  <tr> 
                    <th>#</th>
                    <th>Nama Lengkap</th>
                    <th>Email</th>
                    <th>Alamat Lengkap</th>
                    <th>Role</th>
                    <th>Tindakan</th>
                  </tr>
                  </thead>
                  <tbody>
                  <?php foreach ($data as $user): ?>
                  	<tr>
                  		<td><?= $no; ?></td>
                  		<td><?= $user['NamaLengkap']; ?></td>
                  		<td><?= $user['Email']; ?></td>
                  		<td><?= $user['Alamat']; ?></td>
                  		<td><?= $user['Role']; ?></td>
                  		<td>
                  			<?php if($user['Role'] === 'Petugas'): ?>
                          <a href="<?= urlTo('/user/'.$user['UserID'].'/edit') ?>" class="btn btn-warning">
                            Edit
                          </a>
                  			<?php endif ?>
                  			
                        <?php if($user['Role'] !== 'Administrator'): ?>
                          <a href="<?= urlTo('/user/'.$user['UserID'].'/delete') ?>" class="btn btn-danger">
                            Delete
                          </a>
                  			<?php endif ?>
                  		</td>
                  	</tr>
                  	<?php $no++; ?>
                  <?php endforeach ?>
                  </tbody>
                </table>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
          </div>
          <!-- /.col -->
        </div>
        <!-- /.row -->
      </div>
<?php include '../app/views/templates/footer.php'; ?>