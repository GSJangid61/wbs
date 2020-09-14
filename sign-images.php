<?php
include 'include/Top-Most.php';
include "include/Top.php";
include "include/Header.php";
include 'include/db.php';
?>

<!-- Begin Page Content -->
        <div class="container-fluid">
          <!-- Page Heading -->
          <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">Image Management.</h1>
            <span class="Msg"></span>
            <a href="upload.php" class="btn btn-sm btn-primary shadow-sm"><i class="fa fa-plus fa-sm text-white-50"></i>Add Image</a>
          </div>
          <!-- Page Heading -->
          <!-- DataTales Example -->
          <div class="card shadow mb-4">
            <div class="card-body">
              <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                  <thead>
                    <tr>
                        <th>S.No</th>
                        <th>Image</th>
                        <th>Image Name</th>
                        <th>Delete</th>
                    </tr>
                  </thead>
                  <tfoot>
                     <tr>
                        <th>S.No</th>
                        <th>Image</th>
                        <th>Image Name</th>
                        <th>Delete</th>
                    </tr>
                  </tfoot>
                  <tbody>
                      <?php
                      
                      $stmt=$conn->prepare("SELECT * FROM IMAGES");
                      $stmt->execute();
                      $data=$stmt->fetchAll();
                     $i=1;
                      foreach($data as $row){
                          ?>
                        <tr>
                            <td><?php echo $i;?></td>
                            <td><img src="<?php echo $row["imagePath"];?>" style="width:60px;height:60px;"/></td>
                            <td><?php echo $row["imageTitle"];?></td>
                            <td><a href="delete-image.php?id=<?php echo $row["imageId"];?>"><i class="fa fa-trash"/></i></a></td>
                        </tr>
                          <?php
                          $i++;
                      }
                      ?>
                    
                       
                 </tbody>
                </table>
              </div>
            </div>
          </div>

        </div>
        <!-- /.container-fluid -->

      </div>
      <!-- End of Main Content -->	<!-- Footer -->
      <footer class="sticky-footer bg-white">
        <div class="container my-auto">
          <div class="copyright text-center my-auto">
            <span>Copyright &copy; Your Website 2019</span>
          </div>
        </div>
      </footer>
      <!-- End of Footer -->

    </div>
    <!-- End of Content Wrapper -->

  </div>
  <!-- End of Page Wrapper -->

  <!-- Scroll to Top Button-->
  <a class="scroll-to-top rounded" href="#page-top">
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
          <a class="btn btn-primary" href="login.html">Logout</a>
        </div>
      </div>
    </div>
    
<?php
include "include/Footer.php";
?>