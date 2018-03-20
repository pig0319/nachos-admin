<?php
	function fetch_data(){
		$output = '';
		$conn = mysqli_connect("localhost","root","","nachos");

		$categoryData = "SELECT category,COUNT(category) as frequency from transaction t join nachosmenu n on t.order_name = n.order_name group by category order by frequency desc";
		$result = mysqli_query($conn,$categoryData);

		while($row = mysqli_fetch_array($result)){
			$output .='<tr>
						<td>'.$row['category'].'</td>
						<td>'.$row['frequency'].'</td>
						</tr>';

		}

		return $output;
	}
	$curr = date("F j, Y, g:i a");
	date_default_timezone_set("Asia/Singapore");
	if(isset($_POST['generate_pdf'])){
		require_once('tcpd/tcpdf.php');
		$obj_pdf = new TCPDF('P',PDF_UNIT,PDF_PAGE_FORMAT,true,'UTF-8',false);
		$obj_pdf->SetCreator(PDF_CREATOR);
		$obj_pdf->SetTitle("Top Food Categories");
		$obj_pdf->SetHeaderData('','',PDF_HEADER_TITLE,PDF_HEADER_STRING);
		$obj_pdf->setHeaderFont(Array(PDF_FONT_NAME_MAIN,'',PDF_FONT_SIZE_MAIN));
		$obj_pdf->setFooterFont(Array(PDF_FONT_NAME_DATA,'',PDF_FONT_SIZE_DATA));
		$obj_pdf->SetDefaultMonospacedFont('Helvetica');
		$obj_pdf->SetFooterMargin(PDF_MARGIN_FOOTER);
		$obj_pdf->SetMargins(PDF_MARGIN_LEFT,'10',PDF_MARGIN_RIGHT);
		$obj_pdf->setPrintHeader(false);
		$obj_pdf->setPrintFooter(false);
		$obj_pdf->SetAutoPageBreak(TRUE,10);
		$obj_pdf->SetFont('Helvetica','',11);
		$obj_pdf->AddPage();
		$content='';
		$content.= '<h3 align = "center"><i>Naughty Nachos Maginhawa - Top Food Categories</i></h3><br/>
			<table border="1" cellspacing = "0" cellpadding = "3">
				<tr>
					<th width = "80%"><b>Category</b></th>
					<th width = "20%"><b>Frequency</b></th>
				</tr>';
			
		$content.= fetch_data();
		$content.= '<br/></table>';
		$content .= '<h4> Date Generated: ';
		$content .= date("F j, Y, h:i a");
		$content .= '</h4>';

		
		$obj_pdf->writeHTML($content);
		$obj_pdf->Output('file.pdf','I');


	}
?>
