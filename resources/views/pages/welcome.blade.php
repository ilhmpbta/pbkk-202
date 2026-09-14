@extends('layouts.app')

@section('title', 'Home')

@section('content')
    {{-- Hero --}}
    <section class="pt-8 pb-12 text-center">
        <p class="text-sm font-medium tracking-wider uppercase text-[#78a9ff]">
            Departemen Teknik Informatika &mdash; ITS
        </p>
        <h1 class="mt-3 text-4xl sm:text-5xl font-semibold tracking-tight text-[#f2f4f8]">
            Selamat datang di <span class="text-[#33b1ff]">PBKK-202</span>
        </h1>
        <p class="mt-4 max-w-xl mx-auto text-[#7b7c7e]">
            Local routing sandbox Laravel &mdash; sebuah ruang kecil untuk mengeksplorasi
            arsitektur rute, komponen Blade, dan struktur aplikasi yang rapi.
        </p>
    </section>

    {{-- Quick access cards --}}
    <section class="grid grid-cols-1 md:grid-cols-3 gap-4">
        <a href="{{ route('dashboard.home') }}"
           class="group rounded-xl border border-[#353535]/60 bg-[#252525]/60 backdrop-blur p-6 transition
                  hover:border-[#78a9ff]/50 hover:bg-[#252525]/80">
            <h2 class="text-lg font-semibold text-[#f2f4f8]">Dashboard</h2>
            <p class="mt-2 text-sm text-[#7b7c7e]">
                Pusat navigasi menuju profil mahasiswa, kalkulator IPK, dan modul lainnya.
            </p>
            <span class="mt-4 inline-block text-sm text-[#78a9ff] group-hover:translate-x-0.5 transition">
                Buka &rarr;
            </span>
        </a>

        <a href="{{ route('agent') }}"
           class="group rounded-xl border border-[#353535]/60 bg-[#252525]/60 backdrop-blur p-6 transition
                  hover:border-[#78a9ff]/50 hover:bg-[#252525]/80">
            <h2 class="text-lg font-semibold text-[#f2f4f8]">Agentic AI</h2>
            <p class="mt-2 text-sm text-[#7b7c7e]">
                Proyeksi platform Agentic AI untuk proyek akhir semester.
            </p>
            <span class="mt-4 inline-block text-sm text-[#78a9ff] group-hover:translate-x-0.5 transition">
                Lihat ide &rarr;
            </span>
        </a>

        <a href="{{ route('dashboard.mahasiswa.index') }}"
           class="group rounded-xl border border-[#353535]/60 bg-[#252525]/60 backdrop-blur p-6 transition
                  hover:border-[#78a9ff]/50 hover:bg-[#252525]/80">
            <h2 class="text-lg font-semibold text-[#f2f4f8]">Mahasiswa</h2>
            <p class="mt-2 text-sm text-[#7b7c7e]">
                Kumpulan profil mahasiswa dengan NRP sebagai identifikator unik.
            </p>
            <span class="mt-4 inline-block text-sm text-[#78a9ff] group-hover:translate-x-0.5 transition">
                Jelajahi &rarr;
            </span>
        </a>
    </section>

    {{-- About card --}}
    <section class="mt-10 rounded-xl border border-[#353535]/60 bg-[#1e1e1e]/60 backdrop-blur p-6">
        <div class="flex flex-col sm:flex-row items-start sm:items-center gap-4">
            <div class="w-16 h-16 rounded-full bg-[#78a9ff]/20 border border-[#78a9ff]/40
                        flex items-center justify-center text-[#78a9ff] text-2xl font-semibold shrink-0">
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