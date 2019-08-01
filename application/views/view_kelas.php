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
          <div class="card-header">
          	<span><center>Data Kelas</center></span>
          	
            <a href="<?php echo site_url('kelas/add') ?>"><i class="fas fa-plus"></i> Add New</a>
          </div>
          </div>
          <div class="card-body">

            <div class="table-responsive">
              <table class="table table-hover" id="dataTable" width="100%" cellspacing="0">
                <thead>
                  <tr>
                    <th>No</th>
                    <th>Id kelas</th>
                    <th>Kelas</th>
                    <th>Jurusan</th>
                    <th>Biaya</th>
                    <th>Action</th>
                  </tr>
                </thead>
                <tbody>
                  <?php 
                  $no = 0;
                  foreach ($ruangkelas as $ruangkelas): 
                  $no++  ?>
                  <tr>
                    <td width="150">
                    <?=$no?>
                    </td>
                    <td>
                      <?php echo $ruangkelas->id_kelas ?>
                    </td>
                    <td>
                      <?php echo $ruangkelas->kelas ?>
                    </td>
                    <td>
                      <?php echo $ruangkelas->nama_jurusan ?>
                    </td>
                     <td>
                      <?php echo $ruangkelas->biaya ?>
                    </td>
                    
                    <!-- <td>
                      <?php echo $ruangkelas->biaya ?>
                    </td>  -->
                
                    <td width="250">
                      <a href="<?php echo site_url('kelas/edit/'.$ruangkelas->id_kelas) ?>"
                       class="btn btn-small"><i class="fas fa-edit"></i> Edit</a>

                      <a 
                       href="<?php echo site_url('kelas/delete/'.$ruangkelas->id_kelas) ?>" class="btn btn-small text-danger"><i class="fas fa-trash"></i> Hapus</a>
                    </td>
                  </tr>
                  <?php endforeach; ?>

                </tbody>
              </table>
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
