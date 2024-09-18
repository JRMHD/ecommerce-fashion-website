<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profile Management - Oga Clothing</title>
    <link rel="stylesheet" href="path/to/your/styles.css">
    <style>
        body {
            font-family: 'Roboto', sans-serif;
            background-color: #f4f7f8;
            color: #333;
            margin: 0;
            padding: 0;
        }

        .container {
            max-width: 1200px;
            margin: 0 auto;
            padding: 2rem;
        }

        .logo-section {
            text-align: center;
            margin-bottom: 2rem;
        }

        .logo {
            max-width: 150px;
            height: auto;
            cursor: pointer;
        }

        .user-info {
            background-color: #ffffff;
            padding: 1.5rem;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            margin-bottom: 2rem;
            font-size: 1rem;
            display: flex;
            flex-direction: column;
        }

        .user-info div {
            margin-bottom: 1rem;
        }

        .user-info strong {
            display: block;
            font-weight: 600;
            color: #333;
        }

        .profile-info,
        .update-password,
        .delete-account {
            background-color: #ffffff;
            padding: 2rem;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            margin-bottom: 2rem;
        }

        .profile-info header,
        .update-password header,
        .delete-account header {
            border-bottom: 2px solid #EE2761;
            padding-bottom: 1rem;
            margin-bottom: 1rem;
        }

        h2 {
            font-size: 1.75rem;
            color: #333;
            margin: 0;
        }

        p {
            font-size: 1rem;
            color: #666;
            margin-top: 0.5rem;
        }

        .input-group {
            margin-bottom: 1.5rem;
        }

        .input-group label {
            font-weight: 500;
            color: #333;
            display: block;
            margin-bottom: 0.5rem;
        }

        .input-group input {
            width: 100%;
            padding: 0.75rem;
            border: 1px solid #ced4da;
            border-radius: 8px;
            font-size: 1rem;
            background-color: #f8f9fa;
            transition: border-color 0.3s, box-shadow 0.3s;
        }

        .input-group input:focus {
            border-color: #EE2761;
            box-shadow: 0 0 0 3px rgba(238, 39, 97, 0.2);
            outline: none;
        }

        .input-error {
            color: #dc3545;
            font-size: 0.875rem;
            margin-top: 0.25rem;
        }

        .button-group {
            display: flex;
            justify-content: flex-end;
            gap: 1rem;
        }

        .button-group button {
            border: none;
            padding: 0.75rem 1.5rem;
            border-radius: 8px;
            font-size: 1rem;
            cursor: pointer;
            transition: background-color 0.3s, transform 0.3s;
        }

        .primary-button {
            background-color: #EE2761;
            color: white;
        }

        .primary-button:hover {
            background-color: #d21f55;
            transform: scale(1.05);
        }

        .danger-button {
            background-color: #dc3545;
            color: white;
        }

        .danger-button:hover {
            background-color: #c82333;
            transform: scale(1.05);
        }

        .secondary-button {
            background-color: #6c757d;
            color: white;
        }

        .secondary-button:hover {
            background-color: #5a6268;
            transform: scale(1.05);
        }

        .status-message {
            font-size: 1rem;
            color: #28a745;
            margin-top: 0.5rem;
        }

        .modal {
            position: fixed;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            background-color: rgba(0, 0, 0, 0.5);
            display: none;
            justify-content: center;
            align-items: center;
            z-index: 1000;
            transition: opacity 0.3s;
        }

        .modal.active {
            display: flex;
        }

        .modal-content {
            background-color: #ffffff;
            padding: 2rem;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            max-width: 600px;
            width: 90%;
            position: relative;
        }

        .modal-content h2 {
            font-size: 1.5rem;
            color: #333;
            margin: 0;
        }

        .modal-content p {
            font-size: 1rem;
            color: #666;
            margin-top: 0.5rem;
        }

        .modal-content .close-button {
            position: absolute;
            top: 1rem;
            right: 1rem;
            background: transparent;
            border: none;
            font-size: 1.5rem;
            cursor: pointer;
        }

        .back-button {
            background-color: #007bff;
            color: white;
            text-align: center;
            padding: 0.75rem 1.5rem;
            border-radius: 8px;
            border: none;
            font-size: 1rem;
            cursor: pointer;
            text-decoration: none;
            display: inline-block;
            margin-bottom: 1rem;
        }

        .back-button:hover {
            background-color: #0056b3;
        }

        @media (max-width: 768px) {
            .container {
                padding: 1rem;
            }

            .logo {
                max-width: 120px;
            }

            .user-info,
            .profile-info,
            .update-password,
            .delete-account {
                padding: 1.5rem;
            }

            .button-group {
                flex-direction: column;
                gap: 0.5rem;
            }
        }
    </style>
</head>

