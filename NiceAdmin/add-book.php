<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Book</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
    <style>
        .container{
            /* border:2px solid ; */
            padding: 0;
           
        }
        form{
            /* border: 2px solid black; */
            display: flex;
            flex-direction: column;
            width: 600px;
            height: 600px;
            border-radius:10px
            justify-content: center;
            margin: 0% 30%;
            padding: 0px 2px;
            
        }
        .btn{
            display: flex;
            display: inline;
            justify-content: center;
            text-align: center;
            margin: 1% 17%;
            float: right;
        }
        label{
           font-size : 20px;
        }
        input{
            font-size : 18px;
        }
    </style>
</head>
<body>
    <div class="container">
    <form  action="add_book.php" method="post">
        <h1 style="text-align: center;">Add Book</h1>
        <label for="Book_Id">Book Id</label>
        <input type="text" class="form-control" id="bookId" name="book_id" placeholder="enter book id" required>

        <label for="tittle">Tittle:</label>
        <input type="text" class="form-control" id="tittle" name="tittle" placeholder="enter book tittle" required>

        <label for="author">Author:</label>
        <input type="text" class="form-control" id="author" name="author" placeholder="enter book Author" required>

        <label for="ISBN">ISBN:</label>
        <input type="text" class="form-control" id="ISBN" name="ISBN" placeholder="enter IBSN" required>

        <label for="publisher">Publisher:</label>
        <input type="text" class="form-control" id="publisher" name="publisher" placeholder="enter book Publisher" required>

        <label for="year">Year of Publication:</label>
        <input type="number" class="form-control" id="year" name="year_of_publication" placeholder="enter Year of Publication " required>

        <label for="category">Category:</label>
        <select class="form-control" id="category" name="category" required>
           <option value="fiction">c programming</option>
           <option value="non-fiction">c++</option>
           <option value="science">web devlopment</option>
           <option value="history">DBMS</option>
        </select>

        <!-- <label for="copies">Number of Copies:</label>
        <input type="number" class="form-control" id="copies" name="copies_available" placeholder="" required> -->
        <div >
            <button class="btn btn-primary mr5">Add Book </button>
        </div>
    </div>
    </form>
    
    
</body>
</html>