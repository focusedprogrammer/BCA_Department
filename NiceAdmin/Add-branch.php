<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Book issue form</title>
    <link rel="stylesheet" href="style2.css">
    <style>
        .form-control {
        display: block;
        width: 100%;
        padding: 10px;
        margin-bottom: 10px;
        box-sizing: border-box;
    }

    .btn {
        
        margin-top: 20px;
        float:right;
    }
    .main {
            max-width: 400px;
            margin: 30 auto;
            padding: 20px;
            border: 1px solid #ccc;
            border-radius: 10px;
            background-color: #f9f9f9;
        }
    </style>
</head>
<body>
    <div class="main">
        <div class="heading"><h1>Add New Branch</h1></div>
        <form method = "post" action="Add-branch.html" >
            <label for="Branch Name">Branch Name</label>
            <input type="text" class="form-control" name="Branch Name" placeholder="enter Branch Name " required >
            <label for="Status">Status</label>
            <select class="form-control" class="category" id="category" required>
                <option value="active">Active</option>
                <option value="inactive">Inactive</option>
            </select>
            <div class="btn">
                <button type="submit" >submit</button>
            </div>
        </form>
       
    </div>
    
</body>
</html>