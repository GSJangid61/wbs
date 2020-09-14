
<head><meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <title>  </title>
    
    
        
    	<meta name="viewport" content="width=device-width, initial-scale=1">
		
		<style type="text/css">
		
			.heading{
				height: 30px;
				font-size:10px;
			
			}
			.heading1{
				height: 37px;
				font-size:10px;
			
			}
			td{
				text-align: center;
				border:1px solid white;
				
				
				
			}
			
			.content{
				height: 37px;
				font-size:12px;
			}
			
		    .table{
		       border:1px solid white;
		        
		    }
		   
		</style>
</head>

<?php
        
        include 'include/db.php';
       $CID=$_REQUEST["CID"];
       $caution=$_REQUEST["caution"];
       $lang=$_REQUEST['lang'];
       $billmonth=$_REQUEST["billmonth"];
       $imagePath=$_REQUEST["iamgePath"];
      
       $in  = str_repeat('?,', count($CID) - 1) . '?';
       
       
        $sql = "SELECT  CONSUMER.CNAME,CONSUMER.SRNO,CONSUMER.SERVICENO,CONSUMER.OLDACCNO,CONSUMER.ACCNO,CONSUMER.AREACODE,CONSUMER.METERSIZE,CONSUMER.STATUS,
        CONSUMER.CUSTOMERTYPE,CONSUMER.METERNO,CONSUMER.FNAME,CONSUMER.ADDRESS,CONSUMER.CITY,CONSUMER.CID , CONSUMER.Mobile,CONSUMER.CONNSTATUS,   
        CONSUMER.CUID,CONSUMER.CNAMEH,CONSUMER.FNAMEH,CONSUMER.ADDRESSH,    BILLDETAIL.CURREADING,BILLDETAIL.PREVREADING ,BILLDETAIL.LASTBPYDATE, BILLDETAIL.USEDLTR,BILLDETAIL.NOOFMONTH ,BILLDETAIL.WCHARGE, BILLDETAIL.SCHARGE,  BILLDETAIL.ADVANCE,
         BILLDETAIL.METERRENT, BILLDETAIL.WSCHARGE , BILLDETAIL.OUTSTANDING, BILLDETAIL.AFTERDISCOUNT , BILLDETAIL.DCHARGE ,BILLDETAIL.SSCHARGE, BILLDETAIL.TOTALBILL ,BILLDETAIL.BILLMONTH FROM CONSUMER  INNER JOIN BILLDETAIL  ON BILLDETAIL.CID = CONSUMER.CID  WHERE  CONSUMER.CID IN ( ".implode(',',$CID).") AND BILLDETAIL.BILLMONTH=:billmonth";
        $stmt = $conn->prepare($sql);
        //$stmt->execute($CID);
        $stmt->bindParam(":billmonth",$billmonth);
        $stmt->execute();
        $data = $stmt->fetchAll();
       
        $i=1;
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
            $STATUS=$row["STATUS"];
           
            $CITY=$row["CITY"];
            $CID=$row["CID"];
            $CUID=$row["CUID"];
            $CNAMEH=$row["CNAMEH"];
            $FNAMEH=$row["FNAMEH"];
            $ADDRESSH=$row["ADDRESSH"];
            $Mobile=$row["Mobile"];
            $CONNSTATUS=$row["CONNSTATUS"];
            
           
            
            
            
                $CURREADING=$row["CURREADING"];
                $PREVREADING =$row['PREVREADING'];
                $PLASTBPYDATE =$row['LASTBPYDATE'];
                $USEDLTR =$row['USEDLTR'];
                $NOOFMONTH =$row['NOOFMONTH'];
                $WCHARGE =$row['WCHARGE'];
                $SCHARGE =$row['SCHARGE'];
                $SSCHARGE=$row['SSCHARGE'];
                $ADVANCE =$row['ADVANCE'];
                $METERRENT =$row['METERRENT'];
                $WSCHARGE =$row['WSCHARGE'];
                $OUTSTANDING =$row['OUTSTANDING'];
                
                
                $AFTERDISCOUNT =$row['AFTERDISCOUNT'];
                $DCHARGE =$row['DCHARGE'];
                $TOTALBILL =$row['TOTALBILL'];
      	 		$LASTBPYDATE = date("d-m-Y", strtotime($PLASTBPYDATE));  

      	 		$BILLMONTH=$row['BILLMONTH'];
      	 		if(strlen($BILLMONTH)==5){
      	 		    $BILLMONTH='0'.$BILLMONTH;
      	 		}
      	 		$monthNo=substr($BILLMONTH, 0,2);
				$year=substr($BILLMONTH, 5);
				$monthName = date("F", mktime(0, 0, 0, $monthNo, 10));
				$monthName=substr($monthName, 0,3);
				$yearNo=substr($BILLMONTH, 4);
				
            
            
            
            ?>
           
           
            <div class="container">
			<table class="table"    border="1" cellspacing="0" cellpadding="0">
				<tbody>
					<tr>
						<td class="heading1" style="width:211px;"></td>
						<td class="heading1" style="width:42px;"></td>
						<td class="heading1" style="width: 75px;"></td>
						<td class="heading1" style="width: 98px;"></td>
						<td class="heading1" style="width: 70px;"></td>
						<td class="heading1" style="width: 45px;"></td>
						<td class="heading1" style="width: 45px;"></td>
						<td class="heading1" style="width: 56px;"></td>
						<td class="heading1" style="width: 70px;"></td>
						<td class="heading1" style="width: 19px;"></td>
						<td class="heading1" style="width: 30px;"></td>
						<td class="heading1" style="width: 50px;"></td>
						<td class="heading1" style="width: 45px;"></td>
						<td class="heading1" style="width: 81px;"></td>
						<td class="heading1" style="width: 18px;"></td>
						<td class="heading1" style="width: 60px;"></td>
					</tr>
			        
					<tr class="table1">
						<td class="content" style="font-size:13px;text-align: left;line-height: 1">&nbsp;&nbsp;<?php if($lang==1){echo wordwrap($CNAMEH,150,"<br>\n&nbsp;&nbsp;");}else{echo wordwrap($CNAME,30,"<br>\n&nbsp;&nbsp;");}?></td>
						<td class="content"><?php echo $SRNO;?></td>
						<td class="content"><?php echo $SERVICENO;?></td>
						<td class="content" style="text-align: left;"><?php echo $ACCNO;?></td>
						<td class="content" style="text-align: left;"><?php echo $OLDACCNO;?></td>
						<td class="content" style="text-align: left;"><?php echo $AREACODE;?></td>
						<td class="content" style="text-align: left;"><?php echo $METERSIZE;?></td>
						<td class="content" style="text-align: left;"><?php echo substr($CUSTOMERTYPE,0,3);?></td>
						<td class="content" style="text-align: left;"><?php echo strtoupper($monthName)."-".$yearNo;?></td>
						<td class="content"></td>
						<td class="content" style="text-align: left;"><?php echo $SRNO;?></td>
						<td class="content" style="text-align: left;"><?php echo $SERVICENO;?></td>
						<td class="content" style="text-align: left;"><?php echo $AREACODE;?></td>
						<td class="content" style="text-align: left;"><?php echo $ACCNO;?></td>
						<td class="content"><?php echo substr($CUSTOMERTYPE,0,1);?></td>
						<td class="content"><?php echo strtoupper($monthName)."-".$yearNo;?></td>
					</tr>

				</tbody>
			</table>
			
			<table class="table"  border="1"   cellspacing="0" cellpadding="0">
				<tbody>
					<tr>
						
						<td class="heading" style="width:211px;font-size:13px;text-align: left;line-height: 1">&nbsp;&nbsp;<?php if($lang==1){echo wordwrap($FNAMEH,150,"<br>\n&nbsp;&nbsp;");}else{echo wordwrap($FNAME,30,"<br>\n&nbsp;&nbsp;");}?></td>
						<td class="heading" style="width: 95px;"></td>
						<td class="heading" style="width: 56px;"></td>
						<td class="heading" style="width: 80px;"></td>
						<td class="heading" style="width: 76px;"></td>
						<td class="heading" style="width: 50px;"></td>
						<td class="heading" style="width: 73px;"></td>
						<td class="heading" style="width: 73px;"></td>
						<td class="heading" style="width: 19px;"></td>
						<td class="heading" style="width: 100px;"></td>
						<td class="heading" style="width: 100px;"></td>
						<td class="heading" style="width: 100px;"></td>
					</tr>
					
			
               
					<tr class="table2">
						<td class="content" style="font-size:11px;text-align: left;line-height: 1">&nbsp;&nbsp;<?php if($lang==1){echo wordwrap($ADDRESSH,150,"<br>\n&nbsp;&nbsp;");}else{echo wordwrap($ADDRESS,30,"<br>\n&nbsp;&nbsp;");}?></td>
						<td class="content"><?php echo $METERNO;?></td>
						<td class="content">--</td>
						<td class="content" style="text-align: left;"><?php if($STATUS=='OK'){echo floor($CURREADING);}else{echo $STATUS;} ?></td>
						<td class="content" style="text-align: left;"><?php if($STATUS=='OK'){echo floor($PREVREADING);}else{echo '0';}?></td>
						<td class="content"><?php echo "--";?></td>
						<td class="content" style="text-align: left;"><?php echo substr($LASTBPYDATE, 0, 10);?></td>
						<td class="content" style="text-align: left;"><?php echo substr($LASTBPYDATE, 0, 10);?></td>
						<td class="content"></td>
						<td class="content" ><?php echo substr($LASTBPYDATE, 0, 10);?></td>
						<td class="content" ><?php echo substr($LASTBPYDATE, 0, 10);?></td>
						<td class="content" style="font-size:14px;"><?php echo floor($AFTERDISCOUNT);?></td>
					</tr>
				</tbody>
			</table>
			
			<table class="table"   border="1"  cellspacing="0" cellpadding="0" > 
				<tbody>
					<tr>
						<td class="heading" style="width:211px;font-size:13px;text-align: left;line-height: 1">&nbsp;&nbsp;<?php echo wordwrap($CITY,150,"<br>\n&nbsp;&nbsp;");?><br>&nbsp;&nbsp;Mob. :&nbsp;<?php echo $Mobile;?></td>
						<td class="heading" style="width: 61px;"></td>
						<td class="heading" style="width: 61px;"></td>
						<td class="heading" style="width: 81px;"></td>
						<td class="heading" style="width: 37px;"></td>
						<td class="heading" style="width: 70px;"></td>
						<td class="heading" style="width: 47px;"></td>
						<td class="heading" style="width: 55px;"></td>
						<td class="heading" style="width: 45px;"></td>
						<td class="heading" style="width:60px"></td>
						<td class="heading" style="width: 19px;"></td>
						<td class="heading" style="width: 100px;"></td>
						<td class="heading" style="width: 100px;"></td>
						<td class="heading" style="width: 100px;"></td>
						
					</tr>
			  
					<tr class="table3">
			
						<td class="content" style="font-size:13px;text-align: left;">&nbsp;&nbsp;CUID <?php echo $CUID;?></td>
						<td class="content"><?php echo '--';?></td>
						<td class="content"><?php echo '--';?></td>
						<td class="content"><?php if($STATUS=='OK'){echo floor($USEDLTR);}else{echo '0';}?></td>
						<td class="content"><?php echo floor($NOOFMONTH);?></td>
						<td class="content"><?php echo $WCHARGE;?></td>
						<td class="content"><?php echo $SCHARGE;?></td>
						<td class="content"><?php echo $ADVANCE;?></td>
						<td class="content"><?php echo '--';?></td>
						<td class="content"></td>
						<td class="content"></td>
						<td class="content"><?php echo floor($DCHARGE);?></td>
						<td class="content" style="font-size:14px;"><?php echo floor($TOTALBILL);?></td>
						<td class="content"></td>
					</tr>
				</tbody>
			</table>
		
			<table class="table"  border="1"  cellspacing="0" cellpadding="0">
				<tbody>
					<tr>
						<td class="heading" style="width: 72px;"></td>
						<td class="heading" style="width: 56px;"></td>
						<td class="heading" style="width:50px"></td>
						<td class="heading" style="width: 65px;"></td>
						<td class="heading" style="width: 65px;"></td>
						<td class="heading" style="width: 65px;"></td>
						<td class="heading" style="width: 60px;"></td>
						<td class="heading" style="width: 50px"></td>
						<td class="heading" style="width: 45px;"></td>
						<td class="heading" style="width: 66px;"></td>
						<td class="heading" style="width: 50px;"></td>
						<td class="heading" style="width: 60px;"></td>
					
						<td class="heading" style="width: 19px;"></td>
						<td class="heading" style="width: 295px;font-size:13px;text-align: left;" colspan="3"> CUID  : <?php echo $CUID;?></td>
						
					</tr>
				
					<tr class="table4">
						<td class="content"><?php echo $WCHARGE;  ?></td>
						<td class="content"><?php echo $SCHARGE;?></td>
						<td class="content">--</td>
						<td class="content" style="text-align:left;"><?php echo $METERRENT;?></td>
						<td class="content" style="text-align:left;"><?php echo $WSCHARGE;?></td>
						<td class="content" style="text-align:left;">--</td>
						<td class="content" style="text-align:left;"><?php echo floor($OUTSTANDING);?></td>
						
						<td class="content" style="text-align:left;">--</td>
						<td class="content" style="text-align:left;">--</td>
						<td class="content" style="font-size:14px;text-align:left;"><?php echo floor($AFTERDISCOUNT);?></td>
						<td class="content" style="text-align: left;"><?php echo floor($DCHARGE);?></td>
						<td class="content" style="font-size:14px;text-align:left;"><?php echo floor($TOTALBILL);?></td>
						<td class="content"></td>
						<td class="content"  style="font-size:13px;text-align: left;" colspan="3"><?php if($lang==1){echo $CNAMEH;}else{echo $CNAME;}?></td>
						
					</tr>
				</tbody>
			</table>
			<div style="display: inline-block;">
			    <span style="font-size: 13px;position: absolute;margin-top:-11px;">&nbsp;&nbsp;&nbsp;&nbsp;<?php echo substr($caution, 0,100);?></span>
    			 <img src="<?php echo $imagePath;?>" alt="" style="position: absolute;margin-left: 650px;height:18px;margin-bottom:5px;margin-top:-11px;"/>
    			 <img src="<?php echo $imagePath;?>" alt="" style="height: 18px;position: absolute;margin-left: 1000px;margin-bottom:5px;margin-top:-11px;"/>
    		</div>
			 <div style="margin-top:79px;"></div>
		</div>
            <?php
        $i++;
        }
        
        ?>
</body>