<body>
    <div class="container">
        <!-- Logo Section -->
        <div class="logo-section">
            <a href="/">
                <img src="{{ asset('assets/img/logo/nav-log.png') }}" alt="OHA Clothing Logo" class="logo">
            </a>
        </div>

        <!-- Back to My Account Button -->
        <a href="/my-account" class="back-button">{{ __('Back to My Account') }}</a>

        <!-- User Information -->
        <div class="user-info">
            <div>
                <strong>{{ __('Name:') }}</strong> {{ Auth::user()->name }}
            </div>
            <div>
                <strong>{{ __('Email:') }}</strong> {{ Auth::user()->email }}
            </div>
        </div>

        <!-- Profile Information Section -->
        <section class="profile-info">
            <header>
                <h2>{{ __('Profile Information') }}</h2>
                <p>{{ __("Update your account's profile information and email address.") }}</p>
            </header>

            <form id="send-verification" method="post" action="{{ route('verification.send') }}">
                @csrf
            </form>

            <form method="post" action="{{ route('profile.update') }}" class="mt-6 space-y-6">
                @csrf
                @method('patch')

                <div class="input-group">
                    <label for="name">{{ __('Name') }}</label>
                    <input id="name" name="name" type="text" value="{{ old('name', $user->name) }}" required
                        autofocus autocomplete="name">
                    <x-input-error class="input-error" :messages="$errors->get('name')" />
                </div>

                <div class="input-group">
                    <label for="email">{{ __('Email') }}</label>
                    <input id="email" name="email" type="email" value="{{ old('email', $user->email) }}"
                        required autocomplete="username">
                    <x-input-error class="input-error" :messages="$errors->get('email')" />

                    @if ($user instanceof \Illuminate\Contracts\Auth\MustVerifyEmail && !$user->hasVerifiedEmail())
                        <p class="text-sm mt-2 text-gray-800">
                            {{ __('Your email address is unverified.') }}
                            <button form="send-verification" class="primary-button">
                                {{ __('Click here to re-send the verification email.') }}
                            </button>
                        </p>

                        @if (session('status') === 'verification-link-sent')
                            <p class="status-message">
                                {{ __('A new verification link has been sent to your email address.') }}</p>
                        @endif
                    @endif
                </div>

                <div class="button-group">
                    <button type="submit" class="primary-button">{{ __('Save') }}</button>

                    @if (session('status') === 'profile-updated')
                        <p class="status-message">{{ __('Saved.') }}</p>
                    @endif
                </div>
            </form>
        </section>

        <!-- Update Password Section -->
        <section class="update-password">
            <header>
                <h2>{{ __('Update Password') }}</h2>
                <p>{{ __('Ensure your account is using a long, random password to stay secure.') }}</p>
            </header>

            <form method="post" action="{{ route('password.update') }}">
                @csrf
                @method('put')

                <div class="input-group">
                    <label for="update_password_current_password">{{ __('Current Password') }}</label>
                    <input id="update_password_current_password" name="current_password" type="password"
                        autocomplete="current-password">
                    <x-input-error class="input-error" :messages="$errors->updatePassword->get('current_password')" />
                </div>

                <div class="input-group">
                    <label for="update_password_password">{{ __('New Password') }}</label>
                    <input id="update_password_password" name="password" type="password" autocomplete="new-password">
                    <x-input-error class="input-error" :messages="$errors->updatePassword->get('password')" />
                </div>

                <div class="input-group">
                    <label for="update_password_password_confirmation">{{ __('Confirm Password') }}</label>
                    <input id="update_password_password_confirmation" name="password_confirmation" type="password"
                        autocomplete="new-password">
                    <x-input-error class="input-error" :messages="$errors->updatePassword->get('password_confirmation')" />
                </div>

                <div class="button-group">
                    <button type="submit" class="primary-button">{{ __('Save') }}</button>

                    @if (session('status') === 'password-updated')
                        <p class="status-message">{{ __('Saved.') }}</p>
                    @endif
                </div>
            </form>
        </section>

        <!-- Delete Account Section -->
        <section class="delete-account">
            <header>
                <h2>{{ __('Delete Account') }}</h2>
                <p>{{ __('Once your account is deleted, all of its resources and data will be permanently deleted. Before deleting your account, please download any data or information that you wish to retain.') }}
                </p>
            </header>

            <button class="danger-button" onclick="openModal()">{{ __('Delete Account') }}</button>

            <div id="confirm-user-deletion" class="modal">
                <div class="modal-content">
                    <button class="close-button" onclick="closeModal()">&times;</button>
                    <form method="post" action="{{ route('profile.destroy') }}">
                        @csrf
                        @method('delete')

                        <h2>{{ __('Are you sure you want to delete your account?') }}</h2>

                        <p>{{ __('Once your account is deleted, all of its resources and data will be permanently deleted. Please enter your password to confirm you would like to permanently delete your account.') }}
                        </p>

                        <div class="input-group mt-6">
                            <label for="password" class="sr-only">{{ __('Password') }}</label>
                            <input id="password" name="password" type="password" placeholder="{{ __('Password') }}">
                            <x-input-error class="input-error" :messages="$errors->userDeletion->get('password')" />
                        </div>

                        <div class="button-group mt-6">
                            <button type="button" class="secondary-button"
                                onclick="closeModal()">{{ __('Cancel') }}</button>
                            <button type="submit" class="danger-button">{{ __('Delete Account') }}</button>
                        </div>
                    </form>
                </div>
            </div>
        </section>
    </div>

    <script>
        function openModal() {
            document.getElementById('confirm-user-deletion').classList.add('active');
        }

        function closeModal() {
            document.getElementById('confirm-user-deletion').classList.remove('active');
        }
    </script>
</body>

</html>
