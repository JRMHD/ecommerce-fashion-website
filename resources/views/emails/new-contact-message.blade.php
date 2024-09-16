<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>New Contact Message</title>
    <style>
        body {
            font-family: 'Arial', sans-serif;
            line-height: 1.6;
            color: #333;
            background-color: #f4f4f4;
            margin: 0;
            padding: 0;
        }

        .container {
            max-width: 600px;
            margin: 20px auto;
            background-color: #ffffff;
            border-radius: 8px;
            overflow: hidden;
            box-shadow: 0 0 20px rgba(0, 0, 0, 0.1);
        }

        .header {
            background-color: #EE2761;
            padding: 20px;
            text-align: center;
        }

        .logo-container {
            background-color: white;
            display: inline-block;
            padding: 10px;
            border-radius: 5px;
        }

        .header img {
            max-width: 150px;
        }

        .content {
            padding: 30px;
        }

        .message-info {
            background-color: #f9f9f9;
            border-left: 4px solid #EE2761;
            padding: 15px;
            margin-bottom: 20px;
        }

        .footer {
            text-align: center;
            padding: 20px;
            background-color: #333;
            color: #fff;
            font-size: 0.8em;
        }
    </style>
</head>

<body>
    <div class="container">
        <div class="header">
            <div class="logo-container">
                <img src="{{ $message->embed(public_path('assets/img/logo/nav-log.png')) }}" alt="OGA Clothing Logo">
            </div>
        </div>
        <div class="content">
            <h2>New Contact Message Received</h2>
            <p>You have received a new message from:</p>
            <div class="message-info">
                <p><strong>Name:</strong> {{ $contactMessage->first_name }} {{ $contactMessage->last_name }}</p>
                <p><strong>Email:</strong> {{ $contactMessage->email }}</p>
                <p><strong>Phone:</strong> {{ $contactMessage->phone_number }}</p>
            </div>
            <h3>Message:</h3>
            <p>{{ $contactMessage->message }}</p>
        </div>
        <div class="footer">
            <p>&copy; {{ date('Y') }} OGA Clothing. All rights reserved.</p>
        </div>
    </div>
</body>

</html>
