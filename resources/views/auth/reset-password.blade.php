<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Oga Clothing Africa - Reset Password</title>
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

        .reset-box input[type="email"],
        .reset-box input[type="password"] {
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
            <h2>Reset Password</h2>
            <p>Please enter your new password below to reset your account password.</p>

            <!-- Password Reset Form -->
            <form method="POST" action="{{ route('password.store') }}">
                @csrf <!-- CSRF token for security -->

                <!-- Password Reset Token -->
                <input type="hidden" name="token" value="{{ $request->route('token') }}">

                <!-- Email Input -->
                <input type="email" name="email" placeholder="Email Address"
                    value="{{ old('email', $request->email) }}" required autofocus>
                @error('email')
                    <span style="color: #EE2761; font-size: 12px;">{{ $message }}</span>
                @enderror

                <!-- New Password -->
                <input type="password" name="password" placeholder="New Password" required>
                @error('password')
                    <span style="color: #EE2761; font-size: 12px;">{{ $message }}</span>
                @enderror

                <!-- Confirm New Password -->
                <input type="password" name="password_confirmation" placeholder="Confirm New Password" required>
                @error('password_confirmation')
                    <span style="color: #EE2761; font-size: 12px;">{{ $message }}</span>
                @enderror

                <!-- Submit Button -->
                <button type="submit">Reset Password</button>
            </form>
        </div>
    </div>

</body>

</html>
