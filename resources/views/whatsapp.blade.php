<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Modern WhatsApp Icon with Animated Bubbles</title>
    <style>
        @keyframes float {

            0%,
            100% {
                transform: translateY(0);
            }

            50% {
                transform: translateY(-10px);
            }
        }

        @keyframes pulse {

            0%,
            100% {
                transform: scale(1);
                box-shadow: 0 5px 15px rgba(37, 211, 102, 0.4);
            }

            50% {
                transform: scale(1.05);
                box-shadow: 0 8px 20px rgba(37, 211, 102, 0.6);
            }
        }

        .whatsapp-container {
            position: fixed;
            bottom: 20px;
            left: 20px;
            z-index: 1000;
        }

        .whatsapp-icon {
            width: 60px;
            height: 60px;
            background-color: #25D366;
            border-radius: 50%;
            display: flex;
            justify-content: center;
            align-items: center;
            cursor: pointer;
            box-shadow: 0 5px 15px rgba(37, 211, 102, 0.4);
            animation: pulse 2s infinite;
            transition: all 0.3s ease;
        }

        .whatsapp-icon:hover {
            transform: scale(1.1);
        }

        .message-bubble {
            position: absolute;
            background-color: #DCF8C6;
            border-radius: 12px;
            padding: 8px 12px;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
            font-family: Arial, sans-serif;
            font-size: 12px;
            color: #075E54;
            white-space: nowrap;
        }

        .bubble-1 {
            bottom: 70px;
            left: 0;
            animation: float 4s infinite;
        }

        .bubble-2 {
            bottom: 105px;
            left: 20px;
            animation: float 5s infinite 0.5s;
        }

        .bubble-3 {
            bottom: 140px;
            left: 5px;
            animation: float 4.5s infinite 1s;
        }
    </style>
</head>

<body>
    <div class="whatsapp-container">
        <div class="message-bubble bubble-3">Need help?</div>
        <div class="message-bubble bubble-2">Chat Now</div>
        <div class="message-bubble bubble-1">Contact Us</div>
        <div class="whatsapp-icon" onclick="openWhatsApp()">
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="30" height="30">
                <path fill="#FFFFFF"
                    d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51-.173-.008-.371-.01-.57-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347m-5.421 7.403h-.004a9.87 9.87 0 01-5.031-1.378l-.361-.214-3.741.982.998-3.648-.235-.374a9.86 9.86 0 01-1.51-5.26c.001-5.45 4.436-9.884 9.888-9.884 2.64 0 5.122 1.03 6.988 2.898a9.825 9.825 0 012.893 6.994c-.003 5.45-4.437 9.884-9.885 9.884m8.413-18.297A11.815 11.815 0 0012.05 0C5.495 0 .16 5.335.157 11.892c0 2.096.547 4.142 1.588 5.945L.057 24l6.305-1.654a11.882 11.882 0 005.683 1.448h.005c6.554 0 11.89-5.335 11.893-11.893a11.821 11.821 0 00-3.48-8.413z" />
            </svg>
        </div>
    </div>
    <script>
        function openWhatsApp() {
            window.open('https://wa.me/254793977600?text=' + encodeURIComponent("Hello, I'm coming from your website!"),
                '_blank');
        }
    </script>
</body>

</html>
