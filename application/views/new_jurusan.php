<!DOCTYPE html>
<html lang="en">

<head>
<?php $this->load->view("_partials/head.php") ?>
</head>

<body id="page-top">

<?php $this->load->view("_partials/navbar.php") ?>
 
  <div id="wrapper">

    <!-- Sidebar -->
    <?php $this->load->view("_partials/sidebar.php") ?>

    <div id="content-wrapper">

      <div class="container-fluid">

        <!-- Breadcrumbs-->
        <?php $this->load->view("_partials/breadcrumb.php") ?>

        <!-- Tabel -->
       <div class="card mb-3">
        <?php if ($this->session->flashdata('success')): ?>
           <div class="alert alert-success" role="alert">
              <?php echo $this->session->flashdata('success'); ?>
          </div>
            <?php endif; ?>

            <div class="card-header">
              <span><center>Input Data Tahun Ajaran</center></span>
              <a href="<?php echo site_url('kelas') ?>"><i class="fas fa-arrow-left"></i> Back</a>
             </div>

          <div class="card-body">

            <form action="<?php base_url('/add') ?>" method="post" enctype="multipart/form-data" >

              <div class="form-group">
                <label for="name">Id Jurusan</label>
                <input class="form-control <?php echo form_error('id_jurusan') ? 'is-invalid':'' ?>"
                 type="text" name="id_jurusan" placeholder="Input id Jurusan" />
                <div class="invalid-feedback">
                  <?php echo form_error('id_jurusan') ?>
                </div>
              </div>

                <div class="form-group">
                <label for="name">Jurusan</label>
                <input class="form-control <?php echo form_error('nama_jurusan') ? 'is-invalid':'' ?>"
                 type="text" name="nama_jurusan" placeholder="Input Jurusan" />
                <div class="invalid-feedback">
                  <?php echo form_error('nama_jurusan') ?>
                </div>
              </div>

              <div class="form-group">
                <label for="name">Biaya</label>
                <input class="form-control <?php echo form_error('biaya') ? 'is-invalid':'' ?>"
                 type="text" name="biaya" placeholder="Input biaya" />
                <div class="invalid-feedback">
                  <?php echo form_error('biaya') ?>
                </div>
              </div>

            <input class="btn btn-success" style="width:900px;" type="submit" name="btn" value="Save" /> 
            </form>

          </div>        
          </div>
        </div>

</div>
</div>


      <!-- /.container-fluid -->

      <!-- Sticky Footer -->
      <footer class="sticky-footer">
        <?php $this->load->view("_partials/footer.php") ?>
    <!-- /.content-wrapper -->

  </div>
  <!-- /#wrapper -->

  <!-- Scroll to Top Button-->
<?php $this->load->view("_partials/scrolltop.php") ?>
  <!-- Logout Modal-->
  <?php $this->load->view("_partials/modal.php") ?>


  <!-- Bootstrap core JavaScript-->
  <!-- Core plugin JavaScript-->
  <!-- Page level plugin JavaScript-->
  <!-- Custom scripts for all pages-->
  <!-- Demo scripts for this page-->
<?php $this->load->view("_partials/js.php") ?>

</body>

</html>
