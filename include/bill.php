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
	    include 'db.php';
	    $AREACODE='HBDM';
	    $BINDERNO=280;
       
        $stmt=$conn->prepare("select * from CONSUMER where AREACODE=:AREACODE and BINDERNO=:BINDERNO");
        $stmt->bindParam(":AREACODE",$AREACODE);
        $stmt->bindParam(":BINDERNO",$BINDERNO);
        $stmt->execute();
       $i=1;
        while($row=$stmt->fetch()){
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
            $CID=$row["CID"];
            $CUSTOMERTYPE=$row["CUSTOMERTYPE"];
            $CUSTOMERTYPE=$row["CUSTOMERTYPE"];
           
            
            
            $stmt1=$conn->prepare('select * from BILLDETAIL where CID=:CID LIMIT 1');
            $stmt1->bindParam(':CID',$CID);
            $stmt1->execute();
            
            while($row1=$stmt1->fetch()){
                $CURREADING=$row1["CURREADING"];
                $PREVREADING =$row1['PREVREADING'];
                $LASTBPYDATE =$row1['LASTBPYDATE'];
                $USEDLTR =$row1['USEDLTR'];
                $NOOFMONTH =$row1['NOOFMONTH'];
                $WCHARGE =$row1['WCHARGE'];
                $SCHARGE =$row1['SCHARGE'];
                $ADVANCE =$row1['ADVANCE'];
                $METERRENT =$row1['METERRENT'];
                $WSCHARGE =$row1['WSCHARGE'];
                $OUTSTANDING =$row1['OUTSTANDING'];
                
                
                $AFTERDISCOUNT =$row1['AFTERDISCOUNT'];
                $DCHARGE =$row1['DCHARGE'];
                $TOTALBILL =$row1['TOTALBILL'];
               
               
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
		$i++;
        }
        ?>
        
	</body>
</html>