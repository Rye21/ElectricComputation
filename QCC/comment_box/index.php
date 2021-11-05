<html>
<head>
<link href="css/reset.css" rel="stylesheet" type="text/css">
<link href="css/style.css" rel="stylesheet" type="text/css">
<link rel="icon" href="http://hrdapps33/qcc/comment_box/images/10icon-idea.png" type="image/x-icon" />
<link href="../../bootstrap/css/bootstrap.min.css" rel="stylesheet">
<script src="../../bootstrap/js/jquery-1.11.3.js"></script>
<script src="../../bootstrap/js/bootstrap.min.js"></script>
<title>suggestions?</title>
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>

<script>

	function commentSubmit(){
		if(form1.name.value == '' && form1.comments.value == ''){ //exit if one of the field is blank
			alert('Enter your message !');
			return;
		}
		var name = form1.name.value;
		var comments = form1.comments.value;
		var xmlhttp = new XMLHttpRequest(); //http request instance
		
		xmlhttp.onreadystatechange = function(){ //display the content of insert.php once successfully loaded
			if(xmlhttp.readyState==4&&xmlhttp.status==200){
				document.getElementById('comment_logs').innerHTML = xmlhttp.responseText; //the chatlogs from the db will be displayed inside the div section
			}
		}
		xmlhttp.open('GET', 'insert.php?name='+name+'&comments='+comments, true); //open and send http request
		xmlhttp.send();
	}
	
		$(document).ready(function(e) {
			$.ajaxSetup({cache:false});
			setInterval(function() {$('#comment_logs').load('logs.php');}, 2000);
		});
		
</script>
</head>

<body>
<a type="button" class="btn navbar-btn btn-warning btn-md shake-opacity" style="font-family: Georgia;font-weight:bold;float:right" href="../index.php"><i class="glyphicon glyphicon-home"> HOME</i></a>&nbsp;	
<div id="container">
	<div class="page_content" style="font-size:50px" align="center">
    	QCC TRIVIA SUGGESTIONS?
    </div><br>
    <div class="comment_input">
        <form name="form1">
        	<input type="text" name="name" placeholder="Name..." style="font-size:15px"/></br></br>
            <textarea name="comments" placeholder="Suggestion Here..." style="width:100%; height:100px;font-size:20px;position:auto"></textarea></br></br>
            <a href="#" onClick="commentSubmit()" class="button">Suggest</a></br>
        </form>
    </div>
    <div id="comment_logs" style="font-size:20px">
    	Loading comments...
    </div>
</div>
</body>
</html>