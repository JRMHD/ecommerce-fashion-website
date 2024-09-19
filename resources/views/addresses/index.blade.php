<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My Addresses</title>
    <style>
        :root {
            --primary: #EE2761;
            --black: #333;
            --white: #fff;
            --gray: #f4f4f4;
        }

        * {
            box-sizing: border-box;
            margin: 0;
            padding: 0;
        }

        body {
            font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen-Sans, Ubuntu, Cantarell, 'Helvetica Neue', sans-serif;
            line-height: 1.4;
            color: var(--black);
            background: var(--gray);
        }

        .container {
            width: 100%;
            padding: 15px;
            max-width: 600px;
            margin: 0 auto;
        }

        header {
            background: var(--white);
            padding: 15px 0;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
        }

        .logo {
            display: block;
            max-width: 120px;
            margin: 0 auto;
        }

        h2 {
            font-size: 24px;
            color: var(--primary);
            margin: 20px 0;
            text-align: center;
        }

        .btn {
            display: block;
            width: 100%;
            padding: 12px;
            border: none;
            border-radius: 25px;
            font-size: 16px;
            font-weight: bold;
            text-align: center;
            text-decoration: none;
            margin-bottom: 10px;
            transition: background-color 0.3s, transform 0.3s;
        }

        .btn-primary {
            background: var(--primary);
            color: var(--white);
        }

        .btn-secondary {
            background: var(--black);
            color: var(--white);
        }

        .btn:active {
            transform: scale(0.98);
        }

        .address-list {
            list-style: none;
        }

        .address-card {
            background: var(--white);
            border-radius: 10px;
            padding: 15px;
            margin-bottom: 15px;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
        }

        .address-content {
            margin-bottom: 15px;
            font-size: 16px;
        }

        .address-actions {
            display: flex;
            gap: 10px;
        }

        .address-actions .btn {
            flex: 1;
            margin-bottom: 0;
        }
    </style>
</head>

<body>
    <header>
        <img src="{{ asset('/assets/img/logo/nav-log.png') }}" alt="Logo" class="logo">
    </header>
    <div class="container">
        <!-- Display Success and Error Messages -->
        @if (session('success'))
            <div
                style="background-color: #d4edda; color: #155724; padding: 10px; border-radius: 5px; margin-bottom: 20px;">
                {{ session('success') }}
            </div>
        @elseif (session('error'))
            <div
                style="background-color: #f8d7da; color: #721c24; padding: 10px; border-radius: 5px; margin-bottom: 20px;">
                {{ session('error') }}
            </div>
        @endif
        <h2>My Addresses</h2>
        <a href="{{ route('addresses.create') }}" class="btn btn-primary">Add New Address</a>
        <a href="{{ url('/my-account') }}" class="btn btn-secondary">Back to My Account</a>
        <ul class="address-list">
            @foreach ($addresses as $address)
                <li class="address-card">
                    <div class="address-content">{{ $address->address_line_1 }}, {{ $address->city }},
                        {{ $address->state }}, {{ $address->postal_code }}</div>
                    <div class="address-actions">
                        <a href="{{ route('addresses.edit', $address->id) }}" class="btn btn-secondary">Edit</a>
                        <form action="{{ route('addresses.destroy', $address->id) }}" method="POST" style="flex: 1;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-secondary">Delete</button>
                        </form>
                    </div>
                </li>
            @endforeach
        </ul>
    </div>
</body>

</html>
