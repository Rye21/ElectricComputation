
<style>
.column {
	margin: 15px 15px 0;
	padding: 0;
}
.column:last-child {
	padding-bottom: 60px;
}
.column::after {
	content: '';
	clear: both;
	display: block;
}
.column div {
	position: relative;
	float: left;
	width: 300px;
	height: 200px;
	margin: 0 0 0 25px;
	padding: 0;
}
.column div:first-child {
	margin-left: 0;
}
.column div span {
	position: absolute;
	bottom: -20px;
	left: 0;
	z-index: -1;
	display: block;
	width: 300px;
	margin: 0;
	padding: 0;
	color: #444;
	font-size: 18px;
	text-decoration: none;
	text-align: center;
	-webkit-transition: .3s ease-in-out;
	transition: .3s ease-in-out;
	opacity: 0;
}
figure {
	width: 300px;
	height: 200px;
	margin: 0;
	padding: 0;
	background: #fff;
	overflow: hidden;
}
figure:hover+span {
	bottom: -36px;
	opacity: 1;
}

/*sample*/
.hvrbox * {
	box-sizing: border-box;
}
.hvrbox {
	position: relative;
	display: inline-block;
	overflow: hidden;
	max-width: 100%;
	height: auto;
}
.hvrbox img {
	max-width: 300%;
}
.hvrbox .hvrbox-layer_bottom {
	display: block;
}
.hvrbox .hvrbox-layer_top {
	opacity: 0;
	position: absolute;
	top: 0;
	left: 0;
	right: 0;
	bottom: 0;
	width: 100%;
	height: 100%;
	background: rgba(0, 0, 0, 0.6);
	color: #fff;
	padding: 15px;
	-moz-transition: all 0.4s ease-in-out 0s;
	-webkit-transition: all 0.4s ease-in-out 0s;
	-ms-transition: all 0.4s ease-in-out 0s;
	transition: all 0.4s ease-in-out 0s;
	
}
.hvrbox:hover .hvrbox-layer_top,
.hvrbox.active .hvrbox-layer_top {
	opacity: 1;
}
.hvrbox .hvrbox-text {
	text-align: center;
	font-size: 18px;
	display: inline-block;
	position: absolute;
	top: 50%;
	left: 50%;
	-moz-transform: translate(-50%, -50%);
	-webkit-transform: translate(-50%, -50%);
	-ms-transform: translate(-50%, -50%);
	transform: translate(-100%, -50%);
}
.hvrbox .hvrbox-text_mobile {
	font-size: 15px;
	border-top: 1px solid rgb(179, 179, 179); /* for old browsers */
	border-top: 1px solid rgba(179, 179, 179, 0.7);
	margin-top: 5px;
	padding-top: 2px;
	display: none;
}
.hvrbox.active .hvrbox-text_mobile {
	display: block;
}
.grid {
	padding: 20px 20px 100px 38px;
	max-width: 1300px;
	margin: 0 auto;
	list-style: none;
	
}


.grid figcaption {
	position: absolute;
	top: 0;
	left: 0;
	padding:10px;
	background: rgba(0, 0, 0, 0.6);
	height:500px;
	width:400px;
	color: #ed4e6e;
	text-align:center;
	
	
}
.grid figcaption h3 {
	//margin:80px;
	font-size:50px;
	//padding:0px;
	color: #00ffff;
	font-family: 'Bilbo Swash Caps';
	
}
span{
	color:  khaki;
	
}
#sample{
	opacity:0.4;
}
.typewriter h3 {
  color: #fff;
  font-family: Bilbo Swash Caps;
  overflow: hidden; /* Ensures the content is not revealed until the animation */
  border-right: .15em solid orange; /* The typwriter cursor */
  white-space: nowrap; /* Keeps the content on a single line */
  //margin: 0 auto; /* Gives that scrolling effect as the typing happens */
  letter-spacing: .15em; /* Adjust as needed */
  animation: 
    typing 3.5s steps(30, end),
    blink-caret 20s step-end infinite;
}

/* The typing effect */
@keyframes typing {
  from { width: 0 }
  to { width: 85% }
}

/* The typewriter cursor effect */
@keyframes blink-caret {
  from, to { border-color: transparent }
  100% { border-color: none }
}
.topleft{
	position:absolute;
    top:-25px;
    left:- 50px;
    font-size:25px;
	color: red;
	
}





</style>
<div class="container-a2">
	
		<ul class="grid cs-style-1">	
			<li>	
				<?php	
					 $try = @$_REQUEST["category"];

					 
					// Include the database configuration file
					include "db_connect.php"; 
				
					// Get images from the database
					$query = $con->query("SELECT * FROM `qcc` WHERE category = '$try'");
					
					if($query->num_rows > 0){
						while($row = $query->fetch_assoc()){
							
							$image_src = $row["item_photos"];
							$name =$row["id"];
							$y = $row["description"];
								
				?>	
					<div class="hvrbox">
						<a href="view.php?id=<?php echo $y; ?>"><img src="<?php echo $image_src; ?>" id="sample" alt="" style="width:397px;height:300px" class="gallery" /></a>								
						<figcaption class="typewriter">
							<h2 class="topleft"><?php echo $name; ?></h2>
							<h3>Did you know?</h3>
							<span><?php echo $y; ?></span>	
							
						</figcaption>
						<div class="hvrbox-layer_top">
							<div class="hvrbox-text"><a href="view.php?id=<?php echo $name; ?>"><img src="<?php echo $image_src; ?>" id="<?php echo $image_src; ?>" alt="" style="width:397px;height:300px" class="gallery" /></a></div>
						</div>
					</div>	
					
						
				<?php }
				}else{ ?>
					<p>No image(s) found...</p>
				<?php } ?>
			</li>	
		</ul>
	</div>