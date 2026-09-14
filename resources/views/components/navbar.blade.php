<header class="sticky top-0 z-50 w-full border-b border-[#353535]/50 bg-[#252525]/70 backdrop-blur-xl">
    <nav class="mx-auto max-w-6xl px-4 sm:px-6 lg:px-8">
        <div class="flex h-16 items-center justify-between">

            <a href="{{ route('welcome') }}"
               class="text-base font-semibold tracking-tight text-[#f2f4f8]">
                PBKK-202
            </a>

            <ul class="flex items-center gap-1 sm:gap-2 text-sm">
                <li>
                    <a href="{{ route('welcome') }}"
                       class="px-3 py-2 rounded-md transition-colors duration-200
                              {{ request()->routeIs('welcome') ? 'font-medium text-[#78a9ff]' : 'text-[#7b7c7e] hover:text-[#f2f4f8] hover:bg-[#353535]/50' }}">
                        Home
                    </a>
                </li>
                <li>
                    <a href="{{ route('dashboard.home') }}"
                       class="px-3 py-2 rounded-md transition-colors duration-200
                              {{ request()->routeIs('dashboard.*') ? 'font-medium text-[#78a9ff]' : 'text-[#7b7c7e] hover:text-[#f2f4f8] hover:bg-[#353535]/50' }}">
                        Dashboard
                    </a>
                </li>
                <li>
                    <a href="{{ route('agent') }}"
                       class="px-3 py-2 rounded-md transition-colors duration-200
                              {{ request()->routeIs('agent*') ? 'font-medium text-[#78a9ff]' : 'text-[#7b7c7e] hover:text-[#f2f4f8] hover:bg-[#353535]/50' }}">
                        Agent
                    </a>
                </li>
            </ul>

        </div>
    </nav>
</header>
