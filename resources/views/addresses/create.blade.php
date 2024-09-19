<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add New Address</title>
    <style>
        :root {
            --primary: #EE2761;
            --black: #333;
            --white: #fff;
            --gray: #f4f4f4;
        }

        body {
            font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, sans-serif;
            line-height: 1.4;
            color: var(--black);
            background: var(--gray);
            margin: 0;
            padding: 0;
        }

        .container {
            max-width: 600px;
            margin: 0 auto;
            padding: 20px;
        }

        h2 {
            color: var(--primary);
            text-align: center;
            margin-bottom: 20px;
        }

        form {
            background: var(--white);
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
        }

        .form-group {
            margin-bottom: 15px;
        }

        label {
            display: block;
            margin-bottom: 5px;
            font-weight: bold;
        }

        input[type="text"] {
            width: 100%;
            padding: 10px;
            border: 1px solid #ddd;
            border-radius: 4px;
            font-size: 16px;
        }

        .btn {
            display: inline-block;
            padding: 12px 20px;
            border-radius: 4px;
            font-size: 16px;
            cursor: pointer;
            text-decoration: none;
            text-align: center;
        }

        .btn-primary {
            background: var(--primary);
            color: var(--white);
            border: none;
        }

        .btn-secondary {
            background: var(--black);
            color: var(--white);
            border: none;
        }

        .btn:hover {
            opacity: 0.9;
        }

        .actions {
            display: flex;
            justify-content: space-between;
            margin-top: 20px;
        }
    </style>
</head>

<body>
    <div class="container">
        <h2>Add New Address</h2>
        <form action="{{ route('addresses.store') }}" method="POST">
            @csrf
            <div class="form-group">
                <label for="address_line_1">Address Line 1:</label>
                <input type="text" id="address_line_1" name="address_line_1" required>
            </div>
            <div class="form-group">
                <label for="address_line_2">Address Line 2:</label>
                <input type="text" id="address_line_2" name="address_line_2">
            </div>
            <div class="form-group">
                <label for="city">City:</label>
                <input type="text" id="city" name="city" required>
            </div>
            <div class="form-group">
                <label for="state">State:</label>
                <input type="text" id="state" name="state" required>
            </div>
            <div class="form-group">
                <label for="postal_code">Postal Code:</label>
                <input type="text" id="postal_code" name="postal_code" required>
            </div>
            <div class="form-group">
                <label for="country">Country:</label>
                <input type="text" id="country" name="country" required>
            </div>
            <div class="actions">
                <a href="{{ route('addresses.index') }}" class="btn btn-secondary">Back</a>
                <button type="submit" class="btn btn-primary">Add Address</button>
            </div>
        </form>
    </div>
</body>

</html>
