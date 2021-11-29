<?php

 include("./connect_db.php");

 $id = $_GET["id"];

 $sql = "SELECT * FROM begeleidersrooster WHERE id = '$id'";

 $result = mysqli_query($conn, $sql);

 $record = mysqli_fetch_assoc($result);

 ?>