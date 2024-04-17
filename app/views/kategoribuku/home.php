<?php include '../app/views/templates/header.php'; $no = 1; ?>
<div class="container-fluid">
        <div class="row">
          <div class="col-12">
            <div class="card">
              <!-- /.card-header -->
              <div class="card-body bg-purple">
              <a href="<?= urlTo('/kategoribuku/create'); ?>" class="btn btn-primary float-left"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-plus-lg" viewBox="0 0 16 16">
  <path fill-rule="evenodd" d="M8 2a.5.5 0 0 1 .5.5v5h5a.5.5 0 0 1 0 1h-5v5a.5.5 0 0 1-1 0v-5h-5a.5.5 0 0 1 0-1h5v-5A.5.5 0 0 1 8 2"/>
</svg>  Tambah Kategori</a>
                <table id="example1" class="table table-striped table-hover">
                  <thead>
                  <tr>
                    <th>#</th>
                    <th>Nama Kategori</th>
                    <th>Tindakan</th>
                  </tr>
                  </thead>
                  <tbody>
                  <?php foreach ($data as $k): ?>
                    <tr>
                    <tr>
                  		<td><?= $no; ?></td>
                  		<td><?= $k['NamaKategori']; ?></td>
                      <td>
                        <a 
                        href="<?= urlTo('/kategoribuku/'.$k['KategoriID'].'/edit') ?>"
                        class="btn btn-warning
                        ">
                          Edit
                        </a>

                        <a 
                        href="<?= urlTo('/kategoribuku/'.$k['KategoriID'].'/delete') ?>"
                        class="btn btn-danger
                        ">
                          Delete
                        </a>
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