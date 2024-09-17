<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Password Reset - Oga Clothing Africa Admin</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            line-height: 1.6;
            color: #333333;
            max-width: 600px;
            margin: 0 auto;
            padding: 20px;
        }

        .logo {
            text-align: center;
            margin-bottom: 20px;
        }

        .logo img {
            max-width: 200px;
        }

        h1 {
            color: #EE2761;
            text-align: center;
        }

        .content {
            background-color: #f9f9f9;
            border-radius: 5px;
            padding: 20px;
            margin-bottom: 20px;
        }

        .button {
            display: inline-block;
            background-color: #EE2761;
            color: white;
            text-decoration: none;
            padding: 10px 20px;
            border-radius: 5px;
            margin-top: 10px;
        }

        .footer {
            text-align: center;
            font-size: 12px;
            color: #666666;
        }
    </style>
</head>

<body>
    <div class="logo">
        <img src="/assets/img/logo/nav-log.png" alt="Oga Clothing Africa Logo">
    </div>

    <h1>Password Reset Request</h1>

    <div class="content">
        <p>Dear Admin,</p>

        <p>You have requested to reset your password for the Oga Clothing Africa admin panel. To proceed with resetting
            your password, please click the button below:</p>

        <p style="text-align: center;">
            <a href="{{ url('admin/reset-password/' . $token) }}" class="button">Reset Your Password</a>
        </p>

        <p>If the button above doesn't work, you can copy and paste the following link into your browser:</p>

        <p>{{ url('admin/reset-password/' . $token) }}</p>

        <p>Please note that this link will expire in 60 minutes for security reasons.</p>

        <p>If you did not request a password reset, please ignore this email or contact our IT support team immediately
            if you believe this is an unauthorized action.</p>

        <p>Thank you for your attention to this matter.</p>

        <p>Best regards,<br>Oga Clothing Africa IT Team</p>
    </div>

    <div class="footer">
        <p>This is an automated message, please do not reply to this email. If you need assistance, please contact our
            support team.</p>
        <p>&copy; <?php echo date('Y'); ?> Oga Clothing Africa. All rights reserved.</p>
    </div>
</body>

</html>
