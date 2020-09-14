<!DOCTYPE html>
<html>
	<head><meta http-equiv="Content-Type" content="text/html; charset=utf-8">
	    
		<title>BIll Print</title>
		<!-- Latest compiled and minified CSS -->
		
  		<meta name="viewport" content="width=device-width, initial-scale=1">
		
		<style type="text/css">
		
			.heading{
				height: 30px;
				font-size:10px;
			
			}
			td{
				text-align: center;
				border-width:0px;
			}
			table{
				border: 1px;
			}
			.content{
				height: 38px;
				font-size:10px;
			}
		    table{
		        border-width:1px black;
		    }
		    body{
		        font-size:13px;
		    }
		</style>
	</head>
	<body>
    <?php
        include 'include/db.php';
        $CID=$_REQUEST["CID"];
        for($i=0;$i<=sizeof($CID);$i++){
        $stmt=$conn->prepare("SELECT CONSUMER.CNAME,CONSUMER.SRNO,CONSUMER.SERVICENO,CONSUMER.OLDACCNO,CONSUMER.ACCNO,CONSUMER.AREACODE,CONSUMER.METERSIZE,CONSUMER.CUSTOMERTYPE,CONSUMER.METERNO,CONSUMER.FNAME ,
        BILLDETAIL.CURREADING,BILLDETAIL.PREVREADING,BILLDETAIL.LASTBPYDATE,BILLDETAIL.USEDLTR,BILLDETAIL.NOOFMONTH,BILLDETAIL.WCHARGE,BILLDETAIL.SCHARGE,BILLDETAIL.ADVANCE,BILLDETAIL.METERRENT,
        BILLDETAIL.WSCHARGE,BILLDETAIL.OUTSTANDING,BILLDETAIL.AFTERDISCOUNT,BILLDETAIL.DCHARGE,BILLDETAIL.TOTALBILL FROM BILLDETAIL INNER JOIN  CONSUMER ON BILLDETAIL.CID = CONSUMER.CID WHERE CONSUMER.CID=:CID");
        $stmt->bindParam(":CID",$CID[$i]);
        $stmt->execute();
        
        $data=$stmt->fetchAll();
        foreach($data as $row){
            $CNAME=$row["CNAME"];
            $SRNO=$row["SRNO"];
            $SERVICENO=$row["SERVICENO"];
            $OLDACCNO=$row["OLDACCNO"];
            $ACCNO=$row["ACCNO"]; 
            $AREACODE=$row["AREACODE"];
            $METERSIZE=$row["METERSIZE"];
            $CUSTOMERTYPE=$row["CUSTOMERTYPE"];
            $METERNO=$row["METERNO"];
            $FNAME=$row["FNAME"];
            $ADDRESS=$row["ADDRESS"];
            $CITY=$row["CITY"];
            
            
            
            $CURREADING=$row["CURREADING"];
            $PREVREADING =$row['PREVREADING'];
            $LASTBPYDATE =$row['LASTBPYDATE'];
            $USEDLTR =$row['USEDLTR'];
            $NOOFMONTH =$row['NOOFMONTH'];
            $WCHARGE =$row['WCHARGE'];
            $SCHARGE =$row['SCHARGE'];
            $ADVANCE =$row['ADVANCE'];
            $METERRENT =$row['METERRENT'];
            $WSCHARGE =$row['WSCHARGE'];
            $OUTSTANDING =$row['OUTSTANDING'];
            $AFTERDISCOUNT =$row['AFTERDISCOUNT'];
            $DCHARGE =$row['DCHARGE'];
            $TOTALBILL =$row['TOTALBILL'];
        }
        ?>
         <div class="container">
             <div></div>
			<table class="table"   border="1" cellspacing="0" cellpadding="0">
				<tbody>
					<tr>
						<td class="heading" style="width: 208px;"></td>
						<td class="heading" style="width:37px;"></td>
						<td class="heading" style="width: 80px;"></td>
						<td class="heading" style="width: 94px;"></td>
						<td class="heading" style="width: 69px;"></td>
						<td class="heading" style="width: 42px;"></td>
						<td class="heading" style="width: 43px;"></td>
						<td class="heading" style="width: 57px;"></td>
						<td class="heading" style="width: 67px;"></td>
						<td class="heading" style="width: 18px;"></td>
						<td class="heading" style="width: 30px;"></td>
						<td class="heading" style="width: 56px;"></td>
						<td class="heading" style="width: 37px;"></td>
						<td class="heading" style="width: 85px;"></td>
						<td class="heading" style="width: 20px;"></td>
						<td class="heading" style="width: 60px;"></td>
					</tr>
					<tr>
						<td class="content" ><?php echo $CNAME;?></td>
						<td class="content"><?php echo $SRNO;?></td>
						<td class="content"><?php echo $SERVICENO;?></td>
						<td class="content"><?php echo $ACCNO;?></td>
						<td class="content"><?php echo $OLDACCNO;?></td>
						<td class="content"><?php echo $AREACODE;?></td>
						<td class="content"><?php echo $METERSIZE;?></td>
						<td class="content"><?php echo $CUSTOMERTYPE;?></td>
						<td class="content">DEC</td>
						<td class="content"></td>
						<td class="content"><?php echo $SRNO;?></td>
						<td class="content"><?php echo $SERVICENO;?></td>
						<td class="content"><?php echo $AREACODE;?></td>
						<td class="content"><?php echo $ACCNO;?></td>
						<td class="content"><?php echo '--';?></td>
						<td class="content"><?php echo 'DEC';?></td>
					</tr>

				</tbody>
			</table>
			<table class="table"   border="1" cellspacing="0" cellpadding="0">
				<tbody>
					
					<tr>
						<td class="heading" style="width: 208px;"><?php echo $FNAME;?></td>
						<td class="heading" style="width: 90px;"></td>
						<td class="heading" style="width: 54px;"></td>
						<td class="heading" style="width: 82px;"></td>
						<td class="heading" style="width: 72px;"></td>
						<td class="heading" style="width: 53px;"></td>
						<td class="heading" style="width: 70px;"></td>
						<td class="heading" style="width: 70px;"></td>
						<td class="heading" style="width: 18px;"></td>
						<td class="heading" style="width: 94px;"></td>
						<td class="heading" style="width: 99px;"></td>
						<td class="heading" style="width: 101px;"></td>
					</tr>
					
			
               
					<tr>
						<td class="content" ><?php echo $ADDRESS;?></td>
						<td class="content"><?php echo $METERNO;?></td>
						<td class="content">--</td>
						<td class="content"><?php echo $CURREADING;?></td>
						<td class="content"><?php echo $PREVREADING;?></td>
						<td class="content"><?php echo "--";?></td>
						<td class="content"><?php echo substr($LASTBPYDATE, 0, 10);?></td>
						<td class="content"><?php echo substr($LASTBPYDATE, 0, 10);?></td>
						<td class="content"></td>
						<td class="content"><?php echo substr($LASTBPYDATE, 0, 10);?></td>
						<td class="content"><?php echo substr($LASTBPYDATE, 0, 10);?></td>
						<td class="content"><?php echo $AFTERDISCOUNT;?></td>
					</tr>
				</tbody>
			</table>
			<table class="table"  border="1" cellspacing="0" cellpadding="0" > 
				<tbody>
					<tr>
						<td class="heading" style="width: 208px;"><?php echo $CITY;?><br>Mobile No : <?php echo $Mobile;?></td>
						<td class="heading" style="width: 62px;"></td>
						<td class="heading" style="width: 60px;"></td>
						<td class="heading" style="width: 76px;"></td>
						<td class="heading" style="width: 37px;"></td>
						<td class="heading" style="width: 75px;"></td>
						<td class="heading" style="width: 72px;"></td>
						<td class="heading" style="width: 62px;"></td>
						<td class="heading" style="width: 47px;"></td>
						<td class="heading" style="width: 18px;"></td>
						<td class="heading" style="width: 94px;"></td>
						<td class="heading" style="width: 99px;"></td>
						<td class="heading" style="width: 101px;"></td>
					</tr>
			   
					<tr>
			
						<td class="content">CUID <?php echo '25022-21-'.$CID;?></td>
						<td class="content"><?php echo '--';?></td>
						<td class="content"><?php echo '--';?></td>
						<td class="content"><?php echo $USEDLTR;?>.00</td>
						<td class="content"><?php echo $NOOFMONTH;?></td>
						<td class="content"><?php echo $WCHARGE;?></td>
						<td class="content"><?php echo $SCHARGE;?></td>
						<td class="content"><?php echo $ADVANCE;?></td>
						<td class="content"><?php echo '--';?></td>
						<td class="content"></td>
						<td class="content">56</td>
						<td class="content">3000</td>
						<td class="content"></td>
					</tr>
				</tbody>
			</table>
			<table class="table"   border="1" cellspacing="0" cellpadding="0">
				<tbody>
					<tr>
						<td class="heading" style="width: 73px;"></td>
						<td class="heading" style="width: 66px;"></td>
						<td class="heading" style="width: 65px;"></td>
						<td class="heading" style="width: 69px;"></td>
						<td class="heading" style="width: 72px;"></td>
						<td class="heading" style="width: 91px;"></td>
						<td class="heading" style="width: 45px;"></td>
						<td class="heading" style="width: 50px;"></td>
						<td class="heading" style="width: 58px;"></td>
						<td class="heading" style="width: 54px;"></td>
						<td class="heading" style="width: 50px;"></td>
						<td class="heading" style="width: 18px;"></td>
						<td class="heading" style="width: 94px;" >CUID </td>
						<td class="heading" style="width: 97px;" > <?php echo '25022-21-'.$CID;?></td>
					
						<td class="heading" style="width: 101px;/* border-top-width: 0px; */"></td>
					</tr>
					
					<tr>
						<td class="content"><?php echo $WCHARGE;  ?></td>
						<td class="content"><?php echo $SCHARGE;?></td>
						<td class="content"><?php echo $METERRENT;?></td>
						<td class="content"><?php echo $WSCHARGE;?></td>
						<td class="content"><?php echo '--';?></td>
						<td class="content"><?php echo $OUTSTANDING;?></td>
						<td class="content">--</td>
						<td class="content">--</td>
						<td class="content"><?php echo $AFTERDISCOUNT;?></td>
						<td class="content"><?php echo $DCHARGE;?></td>
						<td class="content"><?php echo $TOTALBILL;?></td>
						<td class="content"></td>
						<td class="content" colspan='2'><?php echo $CNAME;?></td>
					
						<td class="content"></td>
					</tr>
				</tbody>
			</table>
		    <div class="extra" style='font-size:12px;margin-top:10px;'>
		        <span style="margin-left:20px;">Save Water for Future</span>
		        <span style='margin-left:510px;'>Authority Sign</span>
		    </div>
		   <div style="margin:60px;"></div>
		</div>
        
        <?php
        }   
        ?>
	</body>
</html>