<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $form->title }}</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    @livewireStyles
    {{-- <script src="https://cdn.tailwindcss.com"></script>
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    colors: {
                        primary: {
                            100: '#e6f7ff',
                            200: '#b3e6ff',
                            300: '#80d4ff',
                            400: '#4dc3ff',
                            500: '#1a9cff',
                            600: '#0080e6',
                            700: '#0066b3',
                            800: '#004d80',
                            900: '#00334d',
                        },
                        secondary: {
                            100: '#f2f2f2',
                            200: '#e6e6e6',
                            300: '#d9d9d9',
                            400: '#cccccc',
                            500: '#bfbfbf',
                            600: '#999999',
                            700: '#737373',
                            800: '#4d4d4d',
                            900: '#262626',
                        }
                    },
                    fontFamily: {
                        sans: ['Inter', 'system-ui', 'sans-serif'],
                    },
                    boxShadow: {
                        'glow': '0 0 15px rgba(26, 156, 255, 0.3)',
                    }
                }
            }
        }
    </script> --}}
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
    <script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script>
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&display=swap');

        body {
            font-family: 'Inter', sans-serif;
        }

        .password-input-container {
            position: relative;
        }

        .password-toggle {
            position: absolute;
            right: 12px;
            top: 50%;
            transform: translateY(-50%);
            cursor: pointer;
            color: #999;
            transition: all 0.3s ease;
        }

        .password-toggle:hover {
            color: #1a9cff;
        }

        .strength-meter {
            height: 4px;
            position: relative;
            margin-top: 8px;
            border-radius: 2px;
            overflow: hidden;
            background: #e6e6e6;
        }

        .strength-meter:before {
            content: '';
            position: absolute;
            left: 0;
            height: 100%;
            width: 0;
            transition: width 0.3s ease, background 0.3s ease;
        }

        .password-rules {
            margin-top: 12px;
        }

        .rule {
            display: flex;
            align-items: center;
            margin-bottom: 6px;
            font-size: 14px;
            color: #737373;
            transition: all 0.3s ease;
        }

        .rule.active {
            color: #1a9cff;
        }

        .rule-icon {
            margin-right: 8px;
            font-size: 12px;
        }
    </style>
</head>
<body class="bg-gradient-to-br from-primary-100 to-secondary-100 min-h-screen flex items-center justify-center p-4">
    <div class="w-full max-w-md">
        <div class="bg-white rounded-2xl shadow-xl overflow-hidden">
            <div class="bg-primary-500 py-4 px-6">
                <h1 class="text-2xl font-bold text-white">Secure Login</h1>
                <p class="text-primary1-200 mt-1">Enter your password to continue</p>
            </div>

            <div class="p-6">
                <form action="{{ route('form.check', $form->slug) }}" method="post">
                    @csrf
                    <div class="mb-1">
                        <label for="password" class="block text-sm font-medium text-secondary-700 mb-1">Password</label>
                        <div class="password-input-container">
                            <input
                                type="password"
                                id="password"
                                name="password"
                                class="w-full px-4 py-2 rounded-lg border border-secondary-300 focus:outline-none focus:ring-2 focus:ring-primary-500 focus:border-transparent transition-all pr-10"
                                placeholder="Enter your password"
                                required

                            >
                            <span class="password-toggle" onclick="togglePasswordVisibility()">
                                <i class="fas fa-eye"></i>
                            </span>
                        </div>


                    </div>

                    <button
                        type="submit"
                        class="w-full bg-primary-600 hover:bg-primary-700 text-white font-medium py-2 px-4 rounded-lg transition-all focus:outline-none focus:ring-2 focus:ring-primary-500 focus:ring-offset-2 shadow-md hover:shadow-lg"
                    >
                        Sign In
                    </button>
                </form>

            </div>
        </div>
    </div>


</body>
</html>
