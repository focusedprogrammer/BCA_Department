<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Us</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome CSS -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">
    <style>
        .contact-page {
            padding: 40px 0;
        }
        .contact-info {
            margin-bottom: 40px;
        }
        .contact-info .icon {
            font-size: 24px;
            margin-right: 10px;
            color: #0d6efd;
        }
        .contact-info p {
            margin: 0;
        }
        .contact-form {
            background: #afb5b8;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(192, 153, 153, 0.1);
        }
        .contact-form .form-group {
            margin-bottom: 15px;
        }
        .contact-form .form-control {
            border-radius: 8px;
        }
        .map {
            height: 400px;
            margin-bottom: 40px;
        }
        .submit-btn {
            background: #0d6efd;
            color: #fff;
            border: none;
        }
        .submit-btn:hover {
            background: #0b5ed7;
        }
    </style>
</head>
<body>

    <?php
        include "header.php";
    ?>
    <div class="container contact-page">
        <h1 class="text-center mb-4">Contact Us</h1>
        
        <div class="row">
            <!-- Contact Information -->
            <div class="col-md-6 contact-info">
                <h4>Contact Information</h4>
                <div class="d-flex align-items-center mb-3">
                    <i class="fas fa-map-marker-alt icon"></i>
                    <p>Mahadev P.G. college ,Bariyasanpur,Varanasi</p>
                </div>
                <div class="d-flex align-items-center mb-3">
                    <i class="fas fa-phone icon"></i>
                    <p>+91 8596425325</p>
                </div>
                <div class="d-flex align-items-center mb-3">
                    <i class="fas fa-envelope icon"></i>
                    <p><a href="mailto:info@college.edu">Manishmaurya3699@gmail.com</a></p>
                </div>
                <div class="d-flex align-items-center">
                    <i class="fas fa-globe icon"></i>
                    <p><a href="http://www.college.edu" target="_blank">www.Mahadev P.G. college.edu</a></p>
                </div>
            </div>
            
            <!-- Contact Form -->
            <div class="col-md-6">
                <div class="contact-form">
                    <h4>Send Us a Message</h4>
                    <form action="submit_contact.php" method="post">
                        <div class="form-group">
                            <label for="name">Name</label>
                            <input type="text" class="form-control" id="name" name="name" required>
                        </div>
                        <div class="form-group">
                            <label for="email">Email</label>
                            <input type="email" class="form-control" id="email" name="email" required>
                        </div>
                        <div class="form-group">
                            <label for="message">Message</label>
                            <textarea class="form-control" id="message" name="message" rows="4" required></textarea>
                        </div>
                        <button type="submit" class="btn btn-outline-success submit-btn">Send Message</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <?php  include "footer.php"  ?>

    <!-- Bootstrap JS and dependencies -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.7/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.min.js"></script>
</body>
</html>
