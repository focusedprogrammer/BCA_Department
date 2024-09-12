<?php
// Include the database connection
include 'config.php';

    $username = $_POST['username'];
    $book_id = $_POST['book_id'];
    $issue_date = $_POST['issue_date'];
    $due_date = $_POST['due_date'];
   
    

    // SQL query to insert the data into the book_issue table
    $sql = "INSERT INTO book_issue (username, book_id, issue_date, due_date) VALUES ('{$username}', '{$book_id}', '{$issue_date}', '{$due_date}')";
    echo $sql;
    

    $result = mysqli_query($conn,$sql) or die("query failed");
   
        header("Location: http://localhost/loginpage/niceAdmin/Book-issued-list.php");
      

    // Close the database connection
    mysqli_close($conn);

?>