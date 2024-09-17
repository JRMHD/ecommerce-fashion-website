<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Oga Clothing Africa - Reset Password</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    colors: {
                        brand: '#EE2761',
                    }
                }
            }
        }
    </script>
</head>

<body class="bg-gray-100 min-h-screen flex items-center justify-center p-4">
    <div class="bg-white p-8 rounded-lg shadow-md w-full max-w-md">
        <div class="text-center mb-6">
            <img src="/assets/img/logo/nav-log.png" alt="Oga Clothing Africa Logo" class="mx-auto w-32 h-auto">
            <h1 class="text-2xl font-bold mt-4 text-gray-800">Oga Clothing Africa</h1>
        </div>
        <h2 class="text-xl font-semibold mb-4 text-center text-gray-800">Reset Password</h2>
        <p class="text-sm text-center text-gray-600 mb-6">Enter your new password below.</p>
        <form action="{{ route('admin.reset.password') }}" method="POST" class="space-y-4">
            @csrf
            <input type="hidden" name="token" value="{{ $token }}">
            <div>
                <label for="new-password" class="block text-sm font-medium text-gray-700">New Password:</label>
                <input type="password" id="new-password" name="password" required
                    class="mt-1 block w-full px-3 py-2 bg-white border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-brand focus:border-brand">
            </div>
            <div>
                <label for="confirm-password" class="block text-sm font-medium text-gray-700">Confirm Password:</label>
                <input type="password" id="confirm-password" name="password_confirmation" required
                    class="mt-1 block w-full px-3 py-2 bg-white border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-brand focus:border-brand">
            </div>
            <div>
                <button type="submit"
                    class="w-full flex justify-center py-2 px-4 border border-transparent rounded-md shadow-sm text-sm font-medium text-white bg-brand hover:bg-brand/90 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-brand transition-colors duration-200">
                    Reset Password
                </button>
            </div>
        </form>
        @if ($errors->any())
            <p class="mt-4 text-sm text-red-600 text-center">{{ $errors->first() }}</p>
        @endif
    </div>
    <script>
        document.addEventListener('DOMContentLoaded', () => {
            const form = document.querySelector('form');
            form.classList.add('opacity-0', 'translate-y-4', 'transition-all', 'duration-500');
            setTimeout(() => {
                form.classList.remove('opacity-0', 'translate-y-4');
            }, 100);
        });
    </script>
</body>

</html>
