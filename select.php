<?php

//$link=mysqli_connect("localhost", "root","admin","aprilrosealviola");

 $DSN        = "HRDSQL4";    //Data sauce name
  $DBUSER     = "sys-committee";             //Login user name
  $DBPASSWORD = "h78r78d";             //Password
 
  //Connect to Access database
  if (! $con = odbc_connect($DSN, $DBUSER, $DBPASSWORD)) {
    exit("Could not connet to Access database");
  }

/* if (mysqli_connect_errno() )
    echo "Fallo en la conexion con mysql" .mysqli_connect_error();
 */
$action=  $_POST["action"]; //'019811';






 //if ($action =="$action") {
    $query = "SELECT TOP 1 * FROM UnitWiring.dbo.ShikakuTableLogs WHERE ConstructionCode = '$action' ORDER BY Seq DESC";
    $show = odbc_exec($con, $query);
   // $show = mysqli_query($pdo, $query) or die ("error");
	
	echo '<div class="container-fluid">';
		
    echo "<table class='table table-bordered table-striped table-hover table-condensed' border='2px'>
		<thead>
			<tr>
				<th rowspan='2'  style='color: Black; font-size:16px; vertical-align: middle; width: 150px; text-align: center; '>Value</th>
			</tr>
			
		</thead>";
		
   // while ($row = mysqli_fetch_array($show)) {
	 $show = odbc_exec($con, $query);
	while (odbc_fetch_row($show)) {	
	
        echo "<tr>
				
				<td style='text-align:center'>".odbc_result($show,'value')."</td>
				
				
				</tr>";
    }
    echo "</table>"; 
	echo '</div>';
//}  

?>

