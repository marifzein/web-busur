<!DOCTYPE html>
<html lang="id" class="scroll-smooth">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cahaya Busur - Digital Print & ATK Bojonegoro</title>
    
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@400;600;700&display=swap" rel="stylesheet">

    <link rel="icon" type="image/x-icon" href="/cahayabusur.ico">
    <!-- Tailwind CSS CDN -->
    <script src="https://cdn.tailwindcss.com"></script>
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    fontFamily: {
                        sans: ['"Plus Jakarta Sans"', 'sans-serif'], // Font utama/default
                        heading: ['"Poppins"', 'sans-serif'],        // Font tambahan kalau ada
                    },
                    colors: {
                        brand: {
                            orange: '#E9820C',
                            'orange-hover': '#d0730a',
                            // Hijau baru sesuai konsep referensi
                            green: '#00B14F', 
                            'green-bright': '#aff175', 
                            'green-dark': '#063231', 
                            dark: '#111827',
                            cream: '#F4F4EE', 
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
<body class="bg-brand-cream text-brand-dark antialiased font-sans">

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