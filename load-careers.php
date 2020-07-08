<?php
$careernewcount = $_POST['careernewcount'];
$db = mysqli_connect("localhost", "postges", "b1c3x39cur4z2", "postgres");
$sql = "SELECT * FROM careers LIMIT $careernewcount";
$result = mysqli_query($db,$sql);
if(mysqli_num_rows($result)>0){
while($row = mysqli_fetch_array($result)){
echo "<div class='careers-1'>";
echo "<span class='roles'>".$row['block']."</span>";
echo "<h3><a href='vacancies.php'>".$row['job']."</a></h3>";
echo "</div>";
}
}
else {
echo "There no more vacancies";
}
