<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Us</title>
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
        .contact-form-container {
            max-width: 500px;
            margin: 20px auto;
            padding: 20px;
            background: #fff;
            border-radius: 8px;
            box-shadow: 0 4px 15px rgba(0, 0, 0, 0.1);
            text-align: center;
        }

        .contact-form-container h1 {
            color: #007bff;
            margin-bottom: 20px;
            font-size: 1.8em;
        }

        .contact-form-container .form-group {
            margin-bottom: 15px;
            text-align: left;
        }

        .contact-form-container label {
            display: block;
            margin-bottom: 5px;
            font-weight: bold;
            color: #555;
            font-size: 0.95em;
        }

        .contact-form-container input[type="text"],
        .contact-form-container input[type="email"],
        .contact-form-container textarea {
            width: calc(100% - 20px);
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 5px;
            font-size: 0.95em;
            box-sizing: border-box;
            height: 40px;
        }

        .contact-form-container textarea {
            resize: vertical;
            min-height: 80px;
        }

        .contact-form-container button {
            background-color: #007bff;
            color: white;
            padding: 10px 20px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            font-size: 1em;
            font-weight: bold;
            transition: background-color 0.3s ease;
            margin-top: 15px;
        }

        .contact-form-container button:hover {
            background-color: #0056b3;
        }
        .alert-success {
            background-color: #d4edda;
            color: #155724;
            padding: 10px;
            border: 1px solid #c3e6cb;
            border-radius: 5px;
            margin-bottom: 20px;
            text-align: left;
        }
        .alert-danger {
            background-color: #f8d7da;
            color: #721c24;
            padding: 10px;
            border: 1px solid #f5c6cb;
            border-radius: 5px;
            margin-bottom: 20px;
            text-align: left;
        }

        /* --- New styles for the messages display table --- */
        .messages-container {
            max-width: 960px; /* Wider container for the table */
            margin: 40px auto; /* More spacing from the form */
            padding: 20px;
            background: #fff;
            border-radius: 8px;
            box-shadow: 0 4px 15px rgba(0, 0, 0, 0.1);
        }
        .messages-container h2 {
            color: #007bff;
            text-align: center;
            margin-bottom: 25px;
            font-size: 1.6em;
        }
        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 20px;
        }
        table, th, td {
            border: 1px solid #ddd;
        }
        th, td {
            padding: 12px;
            text-align: left;
        }
        th {
            background-color: #f2f2f2;
            color: #333;
        }
        tr:nth-child(even) {
            background-color: #f9f9f9;
        }
        tr:hover {
            background-color: #f1f1f1;
        }
        .no-messages {
            text-align: center;
            color: #555;
            font-style: italic;
            padding: 20px;
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

    {{-- Display success message if it exists in the session --}}
    @if (session('success'))
        <div class="alert-success">
            {{ session('success') }}
        </div>
    @endif

    {{-- Display validation errors if they exist --}}
    @if ($errors->any())
        <div class="alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form class="contact-form" method="POST" action="{{ route('contact.store') }}">
        @csrf {{-- This is crucial for security! --}}

        <div class="form-group">
            <label for="full_names">Full Names:</label>
            <input type="text" id="full_names" name="full_names" placeholder="Enter Full Names" value="{{ old('full_names') }}" required>
        </div>
        <div class="form-group">
            <label for="email">Email Address:</label>
            <input type="email" id="email" name="email" placeholder="example123@gmail.com" value="{{ old('email') }}" required>
        </div>
        <div class="form-group">
            <label for="message">Your Message:</label>
            <textarea id="message" name="message" placeholder="Type your message here..." rows="5" required>{{ old('message') }}</textarea>
        </div>
        <button type="submit">Send Message</button>
    </form>
</div>

{{-- --- NEW SECTION: Displaying Contact Messages --- --}}
<div class="messages-container">
    <h2>Submitted Messages</h2>

    @if ($contacts->isEmpty())
        <p class="no-messages">No contact messages submitted yet.</p>
    @else
        <table>
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Full Names</th>
                    <th>Email</th>
                    <th>Message</th>
                    <th>Submitted At</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($contacts as $contact)
                    <tr>
                        <td>{{ $contact->id }}</td>
                        <td>{{ $contact->full_names }}</td>
                        <td>{{ $contact->email }}</td>
                        <td>{{ Str::limit($contact->message, 80) }}</td> {{-- Truncate long messages --}}
                        <td>{{ $contact->created_at->format('M d, Y H:i') }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    @endif
</div>
{{-- --- END NEW SECTION --- --}}

</body>
</html>