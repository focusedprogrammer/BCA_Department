<?php
$tra_id = $_GET['id'];
 
include "config.php";
$sql = "DELETE FROM book_issue WHERE transaction_id = {$tra_id}";
$result = mysqli_query($conn,$sql) or die("query failed");

header("Location: http://localhost/loginpage/niceAdmin/Book-issued-list.php");
mysqli_close($conn);

?>