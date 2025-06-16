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
        .contact-form{
         text-align: center;
           

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
                    <li><a href="/contact">Contact Us</a></li>
                </ul>
            </nav>
        </div>
    </header>

<form class="contact-form">
<h1>Contact us</h1>
<label for="name">Full Names:</label>
<input type="text" placeholder="Enter Full Names">
<br>
<label for="email">Full Names:</label>
<input type="email" placeholder="example123@gmail.com">
<br>
<label for="contact">Contact:</label>
<input type="text" placeholder="Enter Full Names">
<br>

<button>Submit</button>

</form>

</body>
</html>