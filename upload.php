<?php include "include/Top-Most.php";?>
<?php include "include/Top.php";?>
<?php include "include/Header.php";?>
<div class="container mt-3">
  <div class="row">
    <div class="col-md-6">
     
      <form action="upload-image.php" method="post" enctype="multipart/form-data" >
        <div id="wrapper">
         <img id="output_image" src="" class="profile-box" style="width:100px;height: 100px;"/> 
        </div>
        <br>
        <span class="text-danger">The Size Of Image Must within 20-50kb.</span> 
        <p>Select file:</p>
        <span style="color:red;font-size:15px;font-family:none;">
       
        </span>
        
        <div class="custom-file mb-3">
          <input type="file" name="myfile" class="custom-file-input" id="file"  accept="image/*"  onchange="preview_image(event)" required="">
          <label class="custom-file-label" for="customFile">Choose file</label>
        </div>
        <div class="form-group">
            <label>Image Name</label>
            <input type="text" name="imageTitle" class="form-control" placeholder="Add Image Title" required/>
        </div>
        <div class="form-group">
          <button type="submit" id="but_upload" class="btn btn-primary">Upload</button>
        </div>
      </form>
    </div>
  </div>
  
</div>
<script>
// Add the following code if you want the name of the file appear on select
$(".custom-file-input").on("change", function() {
  var fileName = $(this).val().split("\\").pop();
  $(this).siblings(".custom-file-label").addClass("selected").html(fileName);
});
</script>
<script type="text/javascript">
      function preview_image(event) 
      {
       var reader = new FileReader();
       reader.onload = function()
       {
        var output = document.getElementById('output_image');
        output.src = reader.result;
       }
       reader.readAsDataURL(event.target.files[0]);
      }
    </script>
    
<?php include "include/Footer.php";?>