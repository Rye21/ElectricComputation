<!DOCTYPE html>
<html>
	<head>
		<title>Familiarization</title>
		<meta charset="utf-8">
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8"></meta>
		<meta http-equiv="X-UA-Compatible" content="IE=8; IE=9; IE=10; IE=11; IE=edge,chrome=1"></meta>
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link href="../../bootstrap/css/bootstrap.min.css" rel="stylesheet">
		<script src="../../bootstrap/js/jquery-1.11.3.js"></script>
		<script src="../../bootstrap/js/bootstrap.min.js"></script>
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
			
			label{
				
				font-weight:bold;
				font-size:25px;
				text-align:center;
			}
			.number{
				font-size:25px;
				vertical-align: middle;
				text-align:center;
			}
			@media print {
				#print,#reset{
				display:none;
				
			}
				.theme {background-color:gray !important;}			
			}
 
		</style>
	</head>
	<body>
		<center>
		<table>
			<tr>
				<td>
				<img src="headertrivia.PNG" height="100%" width="100%">
				<label>Name:</label>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
				&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
				&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
				&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
				<label>Date:</label>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
				&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
				&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp 
				
				<label>Score:</label>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
				</td>	
			</tr>
			
		
		
		<center>
		<table>
			<tbody>
			<form id="myForm2">
				<tr >
					
					<td style="text-align:center" width="20%" height="30px" >
					<label style="font-size:30px">Pattern</label>	
					</td>
					<td style="text-align:center" width="40%">
					<label style="text-align:center;font-size:30px">Japanese Reading</label>
					<!--<textarea   name="name" style="width:525%;height:47px"></textarea>-->
					</td>
					<td style="text-align:center" width="40%"  >
					<label style="text-align:center;font-size:30px">English Reading</label>	
					</td>
					
					
				</tr>
				<tr>
				<td class="number" height="120px" contentEditable="true">
				
					<!--<form action="uploads.php" method="post" enctype="multipart/form-data">
						Select image to upload:
						<input type="file" name="item_photos[]" id="item_photos" multiple ><br>
						<input type="submit" name="submit" value="UPLOAD TRIVIA"/></center>
					</form>-->
					
				</td>
				<td class="number" contenteditable='true'></td>
				<td class="number"contenteditable='true'></td>
				</tr>
				<tr>
				<td class="number" height="120px" contentEditable="true">
				<td class="number" contenteditable='true'></td>
				<td class="number"contenteditable='true'></td>
				</tr>
				<tr>
				<td class="number" height="120px" contentEditable="true">
				<td class="number" contenteditable='true'></td>
				<td class="number"contenteditable='true'></td>
				</tr>
				<tr>
				<td class="number" height="120px" contentEditable="true">
				<td class="number" contenteditable='true'></td>
				<td class="number"contenteditable='true'></td>
				</tr>
				<tr>
				<td class="number" height="120px" contentEditable="true">
				<td class="number" contenteditable='true'></td>
				<td class="number"contenteditable='true'></td>
				</tr>
				<tr>
				<td class="number" height="120px" contentEditable="true">
				<td class="number" contenteditable='true'></td>
				<td class="number"contenteditable='true'></td>
				</tr>
				<tr>
				<td class="number" height="120px" contentEditable="true">
				<td class="number" contenteditable='true'></td>
				<td class="number"contenteditable='true'></td>
				</tr>
				<tr>
				<td class="number" height="120px" contentEditable="true">
				<td class="number" contenteditable='true'></td>
				<td class="number"contenteditable='true'></td>
				</tr>
				<tr>
				<td class="number" height="120px" contentEditable="true">
				<td class="number" contenteditable='true'></td>
				<td class="number"contenteditable='true'></td>
				</tr>
				<tr>
				<td class="number" height="120px" contentEditable="true">
				<td class="number" contenteditable='true'></td>
				<td class="number"contenteditable='true'></td>
				</tr>
				
				
			<table>	
				<tr height="100%" width="100%">
					<td>
						<img src="motto.PNG" height="100%" width="100%">
					</td>
				</tr>
			</table>
			<br>
			<button  class="btn btn-danger" id="reset" onClick="myFunction1()" style="font-size:30px;">Reset</button>			
			</form>
			<button  class="btn btn-success" id="print" onClick="window.print()" style="font-size:30px;">Print this page</button>
			</tbody>			
		</table>
		</center>
	</body>
</html>
<script>
function myFunction() {
    document.getElementById("myForm2").reset();   
}
function editable(){
		//alert('')
		var edit_flag = false;
		return function(){
			if(edit_flag) return
			var column = $(this).attr('id').split('-')[0]
			var id = $(this).attr('id').split('-')[1]
			//var input = '<textarea>'+$(this).text()+'</textarea>';
			
			if(column == 'Q1,detail_of_confirmation','jbox_feedback','uw_feedback'){
				var input = '<textarea>'+$(this).text()+'</textarea>';
			}else{
				 var input = 
				 '<textarea class="form-control" id="edit_datepicker" value="'+$(this).text()+'"></textarea>'
			/* '<select>'+
				'<option value="'+$(this).text()+'">'+$(this).text()+'</option>'+
				'<option value="Sample Remarks">Sample Remarks</option>'+
				'<option value="test">test</option>'+
			'</select>';  */
			}
			  

			$(this).html(input)
			$("textarea,select,input",this).focus().blur(function(){
				saveEditable($(this).val(),id,column)
				$(this).after($(this).val()).unbind().remove()
				edit_flag = false
			})
			edit_flag = true;
		}
	}
</script>