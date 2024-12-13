<?php
$b_id = $_GET['id'];
 
include "config.php";
$sql = "DELETE FROM book_list WHERE book_id = {$b_id}";
$result = mysqli_query($conn,$sql) or die("query failed");

header("Location: http://localhost/loginpage/niceAdmin/Book-list.php");
mysqli_close($conn);

?>