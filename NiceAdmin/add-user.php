<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add user</title>
    <link rel="stylesheet" href="style2.css">
    <style>
        button{
            float:right;
            margin: 3px;
        }
        select{
         font-size: 20px;
         padding: 7px;
         border: 2px solid;
         border-radius: 5px;
       }
    </style>
</head>
<body>
   <div class="main">
      <div class="heading"><h1>Add User</h1></div>
      <form method = "post" action="php_demo.php" class = "form-control" enctype="multipart/form-data" >
          <label for="name">Name</label>
          <input type="text" class="form-control" name="name" placeholder="enter user name " required >
          <label for="email">E-mail</label>
          <input type="text" class="form-control" name="email" placeholder="enter email " required >
          <label for="phone">Phone</label>
          <input type="number" class="form-control" name="phone" placeholder="enter phone number " required >
          <label for="address">Address</label>
          <input type="text" class="form-control" name="address" placeholder="enter address " required >
          <label for="semester">Add Semester</label>
          <select name="semester" id="select" >
            <option value="semester">semester 1st</option>
            <option value="semester">semester 2nd</option>
            <option value="semester">semester 3rd</option>
            <option value="semester">semester 4th</option>
            <option value="semester">semester 5th</option>
            <option value="semester">semester 6th</option>
            
          </select>
          <label for="gender">Gender</label>
          <input type="text" class="form-control" name="gender" placeholder="enter Gender " required >
          
          <!-- <label for="fileupload">Select a file to upload</label>
          <input type="file" name="fileupload" id="fileupload"> -->
          
       <div class="btn">
          <button onclick="showAlert()" >Add User</button>
      </div>
      </form>
      
  </div>
   
  <script>
//    function showAlert() {
//        alert("User added successfully");
//    }
</script>   
</body>
</html>