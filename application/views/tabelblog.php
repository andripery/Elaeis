<?php $this->load->view('layout/adminhead');?>

        <!-- Begin Page Content -->
        <div class="container-fluid">

          <!-- Page Heading -->
          <h1 class="h3 mb-2 text-gray-800">Tabel Blog</h1>
          

          <!-- DataTales Example -->
          <div class="card shadow mb-4">
            <div class="card-header py-3">
              <a href="<?php echo site_url('blog/createblog');?>">
              <h6 class="m-0 font-weight-bold text-primary">Tambah Blog</h6>
              </a>
            </div>
            <div class="card-body">
              <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                  <thead>
                    <tr>
                      <th>No</th>
                      <th>Judul</th>
                      <th>Deskripsi</th>
                      <th>Tanggal</th>
                      <th>Bulan</th>
                      <th>Gambar</th>
                      <th>Aksi</th>
                    </tr>
                  </thead>
                  <tbody>
                    <?php
                      foreach ($blog as $key => $value) {
                    ?>
                    <tr>
                      <td><?php echo $key+1 ?></td>
                      <td><?php echo $value->judul; ?></td>
                      <td><?php echo $value->deskripsi; ?></td>
                      <td><?php echo $value->tanggal; ?></td>
                      <td><?php echo $value->bulan; ?></td>
                      <td><img class="card-img rounded-0" src="<?php echo base_url();?>assets/img/blog/<?php echo $value->gambar; ?>" alt=""></td>
                      <td>
                        <a href="<?php echo site_url('welcome/updateblog/'.$value->id_blog);?>" class="btn btn-warning">Edit</a>
                        <a href="<?php echo site_url('welcome/updateblog/'.$value->id_blog);?>" onClick="return confiingin menghapus data ini')" class="btn btn-danger">Delete</a>
                      </td>
                    </tr>
                    <?php } ?>
                  </tbody>
                </table>
              </div>
            </div>
          </div>

        </div>
        <!-- /.container-fluid -->

      </div>
      <!-- End of Main Content -->




      <!-- Footer -->
      <footer class="sticky-footer bg-white">
        <div class="container my-auto">
          <div class="copyright text-center my-auto">
            <span>Copyright &copy; Doa Mertua 2019</span>
          </div>
        </div>
      </footer>
      <!-- End of Footer -->

    </div>
    <!-- End of Content Wrapper -->

  </div>
  <!-- End of Page Wrapper -->

  <!-- Scroll to Top Button-->
  <a class="scroll-to-top rounded" href="<?php echo base_url();?>assets/admin/#page-top">
    <i class="fas fa-angle-up"></i>
  </a>

  <!-- Logout Modal-->
  <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
          <button class="close" type="button" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">×</span>
          </button>
        </div>
        <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
        <div class="modal-footer">
          <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
          <a class="btn btn-primary" href="<?php echo site_url('welcome');?>">Logout</a>
        </div>
      </div>
    </div>
  </div>

  <!-- Bootstrap core JavaScript-->
  <script src="<?php echo base_url();?>assets/admin/vendor/jquery/jquery.min.js"></script>
  <script src="<?php echo base_url();?>assets/admin/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  <!-- Core plugin JavaScript-->
  <script src="<?php echo base_url();?>assets/admin/vendor/jquery-easing/jquery.easing.min.js"></script>

  <!-- Custom scripts for all pages-->
  <script src="<?php echo base_url();?>assets/admin/js/sb-admin-2.min.js"></script>

  <!-- Page level plugins -->
  <script src="<?php echo base_url();?>assets/admin/vendor/chart.js/Chart.min.js"></script>

  <!-- Page level custom scripts -->
  <script src="<?php echo base_url();?>assets/admin/js/demo/chart-area-demo.js"></script>
  <script src="<?php echo base_url();?>assets/admin/js/demo/chart-pie-demo.js"></script>

</body>

</html>
