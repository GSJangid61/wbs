<?php
ini_set('display_errors', 1);
$areacode= $_REQUEST["areacode"];
$BinderNo=$_REQUEST["BinderNo"];
$From=$_REQUEST["From"];
$To=$_REQUEST["To"];

include 'include/db.php';

if($BinderNo !="")
{
   
    $stmt=$conn->prepare("SELECT  CID ,CNAME,FNAME,ADDRESS,ACCNO,CITY,BINDERNO FROM CONSUMER WHERE AREACODE=:areacode and BINDERNO=:BinderNo");
    $stmt->bindParam(":areacode",$areacode);
    $stmt->bindParam(":BinderNo",$BinderNo);
    
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
            <td><input type="checkbox" name="CID"   value="<?php echo $row["CID"];?>"  checked="" /></td>
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
    else{
            echo "<tr>No Record Found</tr>";
            
        }
    
}

else
{
    
    $stmt=$conn->prepare("SELECT CID ,CNAME,FNAME,ADDRESS,ACCNO,CITY,BINDERNO FROM CONSUMER  WHERE  BINDERNO  BETWEEN :From AND :To and AREACODE =:areacode");
    $stmt->bindParam(":From",$From);
    $stmt->bindParam(":To",$To);
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
            <td><input type="checkbox" name="CID"   value="<?php echo $row["CID"];?>" checked="" /></td>
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
    else{
            echo "<tr>No Record Found</tr>";
            
        }
   
}








?>