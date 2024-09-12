<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About Us - Our Teachers</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #2e867b;
        }
        .container {
            width: 80%;
            margin: auto;
            overflow: hidden;
        }
        header {
            background: #2e867b;
            color: #fdfbfb;
            padding: 10px 0;
            text-align: center;
        }
        header h1 {
            margin: 0;
        }
        .teacher-profile {
            background: #c9c7c7b7;
            margin: 20px 0;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0,0,0,0.1);
            display: flex;
            align-items: center;
        }
        .teacher-profile img {
            border-radius: 50%;
            width: 150px;
            height: 150px;
            margin-right: 20px;
        }
        .teacher-profile h2 {
            margin-top: 0;
            color: #333;
        }
        .teacher-profile p {
            color: #666;
        }
        img{
            object-fit: cover;
        }
    </style>
</head>
<body>
    <?php
        include  "header.php";
    ?>

<header>
    <div class="container">
        <h1> Department Teacher's</h1>
    </div>
</header>

<div class="container">

    <div class="teacher-profile">
        <img src="niceadmin/assets/college-pics/ashish.jpg" alt="Teacher 1">
        <div>
            <h2>Mr. Dinesh Kumar</h2>
            <p><strong>Position:</strong> .......</p>
            <p>Mr. Dinesh Kumar is a distinguished professor with a passion for quantum mechanics. She has been Mahadev P.G.  College since 2018 and has published numerous papers in leading journals.</p>
        </div>
    </div>

    <div class="teacher-profile">
        <img src="niceadmin/assets/college-pics/deepak sir.jpg" alt="Teacher 2">
        <div>
            <h2>Mr. Deepak Singh</h2>
            <p><strong>Position:</strong>  Professor of Mathematics</p>
            <p>Mr. Deepak Singh specializes in applied mathematics and has been instrumental in developing new teaching methods. He joined Mahadev P.G.  College in 2018.</p>
        </div>
    </div>

    <div class="teacher-profile">
        <img src="niceadmin/assets/college-pics/shivsir.jpg" alt="Teacher 3">
        <div>
            <h2>Mr. Shiv Yadav</h2>
            <p><strong>Position:</strong> Lecturer in English</p>
            <p>Ms. Shiv Yadav is known for her innovative approach to teaching literature and language. She has been part of the XYZ College faculty since 2020.</p>
        </div>
    </div>

    <div class="teacher-profile">
        <img src="niceadmin/assets/college-pics/ashish.jpg" alt="Teacher 4">
        <div>
            <h2>Mr. Vaibhav Mishra</h2>
            <p><strong>Position:</strong> Associate Professor of Computer Science</p>
            <p>Vaibhav Mishra has a strong background in software engineering and has contributed significantly to research in artificial intelligence. He has been with Mahadev P.G. College since 2022.</p>
        </div>
    </div>

</div>

<?php  include "footer.php"  ?>

</body>
</html>
