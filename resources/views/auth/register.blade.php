<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Oga Clothing Africa - User Registration</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <style>
        body {
            font-family: 'Arial', sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f4f4f4;
        }

        .register-container {
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }

        .register-box {
            background-color: white;
            border-radius: 10px;
            box-shadow: 0px 0px 15px rgba(0, 0, 0, 0.1);
            padding: 40px;
            width: 400px;
            text-align: center;
        }

        .register-box img {
            max-width: 150px;
            margin-bottom: 20px;
            cursor: pointer;
        }

        .register-box h2 {
            font-size: 24px;
            margin-bottom: 10px;
            color: #333;
        }

        .register-box p {
            font-size: 14px;
            color: #777;
            margin-bottom: 30px;
        }

        .register-box input[type="text"],
        .register-box input[type="email"],
        .register-box input[type="password"] {
            width: 100%;
            padding: 12px;
            margin-bottom: 20px;
            border: 1px solid #ddd;
            border-radius: 5px;
            font-size: 14px;
        }

        .register-box input:focus {
            border-color: #EE2761;
        }

        .register-box button {
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

        .register-box button:hover {
            background-color: #d72052;
        }

        .register-box .already-registered {
            display: block;
            margin-top: 15px;
            font-size: 12px;
            color: #333;
            text-decoration: none;
        }

        .register-box .already-registered:hover {
            color: #EE2761;
        }

        .footer-text {
            font-size: 12px;
            color: #555;
            margin-top: 20px;
        }
    </style>
</head>

<body>

    <div class="register-container">
        <div class="register-box">
            <!-- Logo -->
            <a href="/">
                <img src="{{ asset('assets/img/logo/nav-log.png') }}" alt="Oga Clothing Africa Logo">
            </a>

            <!-- Register Header -->
            <h2>User Registration</h2>
            <p>Join Oga Clothing Africa and experience luxury fashion.</p>

            <!-- Registration Form -->
            <form method="POST" action="{{ route('register') }}">
                @csrf <!-- CSRF token for security -->

                <!-- Name Input -->
                <input type="text" name="name" placeholder="Full Name" value="{{ old('name') }}" required
                    autofocus>
                @error('name')
                    <span style="color: #EE2761; font-size: 12px;">{{ $message }}</span>
                @enderror

                <!-- Email Input -->
                <input type="email" name="email" placeholder="Email Address" value="{{ old('email') }}" required>
                @error('email')
                    <span style="color: #EE2761; font-size: 12px;">{{ $message }}</span>
                @enderror

                <!-- Password Input -->
                <input type="password" name="password" placeholder="Password" required>
                @error('password')
                    <span style="color: #EE2761; font-size: 12px;">{{ $message }}</span>
                @enderror

                <!-- Confirm Password Input -->
                <input type="password" name="password_confirmation" placeholder="Confirm Password" required>
                @error('password_confirmation')
                    <span style="color: #EE2761; font-size: 12px;">{{ $message }}</span>
                @enderror

                <!-- Submit Button -->
                <button type="submit">Register</button>
            </form>

            <!-- Already Registered Link -->
            <a href="{{ route('login') }}" class="already-registered">Already registered? Log in here.</a>
        </div>
    </div>

</body>

</html>
