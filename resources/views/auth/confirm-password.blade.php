<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Password Confirmation - Oga Clothing Africa</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <style>
        body {
            font-family: 'Arial', sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f4f4f4;
        }

        .confirm-container {
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }

        .confirm-box {
            background-color: white;
            border-radius: 10px;
            box-shadow: 0px 0px 15px rgba(0, 0, 0, 0.1);
            padding: 40px;
            width: 400px;
            text-align: center;
        }

        .confirm-box img {
            max-width: 150px;
            margin-bottom: 20px;
            cursor: pointer;
        }

        .confirm-box h2 {
            font-size: 24px;
            margin-bottom: 10px;
            color: #333;
        }

        .confirm-box p {
            font-size: 14px;
            color: #777;
            margin-bottom: 30px;
        }

        .confirm-box label {
            font-size: 14px;
            display: block;
            text-align: left;
            margin-bottom: 10px;
            color: #333;
        }

        .confirm-box input {
            width: 100%;
            padding: 10px;
            margin-bottom: 20px;
            border: 1px solid #ccc;
            border-radius: 5px;
            font-size: 16px;
        }

        .confirm-box button {
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

        .confirm-box button:hover {
            background-color: #d72052;
        }

        .text-sm {
            font-size: 14px;
            color: #333;
        }

        .error-message {
            color: red;
            font-size: 12px;
            text-align: left;
        }
    </style>
</head>

<body>

    <div class="confirm-container">
        <div class="confirm-box">
            <!-- Logo -->
            <a href="/">
                <img src="{{ asset('assets/img/logo/nav-log.png') }}" alt="Oga Clothing Africa Logo">
            </a>

            <!-- Secure Area Message -->
            <p class="text-sm">This is a secure area of the application. Please confirm your password before continuing.
            </p>

            <!-- Password Confirmation Form -->
            <form method="POST" action="{{ route('password.confirm') }}">
                @csrf

                <!-- Password Input -->
                <div>
                    <label for="password">Password</label>
                    <input id="password" type="password" name="password" required autocomplete="current-password">
                    @if ($errors->has('password'))
                        <span class="error-message">{{ $errors->first('password') }}</span>
                    @endif
                </div>

                <!-- Submit Button -->
                <button type="submit">Confirm</button>
            </form>
        </div>
    </div>

</body>

</html>
