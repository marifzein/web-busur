<!DOCTYPE html>
<html lang="id" class="scroll-smooth">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cahaya Busur - Digital Print & ATK Bojonegoro</title>
    <!-- Tailwind CSS CDN -->
    <script src="https://cdn.tailwindcss.com"></script>
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    colors: {
                        brand: {
                            orange: '#E9820C',
                            'orange-hover': '#d0730a',
                            green: '#097937',
                            'green-dark': '#065928',
                            dark: '#1A1A1A',
                        }
                    }
                }
            }
        }
    </script>
    <!-- Alpine.js CDN -->
    <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>
    <!-- Lucide Icons -->
    <script src="https://unpkg.com/lucide@latest"></script>
</head>
<body class="bg-[#F8F9FA] text-brand-dark antialiased font-sans">

    @include('components.navbar')

    <main>
        {{ $slot }}
    </main>

    @include('components.footer')

    <script>
        lucide.createIcons();
    </script>
</body>
</html>