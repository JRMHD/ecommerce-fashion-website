<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Order Details - Oga Clothing Africa</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            line-height: 1.6;
            color: #333;
            margin: 0;
            padding: 0;
        }

        .container {
            max-width: 800px;
            margin: 0 auto;
            padding: 20px;
        }

        h2,
        h3,
        h4 {
            color: #EE2761;
        }

        ul {
            list-style-type: none;
            padding: 0;
        }

        li {
            margin-bottom: 20px;
        }

        img {
            max-width: 100px;
            height: auto;
            margin-right: 10px;
            vertical-align: middle;
        }

        .btn {
            display: inline-block;
            background-color: #EE2761;
            color: white;
            padding: 10px 15px;
            text-decoration: none;
            border-radius: 5px;
        }

        .btn:hover {
            background-color: #d61a54;
        }

        .order-details {
            background-color: #f9f9f9;
            border: 1px solid #ddd;
            border-radius: 8px;
            padding: 20px;
            margin-bottom: 20px;
        }
    </style>
</head>

<body>
    <div class="container">
        <header style="display: flex; justify-content: space-between; align-items: center; margin-bottom: 20px;">
            <img src="/assets/img/logo/nav-log.png" alt="Oga Clothing Africa" style="max-height: 50px;">
            <h1 style="color: #EE2761;">Order Details</h1>
        </header>

        <div class="order-details">
            <h3>Order #{{ $order->id }}</h3>
            <p><strong>Status:</strong> {{ $order->status }}</p>
            <p><strong>Total:</strong> KES {{ number_format($order->total_price, 2) }}</p>

            <h4>Products</h4>
            <ul>
                @foreach ($order->orderItems as $item)
                    <li style="display: flex; align-items: center;">
                        @if ($item->product->images->first())
                            <img src="{{ Storage::url($item->product->images->first()->url ?? 'default.jpg') }}"
                                alt="{{ $item->product->name }}">
                        @else
                            <img src="/path/to/default-image.jpg" alt="Default Image">
                        @endif
                        <div>
                            <strong>{{ $item->product->name }}</strong><br>
                            Quantity: {{ $item->quantity }}<br>
                            Price: KES {{ number_format($item->price, 2) }}
                        </div>
                    </li>
                @endforeach
            </ul>

            <h4>Shipping Address</h4>
            @if ($order->address)
                <p>{{ $order->address->address_line_1 }}, {{ $order->address->address_line_2 }},
                    {{ $order->address->city }}, {{ $order->address->country }}</p>
            @else
                <p>No shipping address provided.</p>
            @endif
        </div>

        <a href="{{ route('my-account') }}" class="btn">Back to My Orders</a>
    </div>
</body>

</html>
