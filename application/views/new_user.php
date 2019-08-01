<!DOCTYPE html>
<html lang="en">

<head>
<?php $this->load->view("_partials/head.php") ?>
</head>

<body id="page-top">

<?php $this->load->view("_partials/navbar.php") ?>
 
 
  <div id="wrapper">

    <?php $this->load->view("_partials/sidebar.php") ?>

    <div id="content-wrapper">

      <div class="container-fluid">

        <?php $this->load->view("_partials/breadcrumb.php") ?>

        <?php if ($this->session->flashdata('success')): ?>
        <div class="alert alert-success" role="alert">
          <?php echo $this->session->flashdata('success'); ?>
        </div>
        <?php endif; ?>

        <div class="card mb-3">
          <div class="card-header">
            <a href="<?php echo site_url('user/petugas/') ?>"><i class="fas fa-arrow-left"></i> Back</a>
          </div>
          <div class="card-body">

            <form action="<?php base_url('user/add') ?>" method="post" enctype="multipart/form-data" >
              <div class="form-group">
                <label for="name">Id User</label>
                <input class="form-control <?php echo form_error('iduser') ? 'is-invalid':'' ?>"
                 type="text" name="iduser" placeholder="Input id user" />
                <div class="invalid-feedback">
                  <?php echo form_error('iduser') ?>
                </div>
              </div>

              <div class="form-group">
                <label for="name">Nama User</label>
                <input class="form-control <?php echo form_error('nama_user') ? 'is-invalid':'' ?>"
                 type="text" name="nama_user" placeholder="Input nama user" />
                <div class="invalid-feedback">
                  <?php echo form_error('nama_user') ?>
                </div>
              </div>

              <div class="form-group">
                <label for="name">Username</label>
                <input class="form-control <?php echo form_error('username') ? 'is-invalid':'' ?>"
                 type="text" name="username" placeholder="Input username" />
                <div class="invalid-feedback">
                  <?php echo form_error('username') ?>
                </div>
              </div>


              <div class="form-group">
                <label for="name">Password</label>
                <input class="form-control <?php echo form_error('password') ? 'is-invalid':'' ?>"
                 type="text" name="password" placeholder="Input password" />
                <div class="invalid-feedback">
                  <?php echo form_error('password') ?>
                </div>
              </div>

              <div class="form-group">
                 <label class="control-label col-md-3 col-sm-3 col-xs-12">Pilih Level</label>
                   <div class="col-md-9 col-sm-9 col-xs-12 ">
                      <select class="form-control ">
                      <option>Petugas TU</option>
                      <option>Kepala Sekolah</option>
                          </select>
                        </div>
                </div>


              <input class="btn btn-success" type="submit" name="btn" value="Save" />
            </form>

          </div>

          <div class="card-footer small text-muted">
            * required fields
          </div>


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
