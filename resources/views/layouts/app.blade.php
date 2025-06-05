<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Laravel Agent ADK - {{ $title ?? 'Dashboard' }}</title>

    <!-- Tailwind CSS CDN for quick styling -->
    <script src="https://cdn.tailwindcss.com"></script>

    <!-- Livewire Styles -->
    @livewireStyles
</head>
<body class="bg-gray-50 min-h-screen">
    <nav class="bg-white shadow-sm border-b">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex justify-between h-16">
                <div class="flex items-center space-x-8">
                    <div class="flex-shrink-0">
                        <h1 class="text-xl font-bold text-gray-900">🤖 Laravel Agent ADK</h1>
                    </div>
                    <div class="hidden md:flex space-x-4">
                        <a href="{{ route('agent-adk.dashboard') }}"
                           class="text-gray-600 hover:text-gray-900 px-3 py-2 rounded-md text-sm font-medium {{ request()->routeIs('agent-adk.dashboard') ? 'text-blue-600 bg-blue-50' : '' }}">
                            Dashboard
                        </a>
                        <a href="{{ route('agent-adk.chat') }}"
                           class="text-gray-600 hover:text-gray-900 px-3 py-2 rounded-md text-sm font-medium {{ request()->routeIs('agent-adk.chat') ? 'text-blue-600 bg-blue-50' : '' }}">
                            Chat Interface
                        </a>
                    </div>
                </div>
                <div class="flex items-center space-x-4">
                    <a href="https://github.com/aaronlumsden/laravel-agent-adk"
                       target="_blank"
                       class="text-gray-500 hover:text-gray-700">
                        <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24">
                            <path d="M12 0C5.374 0 0 5.373 0 12 0 17.302 3.438 21.8 8.207 23.387c.599.111.793-.261.793-.577v-2.234c-3.338.726-4.033-1.416-4.033-1.416-.546-1.387-1.333-1.756-1.333-1.756-1.089-.745.083-.729.083-.729 1.205.084 1.839 1.237 1.839 1.237 1.07 1.834 2.807 1.304 3.492.997.107-.775.418-1.305.762-1.604-2.665-.305-5.467-1.334-5.467-5.931 0-1.311.469-2.381 1.236-3.221-.124-.303-.535-1.524.117-3.176 0 0 1.008-.322 3.301 1.23A11.509 11.509 0 0112 5.803c1.02.005 2.047.138 3.006.404 2.291-1.552 3.297-1.23 3.297-1.30.653 1.653.242 2.874.118 3.176.77.84 1.235 1.911 1.235 3.221 0 4.609-2.807 5.624-5.479 5.921.43.372.823 1.102.823 2.222v3.293c0 .319.192.694.801.576C20.566 21.797 24 17.3 24 12c0-6.627-5.373-12-12-12z"/>
                        </svg>
                    </a>
                </div>
            </div>
        </div>
    </nav>

    <main class="max-w-7xl mx-auto py-6 sm:px-6 lg:px-8">
        {{ $slot }}
    </main>

    <!-- Livewire Scripts -->
    @livewireScripts
</body>
</html>
