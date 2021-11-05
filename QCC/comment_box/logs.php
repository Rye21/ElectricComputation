<?php

require("db/db.php");
$result = mysqli_query($con, "SELECT * FROM comments ORDER BY id ASC");
while($row=mysqli_fetch_array($result)){
echo "<div class='comments_content'>";
echo "<h4><a href='delete.php?id=" . $row['id'] . "'> X</a></h4>";
echo "<h1 style='font-size:20px;color:blue;margin-top:-7px'>" . $row['name'] . "</h1>";
echo "<h2 style='font-size:10px;margin-top:-5px'>" . $row['date_publish'] . "</h2></br></br>";
echo "<h3 style='margin-top:-20px'>" . $row['comments'] . "</h3>";
echo "</div>";
}
mysqli_close($con);

?>