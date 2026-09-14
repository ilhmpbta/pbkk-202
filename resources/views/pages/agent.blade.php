@extends('layouts.app')

@section('title', 'Agentic AI — ' . $tema)

@section('content')
    <div class="max-w-4xl mx-auto space-y-10">

        <header class="text-center pt-4">
            <p class="text-xs uppercase tracking-wider text-[#78a9ff]">
                Proyeksi Platform Agentic AI
            </p>
            <h1 class="mt-3 text-4xl sm:text-5xl font-semibold tracking-tight text-[#f2f4f8]">
                {{ $tema }}
            </h1>
            <p class="mt-4 max-w-2xl mx-auto text-sm text-[#7b7c7e]">
                @if ($isFallback)
                    Halaman ini tidak menerima parameter <code class="text-[#33b1ff]">tema</code>,
                    sehingga menampilkan nilai default.
                @else
                    Tema dipilih melalui parameter rute:
                    <code class="text-[#33b1ff]">/agent/{{ $tema }}</code>
                @endif
            </p>

            <div class="mt-5 inline-flex items-center gap-2 px-3 py-1.5 rounded-full
                        border {{ $isFallback ? 'border-[#7b7c7e]/40 bg-[#252525]/60' : 'border-[#78a9ff]/40 bg-[#78a9ff]/10' }}
                        text-xs">
                <span class="w-1.5 h-1.5 rounded-full
                             {{ $isFallback ? 'bg-[#7b7c7e]' : 'bg-[#78a9ff]' }}"></span>
                <span class="text-[#7b7c7e]">
                    {{ $isFallback ? 'Fallback aktif' : 'Parameter terisi' }}
                </span>
                <span class="font-mono text-[#f2f4f8]">
                    /agent{{ $isFallback ? '' : '/' . $tema }}
                </span>
            </div>
        </header>

        <section class="rounded-2xl border border-[#353535]/60 bg-[#252525]/60 backdrop-blur p-6 sm:p-8">
            <h2 class="text-lg font-semibold text-[#f2f4f8] mb-3">Tentang Tema Ini</h2>
            <p class="text-sm leading-relaxed text-[#a4a4a4]">
                @switch($tema)
                    @case('General Assistant Agent')
                        Agent serbaguna yang dirancang untuk menangani berbagai tugas umum — mulai dari
                        menjawab pertanyaan, meringkas dokumen, hingga membantu pengambilan keputusan
                        sederhana. Cocok sebagai titik awal eksplorasi sebelum beralih ke agent yang
                        lebih terspesialisasi.
                        @break

                    @case('customer-support')
                        Agent yang berfokus pada interaksi pelanggan: menjawab pertanyaan umum,
                        melakukan triase keluhan, dan mengeskalasi tiket ke tim manusia ketika
                        membutuhkan penanganan lebih lanjut.
                        @break

                    @case('research-assistant')
                        Agent yang membantu proses riset: menelusuri literatur, merangkum paper,
                        menyusun kerangka tulisan, dan menghasilkan daftar referensi secara otomatis.
                        @break

                    @case('code-reviewer')
                        Agent yang menganalisis pull request, mendeteksi potensi bug, menyarankan
                        perbaikan gaya penulisan kode, dan memastikan perubahan memenuhi standar tim.
                        @break

                    @default
                        Tema <span class="font-mono text-[#33b1ff]">{{ $tema }}</span> belum
                        memiliki deskripsi khusus. Anda dapat menambahkan deskripsi ini pada
                        <code class="text-[#78a9ff]">resources/views/pages/agent.blade.php</code>
                        pada blok <code class="text-[#78a9ff]">@@switch</code>.
                @endswitch
            </p>
        </section>

        <section>
            <p class="text-xs uppercase tracking-wider text-[#7b7c7e] mb-3">
                Coba tema lain
            </p>
            <div class="flex flex-wrap gap-2">
                <a href="{{ route('agent') }}"
                   class="px-3 py-1.5 rounded-md border text-sm transition
                          {{ $isFallback
                                ? 'border-[#78a9ff]/60 bg-[#78a9ff]/10 text-[#78a9ff]'
                                : 'border-[#353535]/60 bg-[#252525]/60 text-[#7b7c7e] hover:text-[#f2f4f8] hover:border-[#78a9ff]/50' }}">
                    (default)
                </a>
                @foreach (['customer-support', 'research-assistant', 'code-reviewer'] as $t)
                    <a href="{{ route('agent', ['tema' => $t]) }}"
                       class="px-3 py-1.5 rounded-md border text-sm transition
                              {{ $tema === $t
                                    ? 'border-[#78a9ff]/60 bg-[#78a9ff]/10 text-[#78a9ff]'
                                    : 'border-[#353535]/60 bg-[#252525]/60 text-[#7b7c7e] hover:text-[#f2f4f8] hover:border-[#78a9ff]/50' }}">
                        {{ $t }}
                    </a>
                @endforeach
            </div>
        </section>

        <section class="rounded-xl border border-[#353535]/60 bg-[#1e1e1e]/60 backdrop-blur p-6">
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
                    <a href="{{ route('dashboard.mahasiswa', ['nrp' => '5025241152']) }}"
                       class="mt-2 inline-block text-sm text-[#78a9ff] hover:underline">
                        Lihat profil lengkap &rarr;
                    </a>
                </div>
            </div>
        </section>

    </div>
@endsection