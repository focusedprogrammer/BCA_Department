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
      <form method = "post" action="user-list.php" class = "form-control" enctype="multipart/form-data" >
          <label for="name">Name</label>
          <input type="text" class="form-control" name="name" placeholder="enter user name " required >
          <label for="email">E-mail</label>
          <input type="text" class="form-control" name="email" placeholder="enter email " required >
          <label for="phone">Phone</label>
          <input type="number" class="form-control" name="phone" placeholder="enter phone number " required >
          <label for="address">Address</label>
          <input type="text" class="form-control" name="address" placeholder="enter address " required >
          <label for="semester">Add Semester</label>
          <?php 
          include "config.php";
            $sql = "SELECT *FROM studentclass";

            $result = mysqli_query($conn,$sql) or die("Query failed");

            if(mysqli_num_rows($result) > 0){
              echo '<select name="semester" id="select" >';
              while($row = mysqli_fetch_assoc($result)){
                
                echo "<option value='{$row['sid']}'>{$row['semester']}</option>";
              }
              echo "</select>";
          }
          ?>
          <label for="gender">Gender</label>
          <input type="text" class="form-control" name="gender" placeholder="enter Gender " required >
          
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