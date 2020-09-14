<?php
include 'include/check-session.php';
include 'include/Top-Most.php';
include 'include/db.php';
$id=$_REQUEST["id"];
$stmt=$conn->prepare("SELECT imagePath FROM IMAGES WHERE  imageId =:id");
$stmt->bindParam(":id",$id);
$stmt->execute();
$data=$stmt->fetchAll();
foreach($data as $row){
     $iamgePath=$row["imagePath"];
    unlink($iamgePath);
}
$stmt=$conn->prepare("DELETE FROM IMAGES WHERE imageId =:id");
$stmt->bindParam(":id",$id);
$stmt->execute();
echo "Image is Deleted Successfully";
?>
<br></br></br>
<a href="upload.php" style="font-size:16px;">Upload More Images</a>
<br></br></br>
<a href="sign-images.php" style="font-size:16px;">Go To Images</a>