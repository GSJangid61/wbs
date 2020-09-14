<?php
ini_set('display_errors', 1);
include "include/db.php" ;
include "mpdf/Mpdf.php";
//$mpdf = new mPDF('c', 'A4-L'); 
$mpdf = new Mpdf();
$html="";
$html .= "
<html>
<head>
   <style type='text/css'>
		.heading{
			height: 30px;
			font-size:10px;
		
		}
		td{
			text-align: center;
			border-width:1px;
			
		}
		
		.content{
			height: 34px;
			font-size:12px;
		}
		
	    .table{
	        border-width:1px;
	    }
	   
	</style>
</head>
<body>
";
$html.="<h1 style='color:blue;'>Hello World</h1>";
$file_name ="Bill-".time().".pdf";
$mpdf->WriteHTML($html); 
$mpdf->Output();
$html.="
</body>
</html>
";
?>
