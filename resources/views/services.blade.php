<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Our Company - Services</title>
    <style>
        /* Basic inline CSS for demonstration purposes */
        body {
            font-family: Arial, sans-serif;
            line-height: 1.6;
            margin: 0;
            padding: 0;
            background-color: #f0fdf4; /* Lighter green background */
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
        .container {
            width: 80%;
            margin: auto;
            overflow: hidden;
            padding: 20px 0;
        }
        .content-section {
            background: #fff;
            padding: 30px;
            border-radius: 8px;
            box-shadow: 0 2px 4px rgba(0,0,0,0.1);
            text-align: center;
        }
        .content-section h2 {
            color: #1e8449; /* Darker green heading */
            margin-bottom: 20px;
        }
        .service-list {
            list-style: none;
            padding: 0;
            display: flex;
            flex-wrap: wrap;
            justify-content: center;
            gap: 20px;
        }
        .service-item {
            background-color: #e0ffe0; /* Light green item background */
            border-left: 5px solid #28a745; /* Green accent */
            border-radius: 4px;
            padding: 20px;
            text-align: left;
            width: 45%; /* Adjust for two columns */
            box-sizing: border-box; /* Include padding in width */
        }
        .service-item h3 {
            margin-top: 0;
            color: #218838;
        }
        footer {
            text-align: center;
            padding: 20px;
            background: #333;
            color: #fff;
            margin-top: 20px;
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

    <div class="container">
        <section class="content-section">
            <h2>Our Comprehensive Services</h2>
            <p>At Our Company, we offer a wide array of professional services designed to help you achieve your goals and enhance your business operations. Our expertise spans across multiple domains, ensuring that we can provide tailored solutions for your unique challenges.</p>

            <ul class="service-list">
                <li class="service-item">
                    <h3>Web Development</h3>
                    <p>From dynamic e-commerce platforms to robust enterprise applications, we build scalable and secure web solutions using the latest technologies. Our focus is on creating user-friendly and high-performing websites.</p>
                </li>
                <li class="service-item">
                    <h3>Mobile App Development</h3>
                    <p>Reach your audience wherever they are with custom iOS and Android applications. We design and develop intuitive mobile apps that provide seamless user experiences and drive engagement.</p>
                </li>
                <li class="service-item">
                    <h3>Cloud Solutions & Consulting</h3>
                    <p>Leverage the power of the cloud for scalability, flexibility, and cost efficiency. We provide expert consulting and implementation services for cloud migration, infrastructure, and optimization.</p>
                </li>
                <li class="service-item">
                    <h3>UI/UX Design</h3>
                    <p>User experience is at the heart of everything we do. Our designers craft visually appealing and highly functional interfaces that ensure your users have a delightful and efficient interaction with your product.</p>
                </li>
                <li class="service-item">
                    <h3>Digital Marketing</h3>
                    <p>Expand your online presence and reach your target audience effectively. Our digital marketing strategies include SEO, content marketing, social media management, and paid advertising campaigns.</p>
                </li>
                <li class="service-item">
                    <h3>IT Support & Maintenance</h3>
                    <p>Ensure the smooth operation of your systems with our reliable IT support and maintenance services. We offer proactive monitoring, troubleshooting, and regular updates to keep your infrastructure running optimally.</p>
                </li>
            </ul>

            <p>Don't see what you're looking for? <a href="/contact">Contact us</a> to discuss your specific needs!</p>
        </section>
    </div>

    <footer>
        <div class="container">
            <p>&copy; 2025 Our Company. All rights reserved.</p>
        </div>
    </footer>
</body>
</html>