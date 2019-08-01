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
          	<span><center>Data Siswa</center></span>
          	
            <a href="<?php echo site_url('siswa/add') ?>"><i class="fas fa-plus"></i> Add New</a>
          </div>
          </div>
          <div class="card-body">

            <div class="table-responsive">
              <table class="table table-hover" id="dataTable" width="100%" cellspacing="0">
                <thead>
                  <tr>
                    <th>Nis</th>
                    <th>Nama Siswa</th>
                    <th>Jenis Kelamin</th>
                    <th>Tempat Tanggal Lahir </th>
                    <th>No Telp</th>
                    <th>Kelas</th>
                    <th>Tahun Ajaran</th>
                    <th>Action</th>
                  </tr>
                </thead>
                <tbody>
                  <!-- <?php foreach ($products as $product): ?>
                  <tr>
                    <td width="150">
                      <?php echo $product->nis ?>
                    </td>
                    <td>
                      <?php echo $product->nama_siswa ?>
                    </td>
                    <td>
                      <?php echo $product->kelas ?>
                    </td>
                    
                    <td>
                      <?php echo $product->jk ?>
                    </td>
                    <td>
                      <?php echo $product->ttl ?>
                    </td> -->

                    
                
                    <td width="250">
                      <a href="<?php echo site_url('siswa/edit/'.$product->nis) ?>"
                       class="btn btn-small"><i class="fas fa-edit"></i> Edit</a>

                      <a 
                       href="<?php echo site_url('siswa/delete/'.$product->nis) ?>" class="btn btn-small text-danger"><i class="fas fa-trash"></i> Hapus</a>
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
