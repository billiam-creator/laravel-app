<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            line-height: 1.6;
            margin: 0;
            padding: 0;
            background-color: #e6f7ff; /* Lighter blue background */
            color: #333;
        }
        header {
            background: #333;
            color: #fff;
            padding: 1rem 0;
            text-align: center;
        }
        header h1 {
            margin: 0;
        }
        nav ul {
            padding: 0;
            list-style: none;
        }
        nav ul li {
            display: inline;
            margin-right: 20px;
        }
        nav a {
            color: #fff;
            text-decoration: none;
            font-weight: bold;
        }
        nav a:hover {
            color: #007bff;
        }
        /* Adjusted styles for the contact form to fit better on screen */
        .contact-form-container {
            max-width: 500px; /* Slightly reduced max-width */
            margin: 20px auto; /* Reduced top/bottom margin */
            padding: 20px; /* Reduced padding */
            background: #fff;
            border-radius: 8px;
            box-shadow: 0 4px 15px rgba(0, 0, 0, 0.1);
            text-align: center;
        }

        .contact-form-container h1 {
            color: #007bff;
            margin-bottom: 20px; /* Reduced margin-bottom */
            font-size: 1.8em; /* Slightly smaller font size */
        }

        .contact-form-container .form-group {
            margin-bottom: 15px; /* Reduced margin-bottom */
            text-align: left;
        }

        .contact-form-container label {
            display: block;
            margin-bottom: 5px; /* Reduced margin-bottom */
            font-weight: bold;
            color: #555;
            font-size: 0.95em; /* Slightly smaller label font size */
        }

        .contact-form-container input[type="text"],
        .contact-form-container input[type="email"],
        .contact-form-container textarea {
            width: calc(100% - 20px);
            padding: 10px; /* Reduced padding */
            border: 1px solid #ccc;
            border-radius: 5px;
            font-size: 0.95em; /* Slightly smaller font size */
            box-sizing: border-box;
            height: 40px; /* Set a fixed height for input fields */
        }

        .contact-form-container textarea {
            resize: vertical;
            min-height: 80px; /* Reduced minimum height for textarea */
        }

        .contact-form-container button {
            background-color: #007bff;
            color: white;
            padding: 10px 20px; /* Reduced padding */
            border: none;
            border-radius: 5px;
            cursor: pointer;
            font-size: 1em; /* Slightly smaller font size */
            font-weight: bold;
            transition: background-color 0.3s ease;
            margin-top: 15px; /* Reduced margin-top */
        }

        .contact-form-container button:hover {
            background-color: #0056b3;
        }
    </style>
</head>
<body>
<header>
        <div class="container">
            <h1>Our Company</h1>
            <nav>
                <ul>
                    <li><a href="/">Home</a></li>
                    <li><a href="/about">About Us</a></li>
                    <li><a href="/services">Services</a></li>
                    <li><a href="/events">Events</a></li>
                    <li><a href="/contact">Contact Us</a></li>
                </ul>
            </nav>
        </div>
    </header>

<div class="contact-form-container">
    <h1>Contact Us</h1>
    <form class="contact-form">
        <div class="form-group">
            <label for="name">Full Names:</label>
            <input type="text" id="name" name="name" placeholder="Enter Full Names" required>
        </div>
        <div class="form-group">
            <label for="email">Email Address:</label>
            <input type="email" id="email" name="email" placeholder="example123@gmail.com" required>
        </div>
        <div class="form-group">
            <label for="message">Your Message:</label>
            <textarea id="message" name="message" placeholder="Type your message here..." rows="5"></textarea>
        </div>
        <button type="submit">Send Message</button>
    </form>
</div>

</body>
</html>