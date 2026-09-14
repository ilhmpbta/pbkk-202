@extends('layouts.app')

@section('title', 'Home')

@section('content')
    {{-- Hero --}}
    <section class="relative pt-8 pb-12 text-center overflow-hidden">
        {{-- Ambient glow --}}
        <div class="pointer-events-none absolute inset-0 -z-10">
            <div class="absolute left-1/2 top-0 h-64 w-64 -translate-x-1/2 rounded-full
                        bg-[#78a9ff]/10 blur-[100px] animate-float"></div>
            <div class="absolute left-1/4 top-1/3 h-40 w-40 rounded-full
                        bg-[#33b1ff]/10 blur-[80px] animate-float"
                 style="animation-delay: 1.5s;"></div>
        </div>

        <p class="animate-fade-in-up text-sm font-medium tracking-wider uppercase text-[#78a9ff]">
            Departemen Teknik Informatika &mdash; ITS
        </p>
        <h1 class="animate-fade-in-up mt-3 text-4xl sm:text-5xl font-semibold tracking-tight text-[#f2f4f8]"
            style="animation-delay: 0.1s;">
            Selamat datang di <span class="text-gradient">PBKK-202</span>
        </h1>
        <p class="animate-fade-in-up mt-4 max-w-xl mx-auto text-[#7b7c7e]"
           style="animation-delay: 0.2s;">
            Local routing sandbox Laravel &mdash; sebuah ruang kecil untuk mengeksplorasi
            arsitektur rute, komponen Blade, dan struktur aplikasi yang rapi.
        </p>

        <div class="animate-fade-in-up mt-6 flex items-center justify-center gap-3"
             style="animation-delay: 0.3s;">
            <a href="{{ route('dashboard.home') }}"
               class="group relative inline-flex items-center gap-2 rounded-lg
                      bg-[#78a9ff] px-5 py-2.5 text-sm font-medium text-[#161616]
                      transition-all duration-300
                      hover:bg-[#33b1ff] hover:shadow-[0_8px_24px_-6px_rgba(120,169,255,0.5)]
                      hover:-translate-y-0.5">
                Buka Dashboard
                <svg class="h-4 w-4 transition-transform duration-300 group-hover:translate-x-0.5"
                     viewBox="0 0 16 16" fill="none">
                    <path d="M3 8h10M9 4l4 4-4 4" stroke="currentColor"
                          stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                </svg>
            </a>
            <a href="{{ route('agent') }}"
               class="inline-flex items-center gap-2 rounded-lg border border-[#353535]/60
                      bg-[#252525]/60 px-5 py-2.5 text-sm font-medium text-[#f2f4f8]
                      backdrop-blur transition-all duration-300
                      hover:border-[#78a9ff]/50 hover:bg-[#252525]/80 hover:-translate-y-0.5">
                Lihat Agentic AI
            </a>
        </div>
    </section>

    {{-- Quick access cards --}}
    <section class="stagger grid grid-cols-1 md:grid-cols-3 gap-4">
        <a href="{{ route('dashboard.home') }}"
           class="card-lift group rounded-xl border border-[#353535]/60 bg-[#252525]/60 backdrop-blur p-6
                  hover:border-[#78a9ff]/50 hover:bg-[#252525]/80">
            <div class="flex h-10 w-10 items-center justify-center rounded-lg
                        bg-[#78a9ff]/10 border border-[#78a9ff]/30 mb-4
                        transition-all duration-300 group-hover:bg-[#78a9ff]/20
                        group-hover:shadow-[0_0_16px_-2px_rgba(120,169,255,0.4)]">
                <svg class="h-5 w-5 text-[#78a9ff]" viewBox="0 0 20 20" fill="none">
                    <rect x="2.5" y="2.5" width="6" height="6" rx="1.5" stroke="currentColor" stroke-width="1.5"/>
                    <rect x="11.5" y="2.5" width="6" height="6" rx="1.5" stroke="currentColor" stroke-width="1.5"/>
                    <rect x="2.5" y="11.5" width="6" height="6" rx="1.5" stroke="currentColor" stroke-width="1.5"/>
                    <rect x="11.5" y="11.5" width="6" height="6" rx="1.5" stroke="currentColor" stroke-width="1.5"/>
                </svg>
            </div>
            <h2 class="text-lg font-semibold text-[#f2f4f8]">Dashboard</h2>
            <p class="mt-2 text-sm text-[#7b7c7e]">
                Pusat navigasi menuju profil mahasiswa, kalkulator IPK, dan modul lainnya.
            </p>
            <span class="mt-4 inline-flex items-center gap-1 text-sm text-[#78a9ff]
                         transition-transform duration-300 group-hover:translate-x-0.5">
                Buka
                <svg class="h-3.5 w-3.5" viewBox="0 0 16 16" fill="none">
                    <path d="M3 8h10M9 4l4 4-4 4" stroke="currentColor"
                          stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                </svg>
            </span>
        </a>

        <a href="{{ route('agent') }}"
           class="card-lift group rounded-xl border border-[#353535]/60 bg-[#252525]/60 backdrop-blur p-6
                  hover:border-[#78a9ff]/50 hover:bg-[#252525]/80">
            <div class="flex h-10 w-10 items-center justify-center rounded-lg
                        bg-[#33b1ff]/10 border border-[#33b1ff]/30 mb-4
                        transition-all duration-300 group-hover:bg-[#33b1ff]/20
                        group-hover:shadow-[0_0_16px_-2px_rgba(51,177,255,0.4)]">
                <svg class="h-5 w-5 text-[#33b1ff]" viewBox="0 0 20 20" fill="none">
                    <circle cx="10" cy="10" r="2.5" stroke="currentColor" stroke-width="1.5"/>
                    <circle cx="10" cy="10" r="6.5" stroke="currentColor" stroke-width="1.5" opacity="0.5"/>
                    <circle cx="16.5" cy="10" r="1.5" fill="currentColor"/>
                </svg>
            </div>
            <h2 class="text-lg font-semibold text-[#f2f4f8]">Agentic AI</h2>
            <p class="mt-2 text-sm text-[#7b7c7e]">
                Proyeksi platform Agentic AI untuk proyek akhir semester.
            </p>
            <span class="mt-4 inline-flex items-center gap-1 text-sm text-[#78a9ff]
                         transition-transform duration-300 group-hover:translate-x-0.5">
                Lihat ide
                <svg class="h-3.5 w-3.5" viewBox="0 0 16 16" fill="none">
                    <path d="M3 8h10M9 4l4 4-4 4" stroke="currentColor"
                          stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                </svg>
            </span>
        </a>

        <a href="{{ route('dashboard.mahasiswa.index') }}"
           class="card-lift group rounded-xl border border-[#353535]/60 bg-[#252525]/60 backdrop-blur p-6
                  hover:border-[#78a9ff]/50 hover:bg-[#252525]/80">
            <div class="flex h-10 w-10 items-center justify-center rounded-lg
                        bg-[#78a9ff]/10 border border-[#78a9ff]/30 mb-4
                        transition-all duration-300 group-hover:bg-[#78a9ff]/20
                        group-hover:shadow-[0_0_16px_-2px_rgba(120,169,255,0.4)]">
                <svg class="h-5 w-5 text-[#78a9ff]" viewBox="0 0 20 20" fill="none">
                    <circle cx="10" cy="7" r="3" stroke="currentColor" stroke-width="1.5"/>
                    <path d="M4 17c0-3.3 2.7-6 6-6s6 2.7 6 6" stroke="currentColor"
                          stroke-width="1.5" stroke-linecap="round"/>
                </svg>
            </div>
            <h2 class="text-lg font-semibold text-[#f2f4f8]">Mahasiswa</h2>
            <p class="mt-2 text-sm text-[#7b7c7e]">
                Kumpulan profil mahasiswa dengan NRP sebagai identifikator unik.
            </p>
            <span class="mt-4 inline-flex items-center gap-1 text-sm text-[#78a9ff]
                         transition-transform duration-300 group-hover:translate-x-0.5">
                Jelajahi
                <svg class="h-3.5 w-3.5" viewBox="0 0 16 16" fill="none">
                    <path d="M3 8h10M9 4l4 4-4 4" stroke="currentColor"
                          stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                </svg>
            </span>
        </a>
    </section>

    {{-- About card --}}
    <section data-reveal class="mt-10 rounded-xl border border-[#353535]/60 bg-[#1e1e1e]/60 backdrop-blur p-6
                                 shimmer-border">
        <div class="flex flex-col sm:flex-row items-start sm:items-center gap-4">
            <div class="relative w-16 h-16 rounded-full bg-[#78a9ff]/20 border border-[#78a9ff]/40
                        flex items-center justify-center text-[#78a9ff] text-2xl font-semibold shrink-0
                        animate-pulse-glow">
                BI
            </div>
            <div>
                <h3 class="text-base font-semibold text-[#f2f4f8]">Bintang Ilham Pabeta</h3>
                <p class="text-sm text-[#7b7c7e]">
                    5025241152 &middot; Teknik Informatika ITS &middot; PBKK (B)
                </p>
                <p class="mt-1 text-sm text-[#7b7c7e]">
                    Sedang mendalami arsitektur Laravel dan pola routing yang bersih.
                </p>
            </div>
        </div>
    </section>
@endsection
