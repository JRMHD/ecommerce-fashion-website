<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Oga Clothing Africa - Email Verification</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <style>
        body {
            font-family: 'Arial', sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f4f4f4;
        }

        .verification-container {
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }

        .verification-box {
            background-color: white;
            border-radius: 10px;
            box-shadow: 0px 0px 15px rgba(0, 0, 0, 0.1);
            padding: 40px;
            width: 400px;
            text-align: center;
        }

        .verification-box img {
            max-width: 150px;
            margin-bottom: 20px;
            cursor: pointer;
        }

        .verification-box h2 {
            font-size: 24px;
            margin-bottom: 10px;
            color: #333;
        }

        .verification-box p {
            font-size: 14px;
            color: #777;
            margin-bottom: 30px;
        }

        .verification-box button {
            width: 100%;
            padding: 12px;
            background-color: #EE2761;
            color: white;
            border: none;
            border-radius: 5px;
            font-size: 16px;
            cursor: pointer;
            transition: background-color 0.3s;
            margin-bottom: 10px;
        }

        .verification-box button:hover {
            background-color: #d72052;
        }

        .text-sm {
            font-size: 14px;
            color: #333;
        }

        .text-green {
            color: green;
        }

        .logout-btn {
            background: none;
            color: #555;
            cursor: pointer;
            font-size: 14px;
            text-decoration: underline;
            transition: color 0.3s;
        }

        .logout-btn:hover {
            color: #d72052;
        }
    </style>
</head>

<body>

    <div class="verification-container">
        <div class="verification-box">
            <!-- Logo -->
            <a href="/">
                <img src="{{ asset('assets/img/logo/nav-log.png') }}" alt="Oga Clothing Africa Logo">
            </a>

            <!-- Verification Message -->
            <h2>Email Verification Required</h2>
            <p>Thanks for signing up! Before getting started, could you verify your email address by clicking on the
                link we just emailed to you? If you didn't receive the email, we will gladly send you another.</p>

            <!-- Status Message -->
            @if (session('status') == 'verification-link-sent')
                <p class="text-sm text-green">A new verification link has been sent to the email address you provided
                    during registration.</p>
            @endif

            <!-- Resend Email Form -->
            <form method="POST" action="{{ route('verification.send') }}">
                @csrf
                <button type="submit">Resend Verification Email</button>
            </form>

            <!-- Logout Button -->
            <form method="POST" action="{{ route('logout') }}">
                @csrf
                <button type="submit" class="logout-btn">Log Out</button>
            </form>
        </div>
    </div>

</body>

</html>
