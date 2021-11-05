<?php
ob_start();
function e($var){
		return mb_convert_encoding( $var, "sjis-win", "utf-8" );
		}
$data2 = unserialize(base64_decode($_POST["data"]));
$plan = unserialize(base64_decode($_POST["plan"]));
$code = unserialize(base64_decode($_POST["code"]));
$file = unserialize(base64_decode($_POST["file"]));
//$csv = iconv("UTF-8", "Windows-1252", $csv);
// save each row of the data
//print_r($plan.$code);

//header('Content-Encoding: text/csv; UTF-8');
$content = fopen('php://output', 'w');
if($content){
				
	fwrite($content,$data2);
}
fclose($content) ;

/* header('Content-Encoding: UTF-8');
header('Content-type: text/csv; charset=UTF-8');
header('Content-Disposition: attachment; filename=Customers_Export.csv');  */
/* header('Content-Encoding: JIS'); */

header('Content-Type: text/plain;charset=UTF-8');
header("Content-Type: application/octet-stream");
header("Content-Type: application/x-csv");
header("Content-Disposition: attachment; filename=$file.csv");
echo mb_convert_encoding(ob_get_clean(), 'sjis-win', 'utf-8');
//file_put_contents("../denkifinished/$plan/$code/".$code.".csv");
file_put_contents("../denkifinished/HEIGHT MATCH CHECKING/"."$file.csv", ''.@e($data2).'');
ob_end_flush();
//echo "\xEF\xBB\xBF"; // UTF-8 BOM

// Close the file
//fclose($file);


					/*  $data = unserialize(base64_decode($_POST["data"]));
					  print_r($data); */
					 /*  $f=fopen('php://memory','w');
					  $header =  array(unserialize(base64_decode($_POST["data"])));
					  //print_r($header);
					  fputcsv($f,$header); 
					  fseek($f,0);
					  header('Content-Encoding: UTF-8');
					  header('Content-type: text/csv; charset=UTF-8');
					  header('Content-Disposition: attachment; filename=Customers_Export.csv'); 
					  echo "\xEF\xBB\xBF"; // UTF-8 BOM
					  fpassthru($f) ; */
						/* echo "Receiving data arrCnt = $arrCnt<br>";
						$name = array();
						for( $i = 0; $i < $arrCnt; $i++ ) {
						  $var = $_POST["name"];
						if( $var != "" ) array_push($name, $var );
						}
						print_r($name);	 */
					 /* header('Content-Type: text/plain;charset=UTF-8');
					 $f=fopen('php://memory','w');
					 $header = unserialize(base64_decode($_POST["input_name"]));    
					 fputcsv($f,$header); 
					 fseek($f,0);
					 header('Content-Type: text/plain;charset=UTF-8');

					header("Content-Type: application/octet-stream");
					header("Content-Type: application/x-csv");
					header("Content-Disposition: attachment; filename=PlanStatus.csv");
					echo mb_convert_encoding(ob_get_clean(), 'UTF-8', 'sjis-win');	 */
					 /* header('Content-Encoding: UTF-8');
					header('Content-type: text/csv; charset=UTF-8');
					header('Content-Disposition: attachment; filename=Customers_Export.csv'); 
					//echo "\xEF\xBB\xBF"; // UTF-8 BOM
					 fpassthru($f); */
/*  $content = "No.,ConstructionCode,PlanNum,PlanType,DateProcess,PlanStatus,ProblemDetails\r\n";

ob_start();
header('Content-Type: text/plain;charset=UTF-8');
			$fp = fopen('php://output', 'w');
			if($fp){
				
				fwrite($fp,$content);
			}
			fclose($fp);
header("Content-Type: application/octet-stream");
header("Content-Type: application/x-csv");
header("Content-Disposition: attachment; filename=PlanStatus.csv");
echo mb_convert_encoding(ob_get_clean(), 'UTF-8', 'sjis-win');	 */
?>

<?php
//$data = array(unserialize(base64_decode($_POST["data"])));
/* $list = array (
    array('aaa', 'bbb', 'ccc', 'dddd'),
    array('123', '456', '789'),
    array('"aaa"', '"bbb"')
);

$fp = fopen('file.csv', 'w');

foreach ($list as $fields) {
    fputcsv($fp, $fields);
}

fclose($fp); 
header("Content-Type: application/octet-stream");
header("Content-Type: application/x-csv");
header("Content-Disposition: attachment; filename=PlanStatus.csv");
echo mb_convert_encoding(ob_get_clean(), 'UTF-8', 'sjis-win');  */
?>


<?php
/*arraytransfer.php*/
/* echo "Array transfer<br>";
$name = array( "mike", "tom" );
$arrCnt = sizeof( $name );
echo "arrCnt: $arrCnt<br>";

echo "<form action=\"arrayrcv2.php\" method=\"POST\">";
echo "<INPUT TYPE=\"HIDDEN\" NAME=\"arrCnt\" VALUE=\"$arrCnt\">";
for( $i=0; $i < $arrCnt; $i++ ) {
  echo "<INPUT TYPE=\"HIDDEN\" NAME=\"name\" VALUE=\"$name[$i]\"> ";
}
echo "<input type=\"submit\" name=\"submit\" value=\"Submit me!\" />";
echo "</form>"; */
?>


<?php
/*arrayrecv.php */
/* $arrCnt = $_POST["arrCnt"];
echo "Receiving data arrCnt = $arrCnt<br>";
$name = array();
for( $i = 0; $i < $arrCnt; $i++ ) {
  $var = $_POST["name"];
if( $var != "" ) array_push($name, $var );
}
print_r($name); */
?>


