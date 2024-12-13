<?php
$u_id = $_GET['id'];
 
include "config.php";
$sql = "DELETE FROM user_list WHERE Id = {$u_id}";
$result = mysqli_query($conn,$sql) or die("query failed");

header("Location: http://localhost/loginpage/niceAdmin/user.php");
mysqli_close($conn);

?>