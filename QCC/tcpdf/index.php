<?php
//============================================================+
// File name   : example_054.php
// Begin       : 2009-09-07
// Last Update : 2013-05-14
//
// Description : Example 054 for TCPDF class
//               XHTML Forms
//
// Author: Nicola Asuni
//
// (c) Copyright:
//               Nicola Asuni
//               Tecnick.com LTD
//               www.tecnick.com
//               info@tecnick.com
//============================================================+

/**
 * Creates an example PDF TEST document using TCPDF
 * @package com.tecnick.tcpdf
 * @abstract TCPDF - Example: XHTML Forms
 * @author Nicola Asuni
 * @since 2009-09-07
 */

// Include the main TCPDF library (search for installation path).
require_once('tcpdf1/tcpdf.php');

// create new PDF document
$pdf = new TCPDF('P', 'mm', 'A4', true, 'UTF-8', false);

// set document information
//$pdf->SetCreator(PDF_CREATOR);
//$pdf->SetAuthor('Nicola Asuni');
//$pdf->SetTitle('TCPDF Example 054');
//$pdf->SetSubject('TCPDF Tutorial');
//$pdf->SetKeywords('TCPDF, PDF, example, test, guide');

// set default header data
//$pdf->SetHeaderData(PDF_HEADER_LOGO, PDF_HEADER_LOGO_WIDTH, PDF_HEADER_TITLE.' 054', PDF_HEADER_STRING);

// set header and footer fonts
$pdf->setHeaderFont(Array(PDF_FONT_NAME_MAIN, '', PDF_FONT_SIZE_MAIN));
$pdf->setFooterFont(Array(PDF_FONT_NAME_DATA, '', PDF_FONT_SIZE_DATA));

// set default monospaced font
$pdf->SetDefaultMonospacedFont(PDF_FONT_MONOSPACED);

// set margins
/* $pdf->SetMargins(PDF_MARGIN_LEFT, PDF_MARGIN_TOP, PDF_MARGIN_RIGHT);
$pdf->SetHeaderMargin(PDF_MARGIN_HEADER);
$pdf->SetFooterMargin(PDF_MARGIN_FOOTER); */

// set auto page breaks
$pdf->SetAutoPageBreak(TRUE, PDF_MARGIN_BOTTOM);

// set image scale factor
$pdf->setImageScale(PDF_IMAGE_SCALE_RATIO);

// set some language-dependent strings (optional)
if (@file_exists(dirname(__FILE__).'/lang/eng.php')) {
    require_once(dirname(__FILE__).'/lang/eng.php');
    $pdf->setLanguageArray($l);
}

// ---------------------------------------------------------

// IMPORTANT: disable font subsetting to allow users editing the document
$pdf->setFontSubsetting(false);

// set font
$pdf->SetFont('helvetica', '', 10, '', false);

// add a page
$pdf->AddPage();

// create some HTML content
$html = <<<EOD
<style>
			table,td,th {
				border: 2px solid black;
				border-collapse: collapse;
			}
			.space{
				white-space:pre;				
			}
			.big {
				font-size: 130%;
			}
			.border{
				border: 2px solid black;
				padding: 5px;
			}
			table {
				width: 1020px;
			}
			.top {
				vertical-align: text-top;
			}
 
		</style>

<table border="1" style="width:100%;height:100%">
			<tr>
				<td style="line-height:43px;width:30%">&nbsp;<img src="HRDLOGO.PNG" style="height:30px;width:150px"></td>
				<td style="line-height:22px;width:40%;text-align:center"><b>DENKI DEPARTMENT</b><br>Weely Exam About Trivia</td>
				<td style="line-height:43px;width:30%">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<img src="logo.PNG" style="height:30px"></td>
			</tr>
			
			<tr>	
				Name:
				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
				Date:
				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
				Score:
			</tr>	
</table><br><br>			
			<form method="post" action="http://localhost/printvars.php" enctype="multipart/form-data">
			<table border="1" style="width:100%;height:100%">
				<tr>
					<td width="30px"  rowspan="2">
						1
					</td>
					<td width="" height="50px">
					Q:<textarea class="" name="name" height="100%"width="1000%"></textarea>
					</td>
					
				</tr>
				<tr>
					<td height="60px">
					A:<textarea class="" name="name" style="width:100%:height:30%"></textarea>
					</td>
				</tr>
			</table>
				<br>
				<br>
				<br>
			<input type="reset" name="reset" value="Reset" />
			<input type="submit" name="submit" value="Submit" />
			<input type="button" name="print" value="Print" onclick="print()" />
			<input type="hidden" name="hiddenfield" value="OK" />
			<br />
			</form>
			


EOD;

// output the HTML content
$pdf->writeHTML($html, true, 0, true, 0);

// reset pointer to the last page
$pdf->lastPage();

// ---------------------------------------------------------

//Close and output PDF document
$pdf->Output('example_054.pdf', 'I');

//============================================================+
// END OF FILE
//============================================================+