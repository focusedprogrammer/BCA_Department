<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Book List</title>
    <style>
        table {
            border-collapse: collapse;
            width: 50%;
        }
        th {
            padding: 10px;
            text-align: center;
            background-color: #f2f2f2;
            font-weight: bold;
        }
        tr {
            margin: 0px;
            padding: 10px;

        }
        button{
            padding: 5px;
            background-color: red;
            color: white;
            border-radius: 5px;
            cursor: pointer;
            font-size: 16px;
        }
        td{
            text-align: center;
            background-color: #f3eeee;
        }
        td button a{
            text-decoration: none;
            color: white;
        }
    </style>
</head>
<body>
    <center>
        
        <table>
            <?php  
            include "config.php";
            $sql = "SELECT * FROM book_list";
            $result = mysqli_query($conn,$sql) or die("query failed");
           
            if(mysqli_num_rows($result)>0){
            ?>
            <thead>
                <h1>Book List</h1>
                <tr>
                    <th>Book Id</th>
                    <th>Tittle</th>
                    <th>Author</th>
                    <th>ISBN</th>
                    <th>Publisher</th>
                    <th>Year of Publication</th>
                    <th>Action</th>
                </tr>
            </thead>
            
            <tbody>
            <?php
                    while($row = mysqli_fetch_assoc($result)){
                ?>
                <tr>
                    <td><?php echo $row['book_id']; ?></td>
                    <td><?php echo $row['tittle']; ?></td>
                    <td><?php echo $row['author']; ?></td>
                    <td><?php echo $row['ISBN']; ?></td>
                    <td><?php echo $row['publisher']; ?></td>
                    <td><?php echo $row['year_of_publication']; ?></td>
                    <td><button type="button" onclick="showAlert()"><a href="#">Delete</a></button></td>
                </tr>
                <?php } ?>
            </tbody>
           
        </table>
        <?php }
        else{
            echo"<h2>No Record is Found</h2>";

        }
        mysqli_close($conn);
        ?>
    </center>

    <script>
    function showAlert() {
        alert("User Record Deleted Successfully");
    }
</script>
    
</body>
</html>