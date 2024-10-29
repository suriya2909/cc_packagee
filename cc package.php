<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hotel Feedback Form</title>
    
    <style>
        
        body {
            background-image: url('image.jpg'); 
            background-size: cover; 
            background-position: center; 
            background-repeat: no-repeat;
            margin: 0;
            font-family: 'Helvetica Neue', Arial, sans-serif;
        }
        .container {
            max-width: 600px;
            margin: 0 auto;
            background: rgba(255, 255, 255, 0.8);
            border-radius: 10px;
            box-shadow: 0 4px 15px rgba(0, 0, 0, 0.1);
            padding: 30px;
        }
        .header {
            text-align: center;
            margin-bottom: 20px;
        }
        .header h1 {
            font-size: 2.5em;
            color: #333;
        }
        form {
            display: flex;
            flex-direction: column;
        }
        label {
            font-weight: bold;
            margin-bottom: 8px;
            color: #444;
        }
        input[type="text"],
        input[type="email"],
        textarea {
            padding: 12px;
            margin-bottom: 15px;
            border: 1px solid #ccc;
            border-radius: 5px;
            font-size: 1em;
            width: 100%;
            transition: border-color 0.3s;
        }
        input[type="text"]:focus,
        input[type="email"]:focus,
        textarea:focus {
            border-color: #007BFF;
        }
        .rating {
            margin-bottom: 15px;
        }
        .rating label {
            margin-right: 10px;
        }
        button {
            padding: 12px 20px;
            background-color: #28a745;
            color: white;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            font-size: 1em;
            transition: background-color 0.3s;
        }
        button:hover {
            background-color: #218838;
        }
        .footer {
            text-align: center;
            margin-top: 20px;
        }
        .footer p {
            color: #777;
        }
        .message {
            color: green;
            font-weight: bold;
            text-align: center;
            margin-top: 10px;
        }
    </style>
</head>

<body>

<div class="container">
    <div class="header">
        <h1>Hotel Feedback</h1>
    </div>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // Retrieve and sanitize input data
        $name = htmlspecialchars($_POST['name']);
        $email = htmlspecialchars($_POST['email']);
        $rating = htmlspecialchars($_POST['rating']);
        $feedback = htmlspecialchars($_POST['feedback']);
        
        

       
        echo "<p class='message'>Thank you, $name! Your feedback has been submitted.</p>";
    }
    ?>

    <form action="" method="post">
        <label for="name">Name:</label>
        <input type="text" id="name" name="name" required>

        <label for="email">Email:</label>
        <input type="email" id="email" name="email" required>

        <label>Rate Your Stay:</label>
        <div class="rating">
            <input type="radio" id="excellent" name="rating" value="excellent" required>
            <label for="excellent">Excellent</label>
            <input type="radio" id="good" name="rating" value="good">
            <label for="good">Good</label>
            <input type="radio" id="average" name="rating" value="average">
            <label for="average">Average</label>
            <input type="radio" id="poor" name="rating" value="poor">
            <label for="poor">Poor</label>
        </div>

        <label for="feedback">Additional Feedback:</label>
        <textarea id="feedback" name="feedback" rows="4"></textarea>

        <button type="submit">Submit</button>
    </form>

    <div class="footer">
        <p>Thank you for your feedback!</p>
    </div>
</div>

</body>
</html>
