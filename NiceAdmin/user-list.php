<?php
include "config.php";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $address = $_POST['address'];
    $semester = $_POST['semester'];
    $gender = $_POST['gender'];

    // Handle file upload
if (isset($_FILES['fileupload']) && $_FILES['fileupload']['error'] == 0) {
    $target_dir = "uploads/";
    // Create a unique name for the file to avoid overwriting
    $file_name = uniqid() . "_" . basename($_FILES["fileupload"]["name"]);
    $target_file = $target_dir . $file_name;
    

    // Save file to server
    if (move_uploaded_file($_FILES["fileupload"]["tmp_name"], $target_file)) {
        echo "The file " . htmlspecialchars($file_name) . " has been uploaded.";
    } else {
        echo "Sorry, there was an error uploading your file.";
    }
} else {
    $file_name = null;  
}
  move_uploaded_file($file_temp,"NiceAdmin/user.php/".$file_name);

    // Insert form data into the database
    $sql = "INSERT INTO users (name, email, phone, address, semester, gender, file_name)
            VALUES ('$name', '$email', '$phone', '$address', '$semester', '$gender', '$file_name')";


    if ($conn->query($sql) === TRUE) {
        echo "New record created successfully";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}

// Close connection
$conn->close();
?>
