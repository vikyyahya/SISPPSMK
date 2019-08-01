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
              <span><center>Input Data Siswa</center></span>
              <a href="<?php echo site_url('siswa') ?>"><i class="fas fa-arrow-left"></i> Back</a>
             </div>

          <div class="card-body">

            <form action="<?php base_url('siswa/add') ?>" method="post" enctype="multipart/form-data" >
              <table>
                <div class="form-group">
                   <tr>
                       <td><label>Nis</label></td>
                   </tr>
                    <tr>
                        <td><input class="form-control" style="width:900px;" type="text" name="" placeholder="Input nis"></td>
                       <div class="invalid-feedback"></div>
                    </tr>

                     <tr>
                        <td><label>Nama Siswa</label></td>
                     </tr>
                      <tr>
                        <td><input class="form-control" style="width:900px;" type="text" name="" placeholder="Input nama siswa"></td>
                        <div class="invalid-feedback"></div>
                      </tr>

                      <tr>
                      <td><label>Jenis Kelamin</label></td>
                     </tr>
                      <tr>
                        <td><input class="" type="radio" name="Jenis_kelamin" >laki-laki</td>
                      </tr>
                        <tr>
                        <td><input class="" type="radio" name="Jenis_kelamin" >Perempuan</td>
                      </tr>

                      <td><label>Tempat Tanggal Lahir</label></td>
                     </tr>
                      <tr>
                        <td><input class="" style="width:900px;" type="date" name="" placeholder="Input password"></td>
                        <div class="invalid-feedback"></div>
                      </tr>
   
                      <td><label>Nomor Telepon</label></td>
                     </tr>
                      <tr>
                        <td><input class="form-control" style="width:900px;" type="text" name="" placeholder="Input nomor telepon."></td>
                        <div class="invalid-feedback"></div>
                      </tr>

                   <tr>
                         <td><label>Kelas</label></td>
                   </tr>
                  <tr>
                      <td><select name="level" style="width:500px;">
                       <option></option>
                       <option></option>
                       <div class="invalid-feedback"></div>
                      </select></td>
                    </tr>
                         <td><label>Tahun Ajaran</label></td>
                   </tr>

                  <tr>
                      <td><select name="level" style="width:500px;">
                       <option></option>
                       <option></option>
                       <div class="invalid-feedback"></div>
                      </select></td>
                    </tr>
              </div>

              
              
            </table><br>
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
