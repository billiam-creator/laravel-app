<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Our Company - Home</title>
    <style>
        /* BASIC GLOBAL STYLES & NAVBAR STYLES (MAINTAINED) */
        body {
            font-family: Arial, sans-serif;
            line-height: 1.6;
            margin: 0;
            padding: 0;
            background-color: #f8f9fa; /* Lighter background */
            color: #333;
        }
        header { /* MAINTAINED */
            background: #333;
            color: #fff;
            padding: 1rem 0;
            text-align: center;
        }
        header h1 { /* MAINTAINED */
            margin: 0;
        }
        nav ul { /* MAINTAINED */
            padding: 0;
            list-style: none;
        }
        nav ul li { /* MAINTAINED */
            display: inline;
            margin-right: 20px;
        }
        nav a { /* MAINTAINED */
            color: #fff;
            text-decoration: none;
            font-weight: bold;
        }
        nav a:hover { /* MAINTAINED */
            color: #007bff;
        }
        .container {
            width: 80%;
            margin: auto;
            overflow: hidden;
            padding: 20px 0;
        }

        /* NEW CONTENT SECTION STYLES */
        .hero-new {
            background: linear-gradient(135deg, #007bff, #0056b3); /* Gradient background */
            color: #fff;
            padding: 80px 20px;
            text-align: center;
            margin-bottom: 20px;
        }
        .hero-new h2 {
            font-size: 3em;
            margin-bottom: 15px;
            text-shadow: 2px 2px 4px rgba(0,0,0,0.3);
        }
        .hero-new p {
            font-size: 1.3em;
            max-width: 700px;
            margin: 0 auto 30px auto;
            opacity: 0.9;
        }
        .btn {
            display: inline-block;
            background: #28a745; /* Green button */
            color: #fff;
            padding: 12px 25px;
            text-decoration: none;
            border-radius: 5px;
            font-weight: bold;
            transition: background 0.3s ease;
        }
        .btn:hover {
            background: #218838;
        }

        .features-grid {
            display: flex;
            flex-wrap: wrap;
            justify-content: space-between;
            gap: 20px;
            margin-bottom: 30px;
        }
        .feature-item {
            background: #fff;
            padding: 25px;
            border-radius: 8px;
            box-shadow: 0 4px 10px rgba(0,0,0,0.08);
            text-align: center;
            flex: 1 1 calc(50% - 20px); /* Two columns, adjust gap */
            box-sizing: border-box;
        }
        .feature-item h3 {
            color: #007bff;
            margin-top: 0;
        }
        .feature-item p {
            font-size: 0.95em;
            color: #555;
        }

        .cta-section {
            background: #fff;
            padding: 40px;
            text-align: center;
            border-radius: 8px;
            box-shadow: 0 2px 4px rgba(0,0,0,0.1);
        }
        .cta-section h2 {
            color: #333;
            margin-bottom: 20px;
        }

        footer { /* MAINTAINED */
            text-align: center;
            padding: 20px;
            background: #333;
            color: #fff;
            margin-top: 20px;
        }

        /* Responsive adjustments */
        @media (max-width: 768px) {
            .feature-item {
                flex: 1 1 100%; /* Single column on smaller screens */
            }
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

    <section class="hero-new">
        <div class="container">
            <h2>Innovate. Create. Elevate.</h2>
            <p>We are a leading provider of innovative solutions, helping businesses thrive in the digital age. Let's build something great together.</p>
            <a href="/services" class="btn">Explore Our Services</a>
        </div>
    </section>

    <div class="container">
        <section class="features-grid">
            <div class="feature-item">
                <h3>Scalable Web Solutions</h3>
                <p>Develop robust and high-performing web applications tailored to your business needs, ensuring scalability and security.</p>
            </div>
            <div class="feature-item">
                <h3>Engaging Mobile Apps</h3>
                <p>Create intuitive and engaging mobile applications for iOS and Android, designed to provide seamless user experiences.</p>
            </div>
            <div class="feature-item">
                <h3>Expert Consulting</h3>
                <p>Receive strategic guidance and expert advice on technology adoption, digital transformation, and business optimization.</p>
            </div>
            <div class="feature-item">
                <h3>Creative Design</h3>
                <p>Transform your ideas into stunning visuals with our professional UI/UX design services, focusing on user-centric aesthetics.</p>
            </div>
        </section>

        <section class="cta-section">
            <h2>Ready to Start Your Project?</h2>
            <p>Connect with our team today to discuss your vision and see how we can bring it to life.</p>
            <a href="/contact" class="btn">Get a Free Consultation</a> </section>
    </div>

    <footer>
        <div class="container">
            <p>&copy; 2025 Our Company. All rights reserved.</p>
        </div>
    </footer>
</body>
</html>