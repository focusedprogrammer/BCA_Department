<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Login</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
</head>
<body class="bg-dark">
    <div class="container" id="container">
        <div class="box">
            <h1><span>Login Form</span></h1>
            <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
                <label for="username">Username</label>
                <input type="text" name="username" id="username" placeholder="Enter username" required>
                <label for="password">Password</label>
                <input type="password" name="password" id="password" placeholder="Enter password" required>
                <button type="submit" name="login" class="btn btn-dark ">Login</button>
            </form>
            <?php
                if(isset($_POST['login'])){
                    include "NiceAdmin/config.php";
                    
                    // Get the username and password from POST request
                    $username = mysqli_real_escape_string($conn, $_POST['username']);
                    $password = md5($_POST['password']); // Hash the password using md5

                    // SQL query to check if the user exists
                    $sql = "SELECT user_id, username FROM form WHERE username = '{$username}' AND password = '{$password}'";
                    $result = mysqli_query($conn, $sql) or die("Query Failed");

                    // If a matching record is found
                    if(mysqli_num_rows($result) > 0){
                        session_start();
                        $row = mysqli_fetch_assoc($result);
                        $_SESSION["username"] = $row['username'];
                        $_SESSION["user_id"] = $row['user_id'];

                        // Redirect to the specified page
                        header("Location: http://localhost/loginpage/NiceAdmin/index.html");
                        exit(); // Stop further script execution after redirection
                    } else {
                        echo '<div class="text-danger mt-3">Username and password are incorrect.</div>';
                    }
                }
            ?>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
