<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Our Company - Events</title>
    <style>
        /* General Body Styles */
        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            line-height: 1.6;
            margin: 0;
            padding: 0;
            background-color: #e8f5e9; /* Lighter, subtle green */
            color: #333;
        }

        /* Header Styles */
        header {
            background: #2e7d32; /* Darker green */
            color: #fff;
            padding: 1.2rem 0;
            text-align: center;
            box-shadow: 0 2px 5px rgba(0,0,0,0.2);
        }
        header h1 {
            margin: 0;
            font-size: 2.5em;
        }

        /* Navigation Styles */
        nav ul {
            padding: 0;
            list-style: none;
            margin-top: 10px;
        }
        nav ul li {
            display: inline;
            margin: 0 18px;
        }
        nav a {
            color: #fff;
            text-decoration: none;
            font-weight: bold;
            font-size: 1.1em;
            transition: color 0.3s ease;
        }
        nav a:hover {
            color: #c8e6c9; /* Lighter green on hover */
        }

        /* Container for content */
        .container {
            width: 85%;
            margin: auto;
            overflow: hidden;
            padding: 30px 0;
        }

        /* Content Section Styles */
        .content-section {
            background: #fff;
            padding: 40px;
            border-radius: 10px;
            box-shadow: 0 4px 15px rgba(0,0,0,0.1);
            text-align: center;
        }
        .content-section h2 {
            color: #1b5e20; /* Even darker green heading */
            margin-bottom: 25px;
            font-size: 2.2em;
            border-bottom: 2px solid #a5d6a7; /* Subtle underline */
            padding-bottom: 10px;
            display: inline-block; /* To make border-bottom fit content */
        }
        .content-section p {
            font-size: 1.1em;
            margin-bottom: 30px;
            color: #555;
        }

        /* Event List Styles */
        .event-list {
            list-style: none;
            padding: 0;
            display: grid; /* Use CSS Grid for layout */
            grid-template-columns: repeat(auto-fit, minmax(300px, 1fr)); /* Responsive columns */
            gap: 30px; /* Space between event items */
            margin-top: 40px;
        }
        .event-item {
            background-color: #f1f8e9; /* Very light green item background */
            border: 1px solid #c8e6c9; /* Light green border */
            border-left: 6px solid #4caf50; /* Stronger green accent on left */
            border-radius: 8px;
            padding: 25px;
            text-align: left;
            box-shadow: 0 2px 10px rgba(0,0,0,0.08);
            transition: transform 0.3s ease, box-shadow 0.3s ease;
        }
        .event-item:hover {
            transform: translateY(-5px); /* Lift effect on hover */
            box-shadow: 0 6px 20px rgba(0,0,0,0.15);
        }
        .event-item h3 {
            margin-top: 0;
            color: #2e7d32; /* Darker green for event title */
            font-size: 1.6em;
            margin-bottom: 10px;
        }
        .event-item p {
            margin-bottom: 10px;
            color: #666;
            font-size: 1em;
        }
        .event-date-time {
            font-weight: bold;
            color: #388e3c; /* Green for date/time */
            margin-bottom: 8px;
            display: block; /* Ensure it takes its own line */
        }
        .event-location {
            font-style: italic;
            color: #777;
        }

        /* Call to action */
        .content-section a {
            color: #007bff;
            text-decoration: none;
            font-weight: bold;
            transition: color 0.3s ease;
        }
        .content-section a:hover {
            color: #0056b3;
        }

        /* Footer Styles */
        footer {
            text-align: center;
            padding: 25px;
            background: #2e7d32; /* Darker green */
            color: #fff;
            margin-top: 40px;
            box-shadow: 0 -2px 5px rgba(0,0,0,0.2);
            font-size: 0.9em;
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
                    <li><a href="/">Contact Us</a></li>
                    <li><a href="/events">Events</a></li> 
                    <li><a href="/contact">Contact Us</a></li>
                </ul>
            </nav>
        </div>
    </header>

    <div class="container">
        <section class="content-section">
            <h2>Upcoming Events & Webinars</h2>
            <p>Join us for our upcoming events and webinars where we share insights, latest trends, and engage with our community. Don't miss out on these opportunities to learn and connect!</p>

            <ul class="event-list">
                <li class="event-item">
                    <h3>Web Development Masterclass 2025</h3>
                    <span class="event-date-time">Date: July 10, 2025 | Time: 10:00 AM - 4:00 PM EAT</span>
                    <span class="event-location">Location: Online (Webinar)</span>
                    <p>A deep dive into modern web development practices, including new frameworks, performance optimization, and best security practices. Suitable for all skill levels.</p>
                </li>
                <li class="event-item">
                    <h3>Mobile App Trends Summit</h3>
                    <span class="event-date-time">Date: August 5, 2025 | Time: 9:00 AM - 1:00 PM EAT</span>
                    <span class="event-location">Location: Nairobi Convention Center, Hall B</span>
                    <p>Explore the latest trends in mobile application development, from AI integration to cross-platform solutions and user engagement strategies.</p>
                </li>
                <li class="event-item">
                    <h3>Cloud Migration Workshop</h3>
                    <span class="event-date-time">Date: September 15, 2025 | Time: 2:00 PM - 5:00 PM EAT</span>
                    <span class="event-location">Location: Online (Interactive Workshop)</span>
                    <p>Learn the essentials of migrating your infrastructure to the cloud, with practical steps and common pitfalls to avoid. Hands-on exercises included.</p>
                </li>
                <li class="event-item">
                    <h3>UI/UX Design for Startups</h3>
                    <span class="event-date-time">Date: October 2, 2025 | Time: 11:00 AM - 3:00 PM EAT</span>
                    <span class="event-location">Location: Innovation Hub, Boardroom 3</span>
                    <p>A practical workshop focusing on creating user-centric designs for new businesses, emphasizing rapid prototyping and user testing.</p>
                </li>
                 <li class="event-item">
                    <h3>Digital Marketing Strategies for Growth</h3>
                    <span class="event-date-time">Date: November 8, 2025 | Time: 9:30 AM - 12:30 PM EAT</span>
                    <span class="event-location">Location: Online (Webinar)</span>
                    <p>Discover effective digital marketing strategies to boost your online presence, including advanced SEO techniques, social media engagement, and PPC advertising.</p>
                </li>
                <li class="event-item">
                    <h3>Annual Tech & Innovation Expo</h3>
                    <span class="event-date-time">Date: December 1-2, 2025 | Time: All Day</span>
                    <span class="event-location">Location: Grand Exhibition Hall, Booth 12A</span>
                    <p>Our largest event of the year, showcasing cutting-edge technologies, keynote speakers, and networking opportunities with industry leaders.</p>
                </li>
            </ul>

            <p>Ready to join us? <a href="/contact">Register for an event</a> or sign up for our newsletter to stay informed!</p>
        </section>
    </div>

    <footer>
        <div class="container">
            <p>&copy; 2025 Our Company. All rights reserved.</p>
        </div>
    </footer>
</body>
</html>