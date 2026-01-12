<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title', 'Store4U - Premium Sport Products')</title>
    
    <!-- Tailwind CSS CDN -->
    <script src="https://cdn.tailwindcss.com"></script>
    
    <!-- Custom Tailwind Configuration -->
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    colors: {
                        'eco-green': '#2aa856',
                        'soft-earth': '#A67C52',
                        'section-bg': '#F7F7F7',
                        'text-main': '#1F2937',
                        'text-muted': '#6B7280',
                        'cta-accent': '#F59E0B',
                        'success': '#22C55E',
                        'error': '#EF4444',
                    }
                }
            }
        }
    </script>
    
    <style>
        body {
            font-family: 'Inter', system-ui, -apple-system, sans-serif;
        }
    </style>
</head>
<body class="bg-white text-text-main">
    <header class="sticky top-0 z-50 bg-white shadow-sm">
        @include("Menu")
    </header>
    
    <main class="min-h-screen">
        @yield("content")
    </main>
    
    <footer class="bg-text-main text-white">
        @include("Footer")
    </footer>
</body>
</html>