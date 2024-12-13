<?php
// Include the database connection
include 'config.php';

    $user_id = $_POST['Id'];
    $name = $_POST['name'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $address = $_POST['address'];
    $semester = $_POST['semester'];
    $gender = $_POST['gender'];
    
    $sql = "INSERT INTO User_list (Id,name,email,phone,address, semester,gender) VALUES ('{$user_id}', '{$name}', '{$email}', '{$phone}', '{$address}', '{$semester}','{$gender}')";
    echo $sql;
    

    $result = mysqli_query($conn,$sql) or die("query failed");
   
        header("Location: http://localhost/loginpage/niceAdmin/user.php");
      

    // Close the database connection
    mysqli_close($conn);

?>