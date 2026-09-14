<header class="sticky top-0 z-50 w-full border-b border-[#353535]/50 bg-[#252525]/70 backdrop-blur-xl">
    <nav class="mx-auto max-w-6xl px-4 sm:px-6 lg:px-8">
        <div class="flex h-16 items-center justify-between">

            <a href="{{ route('welcome') }}"
               class="group flex items-center gap-2 text-base font-semibold tracking-tight text-[#f2f4f8]">
                <span class="relative flex h-7 w-7 items-center justify-center rounded-lg
                             border border-[#78a9ff]/40 bg-[#78a9ff]/10
                             transition-all duration-300 group-hover:border-[#78a9ff]/80
                             group-hover:bg-[#78a9ff]/20 group-hover:shadow-[0_0_16px_-2px_rgba(120,169,255,0.4)]">
                    <span class="text-[10px] font-bold text-[#78a9ff]">PB</span>
                    <span class="absolute -right-0.5 -top-0.5 h-1.5 w-1.5 rounded-full bg-[#33b1ff]
                                 animate-pulse"></span>
                </span>
                <span class="text-gradient">PBKK-202</span>
            </a>

            <ul class="flex items-center gap-1 sm:gap-2 text-sm">
                <li>
                    <a href="{{ route('welcome') }}"
                       class="group relative px-3 py-2 rounded-md transition-all duration-200
                              {{ request()->routeIs('welcome') ? 'font-medium text-[#78a9ff]' : 'text-[#7b7c7e] hover:text-[#f2f4f8] hover:bg-[#353535]/50' }}">
                        Home
                        @if (request()->routeIs('welcome'))
                            <span class="absolute -bottom-[1px] left-1/2 h-[2px] w-6 -translate-x-1/2
                                         rounded-full bg-gradient-to-r from-[#78a9ff] to-[#33b1ff]
                                         shadow-[0_0_8px_rgba(120,169,255,0.6)]"></span>
                        @endif
                    </a>
                </li>
                <li>
                    <a href="{{ route('dashboard.home') }}"
                       class="group relative px-3 py-2 rounded-md transition-all duration-200
                              {{ request()->routeIs('dashboard.*') ? 'font-medium text-[#78a9ff]' : 'text-[#7b7c7e] hover:text-[#f2f4f8] hover:bg-[#353535]/50' }}">
                        Dashboard
                        @if (request()->routeIs('dashboard.*'))
                            <span class="absolute -bottom-[1px] left-1/2 h-[2px] w-6 -translate-x-1/2
                                         rounded-full bg-gradient-to-r from-[#78a9ff] to-[#33b1ff]
                                         shadow-[0_0_8px_rgba(120,169,255,0.6)]"></span>
                        @endif
                    </a>
                </li>
                <li>
                    <a href="{{ route('agent') }}"
                       class="group relative px-3 py-2 rounded-md transition-all duration-200
                              {{ request()->routeIs('agent*') ? 'font-medium text-[#78a9ff]' : 'text-[#7b7c7e] hover:text-[#f2f4f8] hover:bg-[#353535]/50' }}">
                        Agent
                        @if (request()->routeIs('agent*'))
                            <span class="absolute -bottom-[1px] left-1/2 h-[2px] w-6 -translate-x-1/2
                                         rounded-full bg-gradient-to-r from-[#78a9ff] to-[#33b1ff]
                                         shadow-[0_0_8px_rgba(120,169,255,0.6)]"></span>
                        @endif
                    </a>
                </li>
            </ul>

        </div>
    </nav>
</header>