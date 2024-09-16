<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Thank You for Subscribing!</title>
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
            <h2>Thank You for Subscribing!</h2>
            <p>Dear Subscriber,</p>
            <p>We're thrilled to have you join our newsletter community. You'll now be the first to know about our
                latest products, exclusive offers, and exciting news.</p>
            <p>If you have any questions or need assistance, please don't hesitate to contact us.</p>
            <p>Best regards,<br>The OGA Clothing Team</p>
        </div>
        <div class="footer">
            <p>&copy; {{ date('Y') }} OGA Clothing. All rights reserved.</p>
        </div>
    </div>
</body>

</html>
