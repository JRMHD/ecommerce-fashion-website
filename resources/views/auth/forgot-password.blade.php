<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Oga Clothing Africa - Password Reset</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <style>
        body {
            font-family: 'Arial', sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f4f4f4;
        }

        .reset-container {
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }

        .reset-box {
            background-color: white;
            border-radius: 10px;
            box-shadow: 0px 0px 15px rgba(0, 0, 0, 0.1);
            padding: 40px;
            width: 400px;
            text-align: center;
        }

        .reset-box img {
            max-width: 150px;
            margin-bottom: 20px;
            cursor: pointer;
        }

        .reset-box h2 {
            font-size: 24px;
            margin-bottom: 10px;
            color: #333;
        }

        .reset-box p {
            font-size: 14px;
            color: #777;
            margin-bottom: 30px;
        }

        .reset-box input[type="email"] {
            width: 100%;
            padding: 12px;
            margin-bottom: 20px;
            border: 1px solid #ddd;
            border-radius: 5px;
            font-size: 14px;
        }

        .reset-box input:focus {
            border-color: #EE2761;
        }

        .reset-box button {
            width: 100%;
            padding: 12px;
            background-color: #EE2761;
            color: white;
            border: none;
            border-radius: 5px;
            font-size: 16px;
            cursor: pointer;
            transition: background-color 0.3s;
        }

        .reset-box button:hover {
            background-color: #d72052;
        }

        .footer-text {
            font-size: 12px;
            color: #555;
            margin-top: 20px;
        }
    </style>
</head>

<body>

    <div class="reset-container">
        <div class="reset-box">
            <!-- Logo -->
            <a href="/">
                <img src="{{ asset('assets/img/logo/nav-log.png') }}" alt="Oga Clothing Africa Logo">
            </a>

            <!-- Reset Header -->
            <h2>Password Reset</h2>
            <p>Forgot your password? No problem. Enter your email address below, and we'll send you a link to reset your
                password.</p>

            <!-- Session Status -->
            @if (session('status'))
                <div style="color: #28a745; margin-bottom: 20px;">
                    {{ session('status') }}
                </div>
            @endif

            <!-- Password Reset Request Form -->
            <form method="POST" action="{{ route('password.email') }}">
                @csrf <!-- CSRF token for security -->

                <!-- Email Input -->
                <input type="email" name="email" placeholder="Email Address" value="{{ old('email') }}" required
                    autofocus>
                @error('email')
                    <span style="color: #EE2761; font-size: 12px;">{{ $message }}</span>
                @enderror

                <!-- Submit Button -->
                <button type="submit">Email Password Reset Link</button>
            </form>
        </div>
    </div>

</body>

</html>
