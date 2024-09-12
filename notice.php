<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Notice</title>
    <style>
         
        .notice-board {
            width: 1000px;
            height: auto;
             margin-left: 18%;
             margin-top: 10px;
              border: 2px solid #333;
             background-color: #f9f9f9;
             box-shadow: 10px 6px 8px rgba(0, 0, 0, 0.1);
             text-align: center;
    
            }
      .notice-heading{
              text-align: center;
            }

            Title Styling
      .notice-board h1 {
               text-align: center;
               font-size: 2em;
               color: #333;
               margin-bottom: 10px;
            }


        .notice {
            padding: 15px;
            margin: 10px 0;
            border: 1px solid #ccc;
            background-color: #fff;
            transition: background-color 0.3s ease;
        }


        .notice:hover {
           background-color: #f1f1f1;
        }


        .important {
           background-color: #ffefef;
           border-left: 5px solid red;
        }


        .notice-date {
           font-size: 0.9em;
           color: #666;
           margin-bottom: 5px;
        }
    </style>
</head>
<body>
    <?php
         include "header.php";
    ?>
    <div class="notice-board">
        <h1>All Notice</h1>

      
      <div class="notice">
            <div class="notice-date">August 27, 2024</div>
            <p>Exam forms are available for submission. Last date: 31st August.</p>
        </div>

       
        <div class="notice important">
            <div class="notice-date">August 25, 2024</div>
            <p>Important: College will remain closed on 28th August due to a holiday.</p>
        </div>

        
        <div class="notice">
            <div class="notice-date">August 20, 2024</div>
            <p>Results for Semester 3 have been declared. Please check your results online.</p>
        </div>

      </div>

    
    
</body>
</html>