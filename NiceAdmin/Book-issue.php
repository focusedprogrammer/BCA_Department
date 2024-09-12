
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Book issue form</title>
    <link rel="stylesheet" href="style2.css">
</head>
<body>


    <div class="main">
        <div class="heading"><h1>Book Issue</h1></div>
        <form method = "POST" action="issued.php" >
            <label for="User name">User Name</label>
            <input type="text" class="form-control" name="username" placeholder="enter username " required >
            <label for="Book id">Book id</label>
            <input type="text" class="form-control" name="book_id" placeholder="enter Book id " required >
            <label for="issue date"> issue Date </label>
            <input type="date" class="form-control" name="issue_date"  required >
            <label for="returning">Due date</label>
            <input type="date" class="form-control" name="due_date"  required >
         <div class="btn">
            <button type="Add" >submitt</button>
         </div>
        </form>
       

        
    </div>
    
</body>
</html>