<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Oga Clothing Africa - User Login</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <style>
        body {
            font-family: 'Arial', sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f4f4f4;
        }

        .login-container {
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }

        .login-box {
            background-color: white;
            border-radius: 10px;
            box-shadow: 0px 0px 15px rgba(0, 0, 0, 0.1);
            padding: 40px;
            width: 400px;
            text-align: center;
        }

        .login-box img {
            max-width: 150px;
            margin-bottom: 20px;
            cursor: pointer;
        }

        .login-box h2 {
            font-size: 24px;
            margin-bottom: 10px;
            color: #333;
        }

        .login-box p {
            font-size: 14px;
            color: #777;
            margin-bottom: 30px;
        }

        .login-box input[type="email"],
        .login-box input[type="password"] {
            width: 100%;
            padding: 12px;
            margin-bottom: 20px;
            border: 1px solid #ddd;
            border-radius: 5px;
            font-size: 14px;
        }

        .login-box input:focus {
            border-color: #EE2761;
        }

        .login-box button {
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

        .login-box button:hover {
            background-color: #d72052;
        }

        .login-box .forgot-password {
            display: block;
            margin-top: 15px;
            font-size: 12px;
            color: #333;
            text-decoration: none;
        }

        .login-box .forgot-password:hover {
            color: #EE2761;
        }

        .login-box .register-btn {
            margin-top: 20px;
            width: 100%;
            padding: 12px;
            background-color: #333;
            color: white;
            border: none;
            border-radius: 5px;
            font-size: 16px;
            cursor: pointer;
            transition: background-color 0.3s;
        }

        .login-box .register-btn:hover {
            background-color: #000;
        }

        .footer-text {
            font-size: 12px;
            color: #555;
            margin-top: 20px;
        }
    </style>
</head>

<body>

    <div class="login-container">
        <div class="login-box">
            <!-- Logo -->
            <a href="/">
                <img src="{{ asset('assets/img/logo/nav-log.png') }}" alt="Oga Clothing Africa Logo">
            </a>

            <!-- Login Header -->
            <h2>User Login</h2>
            <p>Welcome to Oga Clothing Africa. Please log in to access your account.</p>

            <!-- Login Form -->
            <form method="POST" action="{{ route('login') }}">
                @csrf <!-- CSRF token for security -->

                <!-- Email Input -->
                <input type="email" name="email" placeholder="Email Address" value="{{ old('email') }}" required
                    autofocus>
                @error('email')
                    <span style="color: #EE2761; font-size: 12px;">{{ $message }}</span>
                @enderror

                <!-- Password Input -->
                <input type="password" name="password" placeholder="Password" required>
                @error('password')
                    <span style="color: #EE2761; font-size: 12px;">{{ $message }}</span>
                @enderror

                <!-- Remember Me Checkbox -->
                <div style="text-align: left; margin-bottom: 20px;">
                    <label>
                        <input type="checkbox" name="remember" {{ old('remember') ? 'checked' : '' }}>
                        Remember me
                    </label>
                </div>

                <!-- Submit Button -->
                <button type="submit">Log In</button>

                <!-- Forgot Password Link -->
                <a href="{{ route('password.request') }}" class="forgot-password">Forgot your password?</a>
            </form>

            <!-- Register Button -->
            <form method="GET" action="{{ route('register') }}">
                <button type="submit" class="register-btn">Register</button>
            </form>
        </div>
    </div>

</body>

</html>
