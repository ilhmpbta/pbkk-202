@extends('layouts.app')

@section('title', 'Dashboard')

@section('content')
    <header class="mb-8">
        <p class="text-xs uppercase tracking-wider text-[#78a9ff]">Dashboard</p>
        <h1 class="mt-2 text-3xl font-semibold tracking-tight text-[#f2f4f8]">
            Pusat Navigasi
        </h1>
        <p class="mt-2 text-sm text-[#7b7c7e]">
            Semua modul akademis tersedia dari sini.
        </p>
    </header>

    {{-- Module cards --}}
    <div class="grid grid-cols-1 md:grid-cols-2 gap-4">

        <a href="{{ route('dashboard.mahasiswa.index') }}"
           class="group rounded-xl border border-[#353535]/60 bg-[#252525]/60 backdrop-blur p-6 transition
                  hover:border-[#78a9ff]/50 hover:bg-[#252525]/80">
            <div class="flex items-start justify-between">
                <h2 class="text-lg font-semibold text-[#f2f4f8]">Profil Mahasiswa</h2>
                <span class="text-xs text-[#7b7c7e] font-mono">/mahasiswa/{nrp}</span>
            </div>
            <p class="mt-2 text-sm text-[#7b7c7e]">
                Lihat profil lengkap, riwayat studi, dan proyeksi proyek Agentic AI per mahasiswa.
            </p>
            <span class="mt-4 inline-block text-sm text-[#78a9ff] group-hover:translate-x-0.5 transition">
                Buka &rarr;
            </span>
        </a>

        <a href="{{ route('dashboard.hitung-ipk', ['ip1' => '3.5', 'ip2' => '3.8']) }}"
           class="group rounded-xl border border-[#353535]/60 bg-[#252525]/60 backdrop-blur p-6 transition
                  hover:border-[#78a9ff]/50 hover:bg-[#252525]/80">
            <div class="flex items-start justify-between">
                <h2 class="text-lg font-semibold text-[#f2f4f8]">Kalkulator IPK</h2>
                <span class="text-xs text-[#7b7c7e] font-mono">/hitung-ipk/{ip1}/{ip2}</span>
            </div>
            <p class="mt-2 text-sm text-[#7b7c7e]">
                Hitung total dan rata-rata IP dari dua semester dalam sekejap.
            </p>
            <span class="mt-4 inline-block text-sm text-[#78a9ff] group-hover:translate-x-0.5 transition">
                Hitung &rarr;
            </span>
        </a>

        <a href="{{ route('agent') }}"
           class="group rounded-xl border border-[#353535]/60 bg-[#252525]/60 backdrop-blur p-6 transition
                  hover:border-[#78a9ff]/50 hover:bg-[#252525]/80 md:col-span-2">
            <div class="flex items-start justify-between">
                <h2 class="text-lg font-semibold text-[#f2f4f8]">Ide Platform Agentic AI</h2>
                <span class="text-xs text-[#7b7c7e] font-mono">/agent/{tema?}</span>
            </div>
            <p class="mt-2 text-sm text-[#7b7c7e]">
                Proyeksi ide platform Agentic AI untuk proyek akhir semester. Mendukung
                parameter opsional tema.
            </p>
            <span class="mt-4 inline-block text-sm text-[#78a9ff] group-hover:translate-x-0.5 transition">
                Jelajahi &rarr;
            </span>
        </a>

        {{-- Placeholder modules for future work --}}
        <div class="rounded-xl border border-dashed border-[#353535]/80 bg-transparent p-6 opacity-60 md:col-span-2">
            <h2 class="text-lg font-semibold text-[#7b7c7e]">Modul selanjutnya</h2>
            <p class="mt-2 text-sm text-[#7b7c7e]">
                Placeholder untuk fitur yang akan ditambahkan pada pertemuan berikutnya.
            </p>
        </div>

    </div>

    {{-- Quick tips / context --}}
    <section class="mt-10 rounded-xl border border-[#353535]/60 bg-[#1e1e1e]/60 backdrop-blur p-6">
        <p class="text-xs uppercase tracking-wider text-[#7b7c7e] mb-2">Catatan</p>
        <p class="text-sm text-[#a4a4a4]">
            Semua rute di dashboard dikelompokkan di bawah prefix <code class="text-[#33b1ff]">/dashboard</code>
            dan diberi nama <code class="text-[#33b1ff]">dashboard.*</code>.
        </p>
    </section>
@endsection