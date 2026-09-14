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
            <div class="relative w-20 h-20 shrink-0">
                <div class="absolute inset-0 rounded-full border border-dashed border-[#78a9ff]/30 animate-orbit"></div>
                <div class="absolute inset-1 rounded-full bg-[#78a9ff]/15 border border-[#78a9ff]/40
                            flex items-center justify-center text-[#78a9ff] text-3xl font-semibold
                            animate-pulse-glow">
                    {{ strtoupper(substr($name, 0, 1)) }}
                </div>
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
        <section data-reveal>
            <h2 class="text-lg font-semibold text-[#f2f4f8] mb-3">Riwayat Studi</h2>
            <ol class="space-y-3">
                @foreach ($semesters as $i => $s)
                    <li class="group relative overflow-hidden flex items-center gap-4 rounded-lg
                               border border-[#353535]/60 bg-[#252525]/50 px-4 py-3
                               transition-all duration-300 hover:border-[#78a9ff]/40">
                        <div class="absolute inset-y-0 left-0 bg-[#78a9ff]/5 transition-all duration-700"
                             style="width: {{ ($s['ip'] / 4) * 100 }}%"></div>
    
                        <span class="relative w-2 h-2 rounded-full bg-[#78a9ff] shrink-0
                                     shadow-[0_0_8px_rgba(120,169,255,0.6)]"></span>
                        <span class="relative text-sm text-[#f2f4f8] flex-1">{{ $s['label'] }}</span>
                        <span class="relative text-sm font-mono text-[#33b1ff]
                                     transition-transform duration-300 group-hover:scale-110">
                            {{ number_format($s['ip'], 2) }}
                        </span>
                    </li>
                @endforeach
            </ol>
        </section>
    @endif

    @if (!empty($skills))
        <section data-reveal>
            <h2 class="text-lg font-semibold text-[#f2f4f8] mb-3">Minat &amp; Keahlian</h2>
            <div class="flex flex-wrap gap-2 stagger">
                @foreach ($skills as $skill)
                    <span class="px-2.5 py-1 text-xs rounded-full
                                 bg-[#252525]/80 text-[#a4a4a4] border border-[#353535]/60
                                 transition-all duration-200
                                 hover:border-[#78a9ff]/50 hover:text-[#f2f4f8] hover:-translate-y-0.5">
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
