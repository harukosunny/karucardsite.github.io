<?php

if(isset($_POST["id"]))
{
 $connect = mysqli_connect("localhost", "postges", "b1c3x39cur4z2", "postgres");
 $query = "SELECT * FROM employee WHERE id = '".$_POST["id"]."'";
 $result = mysqli_query($connect, $query);
 while($row = mysqli_fetch_array($result))
 {
  $data["name"] = $row["name"];
  $data["address"] = $row["address"];
  $data["gender"] = $row["gender"];
  $data["designation"] = $row["designation"];
  $data["age"] = $row["age"];
 }

 echo json_encode($data);
}
?>