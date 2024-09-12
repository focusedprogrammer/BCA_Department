<?php
// Include the database connection
include 'config.php';

    $book_id = $_POST['book_id'];
    $tittle = $_POST['tittle'];
    $author = $_POST['author'];
    $ISBN = $_POST['ISBN'];
    $publisher = $_POST['publisher'];
    $publication= $_POST['year_of_publication'];
   
    

    // SQL query to insert the data into the book_issue table
    $sql = "INSERT INTO book_list (book_id,tittle,author,ISBN,publisher, year_of_publication) VALUES ('{$book_id}', '{$tittle}', '{$author}', '{$ISBN}', '{$publisher}', '{$publication}')";
    echo $sql;
    

    $result = mysqli_query($conn,$sql) or die("query failed");
   
        header("Location: http://localhost/loginpage/niceAdmin/book-list.php");
      

    // Close the database connection
    mysqli_close($conn);

?>