<?php
$areacode= $_REQUEST["areacode"];
include 'include/db.php';
$stmt=$conn->prepare("SELECT  CID ,CNAME,FNAME,ADDRESS,ACCNO,CITY,BINDERNO FROM CONSUMER WHERE AREACODE=:areacode");
$stmt->bindParam(":areacode",$areacode);
$stmt->execute();
$data=$stmt->fetchAll();
$count=$stmt->rowCount();
if($count>0)
    {
    foreach($data as $row){
    $CID=$row["CID"];
    $CNAME=$row["CNAME"];
    $ADDRESS=$row["ADDRESS"];
    $ACCNO=$row["ACCNO"];
    $FNAME=$row["FNAME"];
   ?>
   <tr>
        <td><?php echo $row["CID"]; ?></td>
        <td><input type="checkbox" name="CID"  value="<?php echo $row["CID"];?>" checked="" /></td>
        <td><?php echo $row["BINDERNO"];?></td>
        <td><?php echo $row["ACCNO"]; ?></td>
        <td><?php echo $row["CNAME"]; ?></td>
        <td><?php echo $row["FNAME"]; ?></td>
        <td><?php echo $row["CITY"]; ?></td>
        <td><?php echo $row["ADDRESS"]; ?></td>

        
       </tr>
    
   <?php
    
    }  
    
}

?>