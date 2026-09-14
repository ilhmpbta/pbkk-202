<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="theme-color" content="#161616">

    <title>@yield('title', config('app.name', 'PBKK Profile'))</title>

    <link rel="icon" type="image/svg+xml" href="{{ asset('favicon.ico') }}">

    @fonts

    @if (file_exists(public_path('build/manifest.json')) || file_exists(public_path('hot')))
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    @endif
</head>

<body class="h-full bg-[#161616] text-[#f2f4f8] antialiased selection:bg-[#78a9ff]/30 selection:text-[#f2f4f8]">
    <div id="scroll-progress"
         class="fixed top-0 left-0 h-[2px] w-0 z-[60]
                bg-gradient-to-r from-[#78a9ff] to-[#33b1ff]
                transition-[width] duration-100 ease-out"></div>

    <div class="min-h-full flex flex-col">

        @include('components.navbar')

        <main class="flex-1 w-full">
            <div class="mx-auto max-w-6xl px-4 sm:px-6 lg:px-8 py-10 sm:py-12">
                @yield('content')
            </div>
        </main>

        @include('components.footer')

    </div>

    @stack('scripts')

    <script>
        const bar = document.getElementById('scroll-progress');
        let ticking = false;
        window.addEventListener('scroll', () => {
            if (!ticking) {
                requestAnimationFrame(() => {
                    const h = document.documentElement.scrollHeight - window.innerHeight;
                    bar.style.width = h > 0 ? (window.scrollY / h * 100) + '%' : '0%';
                    ticking = false;
                });
                ticking = true;
            }
        }, { passive: true });

        const revealObserver = new IntersectionObserver((entries) => {
            entries.forEach(e => {
                if (e.isIntersecting) {
                    e.target.classList.add('animate-fade-in-up');
                    e.target.style.opacity = '1';
                    revealObserver.unobserve(e.target);
                }
            });
        }, { threshold: 0.1, rootMargin: '0px 0px -40px 0px' });

        document.querySelectorAll('[data-reveal]').forEach(el => {
            el.style.opacity = '0';
            revealObserver.observe(el);
        });
    </script>
</body>