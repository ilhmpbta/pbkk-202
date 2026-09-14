@extends('layouts.app')

@section('title', 'Mahasiswa')

@section('content')
    <header class="mb-8">
        <h1 class="text-3xl font-semibold tracking-tight text-[#f2f4f8]">Profil Mahasiswa</h1>
        <p class="mt-2 text-sm text-[#7b7c7e]">
            Pilih NRP untuk melihat profil lengkap.
        </p>
    </header>

    @php
        $students = [
            ['nrp' => '5025241106', 'name' => 'Joaquin Fairuz Nawfal Ismono',         'tag' => 'Unknown'],
            ['nrp' => '5025241107', 'name' => 'Muhammad Zahran Rizki Primanda',         'tag' => 'Unknown'],
            ['nrp' => '5025241114', 'name' => 'Hasan Abdurrahman',         'tag' => 'Unknown'],
            ['nrp' => '5025241152', 'name' => 'Bintang Ilham Pabeta',   'tag' => 'DevOps'],
            ['nrp' => '5025241162', 'name' => 'Felix Aldorino',         'tag' => 'Unknown'],
        ];
    @endphp

    <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-4">
        @foreach ($students as $s)
            <a href="{{ route('dashboard.mahasiswa', ['nrp' => $s['nrp']]) }}"
               class="group rounded-xl border border-[#353535]/60 bg-[#252525]/60 backdrop-blur p-5 transition
                      hover:border-[#78a9ff]/50 hover:bg-[#252525]/80">

                <div class="flex items-center gap-3">
                    <div class="w-12 h-12 rounded-full bg-[#78a9ff]/15 border border-[#78a9ff]/40
                                flex items-center justify-center text-[#78a9ff] font-semibold">
                        {{ strtoupper(substr($s['name'], 0, 1)) }}
                    </div>
                    <div class="min-w-0">
                        <p class="text-base font-medium text-[#f2f4f8] truncate">{{ $s['name'] }}</p>
                        <p class="text-xs text-[#7b7c7e] font-mono">{{ $s['nrp'] }}</p>
                    </div>
                </div>

                <div class="mt-4 flex items-center justify-between">
                    <span class="px-2 py-0.5 text-xs rounded-full
                                 bg-[#33b1ff]/10 text-[#33b1ff] border border-[#33b1ff]/30">
                        {{ $s['tag'] }}
                    </span>
                    <span class="text-sm text-[#78a9ff] group-hover:translate-x-0.5 transition">
                        Lihat &rarr;
                    </span>
                </div>
            </a>
        @endforeach
    </div>

    <div class="pt-4">
        <a href="{{ route('dashboard.home') }}"
           class="text-sm text-[#78a9ff] hover:underline">&larr; Kembali ke dashboard</a>
    </div>
@endsection