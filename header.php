<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My Navbar</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">
    <style>
        .navbar-nav .nav-link {
            margin-right: 15px; 
            font-size: 18px; 
        }
        .navbar-nav .nav-link:last-child {
            margin-right: 0; 
        }
        .navbar-nav .nav-link.active {
            font-weight: bold;
            color: #0d6efd !important;
        }
    </style>
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <div class="container-fluid">
        <a class="navbar-brand" href="#"><h1>BCA Department</h1></a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse p-2" id="navbarNav">
            <ul class="navbar-nav ms-auto">
                <li class="nav-item">
                    <a class="nav-link" href="index.php">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="About.php">About Us</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="contact.php">Contact Us</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="notice.php">Notices</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="Gallery.php">Gallery</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="login.php"><i class="fa-solid fa-circle-user fa-2x"></i></a>
                </li>
            </ul>
        </div>
    </div>
</nav>

    <!-- Bootstrap JS and dependencies -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.7/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.min.js"></script>
    <script>
        document.addEventListener('DOMContentLoaded', (event) => {
            var current = location.pathname.split('/').pop();
            var navLinks = document.querySelectorAll('.navbar-nav .nav-link');

            navLinks.forEach(link => {
                if (link.getAttribute('href') === current) {
                    link.classList.add('active');
                }
            });
        });
    </script>
</body>
</html>
