
MySQL DB Name	MySQL User Name	MySQL Password	MySQL Host Name	PHPMyAdmin

if0_37401207_bcadepartment	if0_37401207	(Your vPanel Password)	sql206.infinityfree.com	


<?php
 $conn = mysqli_connect("sql206.infinityfree.com","if0_37401207","Ashishmaurya","if0_37401207_bcadepartment") or die("connection failed :" . mysqli_connect_error());

?>