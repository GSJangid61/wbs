<?php
include "include/check-session.php";
include 'include/Top-Most.php';
?>
<title>Bills</title>
<?php
include 'include/Top.php';
include 'include/Header.php';
include 'include/db.php';
?>
<style>
   .form-control{
        width:100px;
        font-size:14px;
        margin:10px;
    }
    
     .loader {
        display : none;
        position : fixed;
        z-index: 100;
        background-image : url('https://namastesir.com/assets/images/loader.gif');
        opacity : 10.4;
        background-repeat : no-repeat;
        background-position : center;
        left : 0;
        bottom : 0;
        right : 0;
        top : 0;
    }
    .table thead,tbody{
        font-size:12px;
    }
    #submitForm{
        margin-top: 30px;
        margin-bottom: 33px;
        width: 150px;
        border-radius: 0px;
        background:teal;
    }

    </style>
<div class="container-fluid">
    <div class="loader"></div>
      <!-- Page Heading -->
      <div class="row">
       <div class='col-md-12'>
         <form class="form-inline"  method="post">
              <div class="form-group">
               <select class="form-control" id="areacode" name="areacode" >
                   <option>SELECT CATEGORY</option>
                   <?php
                   $stmt=$conn->prepare("SELECT * FROM AREAMASTER");
                   $stmt->execute();
                   $data=$stmt->fetchAll();
                   foreach($data as $row){
                       ?>
                       <option value="<?php echo $row["AREACODE"];?>"><?php echo $row["AREACODE"];?></option>
                       <?php
                   }
                   ?>
               </select>
              </div>
              <div class="form-group">
                <input type="number" id="binderNo" name="binderNo" placeholder="Enter Binder No" class="form-control"/>
              </div>
              
              <div class="form-group">
                <input type="text" name="From" id="From"  class="form-control" placeholder="From"/>
              </div>
              <div class="form-group">
                <input type="text" name="To" id="To" class="form-control" placeholder="To"/>
              </div>
              <div class="form-group">
                  <button class="btn btn-primary btn-md" id="SearchBinder" style="height:35px;width:150px;">Search-Binder</button>
              </div>
              <div class="form-group">
                <select  name="billmonth" id="billmonth" class="form-control" >
                   <option value="0">SELECT BILL MONTH</option>
                   <?php
                   $stmt=$conn->prepare("SELECT DISTINCT  BILLMONTH FROM BILLDETAIL");
                   $stmt->execute();
                   $data=$stmt->fetchAll();
                   foreach($data as $row){
                       ?>
                       <option value="<?php echo $row["BILLMONTH"];?>"><?php echo $row["BILLMONTH"];?></option>
                       <?php
                   }
                   ?>
               </select>
                
              </div>
              <div class="form-group">
                <input type="text" name='caution' id="caution"  class="form-control" placeholder="Enter Caution">
              </div>
              <div class="form-group">
                <select id="iamgePath" class="form-control">
                    <option>SELECT IMAGE FOR SIGN</option>
                    <?php
                     $stmt=$conn->prepare("SELECT * FROM IMAGES");
                      $stmt->execute();
                      $data=$stmt->fetchAll();
                      foreach($data as $row){
                      ?>
                      <option value="<?php echo $row["imagePath"];?>"><?php echo $row["imageTitle"];?></option>
                      <?php
                      }
                    ?>
                </select>
              </div>
              <div class="form-group">
               <select class="form-control" id="lang" name='lang'>
                   <option value='0'>SELECT LANGUAGE</option>
                   <option value='1'>Hindi</option>
                    <option value='0'>English</option>
               </select>
              </div>
              
                <div style="height:350px;overflow:auto;width:100%">
                  <table class="table table-bordered">
                    <thead>
                     <tr>
                        <th>CID</th>
                        <th>CHECK</th>
                        <th>BINDERNO</th>
                         <th>ACC NO</th>
                         <th>NAME</th>
                         <th>S/O NAME</th>
                         <th>CITY</th>
                         <th>ADDRESS</th>
                      </tr>
                    </thead>
                    <tbody id="consumerResult"  >
                      
                     
                    </tbody>
                  </table>
            </div>
            <div class="form-group">
                <button type="submit" class="btn btn-success" id="submitForm">PRINT BILL</button>
            </div>
            </form>
       </div>
      </div>
    </div>
    
<?php
include 'include/Footer.php';
?>