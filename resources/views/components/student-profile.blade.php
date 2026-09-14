@props([
    'nrp',
    'name'        => 'Mahasiswa',
    'tagline'     => '',
    'bio'         => '',
    'email'       => '',
    'github'      => '',
    'linkedin'    => '',
    'city'        => 'Surabaya',
    'skills'      => [],
    'semesters'   => [],
    'project'     => [
        'title' => 'Untitled Agentic AI Idea',
        'pitch' => '',
        'stack' => [],
    ],
])

<div class="max-w-4xl mx-auto space-y-8">
    <section class="rounded-2xl border border-[#353535]/60 bg-[#252525]/60 backdrop-blur p-6 sm:p-8">
        <div class="flex flex-col sm:flex-row items-start sm:items-center gap-6">
            <div class="w-20 h-20 rounded-full bg-[#78a9ff]/15 border border-[#78a9ff]/40
                        flex items-center justify-center text-[#78a9ff] text-3xl font-semibold shrink-0">
                {{ strtoupper(substr($name, 0, 1)) }}
            </div>

            <div class="flex-1 min-w-0">
                <h1 class="text-2xl sm:text-3xl font-semibold tracking-tight text-[#f2f4f8]">
                    {{ $name }}
                </h1>
                <p class="mt-1 text-sm font-mono text-[#7b7c7e]">{{ $nrp }}</p>
                @if ($tagline)
                    <p class="mt-2 text-sm text-[#a4a4a4]">{{ $tagline }}</p>
                @endif
            </div>
        </div>

        <div class="mt-6 grid grid-cols-2 sm:grid-cols-4 gap-3 text-xs">
            <div class="rounded-lg border border-[#353535]/60 bg-[#1e1e1e]/60 px-3 py-2">
                <p class="text-[#7b7c7e]">Departemen</p>
                <p class="mt-0.5 text-[#f2f4f8]">Teknik Informatika</p>
            </div>
            <div class="rounded-lg border border-[#353535]/60 bg-[#1e1e1e]/60 px-3 py-2">
                <p class="text-[#7b7c7e]">Kota</p>
                <p class="mt-0.5 text-[#f2f4f8]">{{ $city }}</p>
            </div>
            <div class="rounded-lg border border-[#353535]/60 bg-[#1e1e1e]/60 px-3 py-2">
                <p class="text-[#7b7c7e]">Email</p>
                <p class="mt-0.5 text-[#f2f4f8] truncate">{{ $email ?: '—' }}</p>
            </div>
            <div class="rounded-lg border border-[#353535]/60 bg-[#1e1e1e]/60 px-3 py-2">
                <p class="text-[#7b7c7e]">GitHub</p>
                <p class="mt-0.5 text-[#f2f4f8] truncate">{{ $github ?: '—' }}</p>
            </div>
        </div>
    </section>

    @if ($bio)
        <section>
            <h2 class="text-lg font-semibold text-[#f2f4f8] mb-3">Tentang</h2>
            <p class="text-sm leading-relaxed text-[#a4a4a4]">{{ $bio }}</p>
        </section>
    @endif

    <section class="rounded-2xl border border-[#78a9ff]/30 bg-[#78a9ff]/5 backdrop-blur p-6">
        <p class="text-xs uppercase tracking-wider text-[#78a9ff] mb-2">Proyeksi Proyek Akhir</p>
        <h2 class="text-xl font-semibold text-[#f2f4f8]">{{ $project['title'] }}</h2>
        @if (!empty($project['pitch']))
            <p class="mt-3 text-sm leading-relaxed text-[#a4a4a4]">{{ $project['pitch'] }}</p>
        @endif
        @if (!empty($project['stack']))
            <div class="mt-4 flex flex-wrap gap-2">
                @foreach ($project['stack'] as $tech)
                    <span class="px-2.5 py-1 text-xs rounded-full
                                 bg-[#252525]/80 text-[#f2f4f8] border border-[#353535]/60">
                        {{ $tech }}
                    </span>
                @endforeach
            </div>
        @endif
    </section>

    @if (!empty($semesters))
        <section>
            <h2 class="text-lg font-semibold text-[#f2f4f8] mb-3">Riwayat Studi</h2>
            <ol class="space-y-3">
                @foreach ($semesters as $s)
                    <li class="flex items-center gap-4 rounded-lg border border-[#353535]/60 bg-[#252525]/50 px-4 py-3">
                        <span class="w-2 h-2 rounded-full bg-[#78a9ff] shrink-0"></span>
                        <span class="text-sm text-[#f2f4f8] flex-1">{{ $s['label'] }}</span>
                        <span class="text-sm font-mono text-[#33b1ff]">{{ number_format($s['ip'], 2) }}</span>
                    </li>
                @endforeach
            </ol>
        </section>
    @endif

    @if (!empty($skills))
        <section>
            <h2 class="text-lg font-semibold text-[#f2f4f8] mb-3">Minat &amp; Keahlian</h2>
            <div class="flex flex-wrap gap-2">
                @foreach ($skills as $skill)
                    <span class="px-2.5 py-1 text-xs rounded-full
                                 bg-[#252525]/80 text-[#a4a4a4] border border-[#353535]/60">
                        {{ $skill }}
                    </span>
                @endforeach
            </div>
        </section>
    @endif

    <div class="pt-4">
        <a href="{{ route('dashboard.mahasiswa.index') }}"
           class="text-sm text-[#78a9ff] hover:underline">&larr; Kembali ke daftar mahasiswa</a>
    </div>
</div>
