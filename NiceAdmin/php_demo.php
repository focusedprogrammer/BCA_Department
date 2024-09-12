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
    
    if(isset($_FILES['fileupload'])){

        $file_name = $_FILES['fileupload']['name'];
        $file_size = $_FILES['fileupload']['size'];
        $file_temp = $_FILES['fileupload']['temp'];
        $file_type = $_FILES['fileupload']['type'];

        move_uploaded_file($file_temp,"NiceAdmin/user.php/");
    }
   
    

    // SQL query to insert the data into the book_issue table
    $sql = "INSERT INTO User_list (Id,name,email,phone,address, semester,gender) VALUES ('{$user_id}', '{$name}', '{$email}', '{$phone}', '{$address}', '{$semester}','{$gender}')";
    echo $sql;
    

    $result = mysqli_query($conn,$sql) or die("query failed");
   
        header("Location: http://localhost/loginpage/niceAdmin/user.php");
      

    // Close the database connection
    mysqli_close($conn);

?>