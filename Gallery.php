<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gallery</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f4f4f4;
        }
        .container {
            width: 100%;
            padding: 20px;
            box-sizing: border-box;
        }
        .section {
            margin-bottom: 40px;
        }
        .section h2 {
            text-align: center;
            color: #333;
            margin-bottom: 20px;
        }
        .gallery {
            display: grid;
            grid-template-columns: repeat(auto-fill, minmax(200px, 1fr));
            gap: 10px;
        }
        .gallery-item {
            overflow: hidden;
            position: relative;
            border-radius: 8px;
            box-shadow: 0 0 8px rgba(0, 0, 0, 0.2);
            background-color: #fff;
            width: 100%;
            aspect-ratio: 1 / 1; /* Maintain square aspect ratio */
        }
        .gallery-item img {
            width: 100%;
            height: 100%;
            object-fit: cover; /* Cover the container */
            display: block;
        }
    </style>
</head>
<body>
    <?php include "header.php" ?>

       
    <div class="container">
        <div class="section">
            <h2>Saturday Activity</h2>
            <div class="gallery">
                <div class="gallery-item">
                    <img src="niceadmin/assets/college-pics/deepak sir.jpg" alt="Saturday Activity1">
                </div>
                <div class="gallery-item">
                    <img src="niceadmin/assets/college-pics/shivsir.jpg" alt="Saturday Activity 2">
                </div>
                <div class="gallery-item">
                    <img src="niceadmin/assets/college-pics/ashish.jpg" alt="Saturday Activity 3">
                </div>
                <div class="gallery-item">
                    <img src="niceadmin/assets/college-pics/ashish.jpg" alt="Saturday Activity 3">
                </div>
                <div class="gallery-item">
                    <img src="niceadmin/assets/college-pics/ashish.jpg" alt="Saturday Activity 3">
                </div>
            </div>
        </div>

        <div class="section">
            <h2>Fresher's Party</h2>
            <div class="gallery">
                <div class="gallery-item">
                    <img src="niceadmin/assets/college-pics/alfa.jpg" alt="Fresher's Party 1">
                </div>
                <div class="gallery-item">
                    <img src="niceadmin/assets/college-pics/group.jpg" alt="Fresher's Party 2">
                </div>
                <div class="gallery-item">
                    <img src="niceadmin/assets/college-pics/grass.jpg" alt="Fresher's Party 3">
                </div>
                <div class="gallery-item">
                    <img src="niceadmin/assets/college-pics/grass.jpg" alt="Fresher's Party 4">
                </div>
                <div class="gallery-item">
                    <img src="niceadmin/assets/college-pics/grass.jpg" alt="Fresher's Party 5">
                </div>
            </div>
        </div>

        <div class="section">
            <h2>College Events</h2>
            <div class="gallery">
                <div class="gallery-item">
                    <img src="niceadmin/assets/college-pics/alfa2.jpg" alt="College Events 1">
                </div>
                <div class="gallery-item">
                    <img src="niceadmin/assets/college-pics/alfa.jpg" alt="College Events 2">
                </div>
                <div class="gallery-item">
                    <img src="niceadmin/assets/college-pics/ashish.jpg" alt="College Events3">
                </div>
                <div class="gallery-item">
                    <img src="niceadmin/assets/college-pics/ashish.jpg" alt="College Events 3">
                </div>
                <div class="gallery-item">
                    <img src="niceadmin/assets/college-pics/ashish.jpg" alt="College Events 3">
                </div>
            </div>
        </div>
    </div>
    <?php include "footer.php" ?>
</body>
</html>
