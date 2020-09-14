
<?php 
 include 'include/db.php';
$file_name=$_FILES["myfile"]["name"];
$file_tmp=$_FILES["myfile"]["tmp"];
$file_size=$_FILES["myfile"]["size"];
$file_type=$_FILES["myfile"]["type"];
$imageTitle=$_REQUEST['imageTitle'];

    $folder="signature/$file_name";
    move_uploaded_file($_FILES["myfile"]["tmp_name"], $folder);
   
    $stmt=$conn->prepare("INSERT  INTO IMAGES (imagePath ,imageTitle) values (:folder,:imageTitle)");
    $stmt->bindParam(":folder",$folder);
    $stmt->bindParam(":imageTitle",$imageTitle);
    $stmt->execute();
    $conn=null;
    $stmt=null;
   echo "Image is Uploaded Successfully";
 
?>
<br></br></br>
<a href="upload.php" style="font-size:16px;">Upload More Images</a>
<br></br></br>
<a href="sign-images.php" style="font-size:16px;">Go To Images</a>