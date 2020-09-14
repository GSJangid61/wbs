	<!-- Footer -->
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
  </div>

  <!-- Bootstrap core JavaScript-->
  <script src="<?php echo $base_url;?>include/vendor/jquery/jquery.min.js"></script>
  <script src="<?php echo $base_url;?>include/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  <!-- Core plugin JavaScript-->
  <script src="<?php echo $base_url;?>include/vendor/jquery-easing/jquery.easing.min.js"></script>

  <!-- Custom scripts for all pages-->
  <script src="<?php echo $base_url;?>include/js/sb-admin-2.min.js"></script>

  <!-- Page level plugins -->
  <script src="<?php echo $base_url;?>include/vendor/chart.js/Chart.min.js"></script>

  <script src="<?php echo $base_url;?>include/vendor/datatables/dataTables.bootstrap4.min.js"></script>

  <!-- Page level custom scripts -->
  <script src="<?php echo $base_url;?>include/js/demo/datatables-demo.js"></script>
  <script type="text/javascript">
       
        $('#areacode').change(function(){
          var areacode=$('#areacode').val();
          
            $.ajax({
              url: "getconsumer.php",
              type: "post",
              dataType: 'html',
              data:{areacode:areacode},
               beforeSend: function(){
                $('.loader').show();
                },
                complete: function(){
                    $('.loader').hide();
                },
                success: function(data)
                {
                    
                    $("#consumerResult").html(data);
                }
                });
                    
            });

    </script>
    <script>
        $(document).ready(function() {
            $("#submitForm").click(function(event) {
                event.preventDefault();
                 $('.loader').show();
                var CID = [];
                var caution=$("#caution").val();
                var lang =$("#lang").val();
                var iamgePath=$("#iamgePath").val();
               
                $.each($("input[name='CID']:checked"), function(){            
                
                  CID.push($(this).val());
                });
                var billmonth=$("#billmonth").val();
               
                  $.ajax({
                  url: "printbill.php",
                  type: "post",
                  dataType: 'html',
                  data:{CID:CID,caution:caution,lang:lang,billmonth:billmonth,iamgePath:iamgePath},
                   beforeSend: function(){
                    $('.loader').show();
                    },
                    complete: function(){
                        $('.loader').hide();
                    },
                    success: function(data)
                    {
                        $(".billResult").html(data);
                        
                    
                       
                    }
                }); 
               
               
            });
        });
    </script>
    
    <script>
        $(document).ready(function() {
            $("#SearchBinder").click(function(event) {
                event.preventDefault();
                var BinderNo = $('#binderNo').val();
                var areacode=$('#areacode').val();
                var From=$('#From').val();
                var To=$('#To').val();
                
                 
                  $.ajax({
                  url: "BinderConsumer.php",
                  type: "post",
                  dataType: 'html',
                  data:{BinderNo:BinderNo,areacode:areacode,From:From,To:To},
                   beforeSend: function(){
                    $('.loader').show();
                    },
                    complete: function(){
                        $('.loader').hide();
                    },
                    success: function(data)
                    {
                       
                        $("#consumerResult").html(data);
                       
                    }
                }); 
               
               
            });
        });
    </script>
    
</body>
</html>