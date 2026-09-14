@extends('layouts.app')

@section('title', 'Hitung IPK')

@section('content')
    <div class="max-w-2xl mx-auto">

        <header class="mb-8">
            <h1 class="text-3xl font-semibold tracking-tight text-[#f2f4f8]">Kalkulator IPK</h1>
            <p class="mt-2 text-sm text-[#7b7c7e]">
                Menghitung total dan rata-rata IP dari dua semester.
            </p>
        </header>

        <section class="rounded-xl border border-[#353535]/60 bg-[#252525]/60 backdrop-blur p-6 shimmer-border">
            <p class="text-xs uppercase tracking-wider text-[#7b7c7e] mb-4">Hasil perhitungan</p>
        
            <dl class="grid grid-cols-2 gap-4 text-sm">
                <div>
                    <dt class="text-[#7b7c7e]">IP Semester 1</dt>
                    <dd class="mt-1 text-xl font-medium text-[#f2f4f8]">{{ $ip1 }}</dd>
                </div>
                <div>
                    <dt class="text-[#7b7c7e]">IP Semester 2</dt>
                    <dd class="mt-1 text-xl font-medium text-[#f2f4f8]">{{ $ip2 }}</dd>
                </div>
                <div>
                    <dt class="text-[#7b7c7e]">Total</dt>
                    <dd class="mt-1 text-2xl font-semibold text-[#33b1ff]">{{ $total }}</dd>
                </div>
                <div>
                    <dt class="text-[#7b7c7e]">Rata-rata (IPK)</dt>
                    <dd class="mt-1 text-2xl font-semibold text-gradient">{{ $rata }}</dd>
                </div>
            </dl>
        </section>

        <section class="mt-6">
            <p class="text-xs uppercase tracking-wider text-[#7b7c7e] mb-3">Coba kombinasi lain</p>
            <div class="flex flex-wrap gap-2 text-sm">
                @foreach ([['3.5','3.8'], ['3.2','3.9'], ['2.8','3.6'], ['4.0','4.0']] as [$a, $b])
                    <a href="{{ route('dashboard.hitung-ipk', ['ip1' => $a, 'ip2' => $b]) }}"
                       class="px-3 py-1.5 rounded-md border border-[#353535]/60 bg-[#252525]/60
                              text-[#7b7c7e] hover:text-[#f2f4f8] hover:border-[#78a9ff]/50 transition">
                        {{ $a }} + {{ $b }}
                    </a>
                @endforeach
            </div>
        </section>

        <section class="mt-10 rounded-xl border border-[#353535]/60 bg-[#1e1e1e]/60 p-6">
            <p class="text-xs uppercase tracking-wider text-[#7b7c7e] mb-4">
                Kalkulator cepat (lokal)
            </p>

            <div class="grid grid-cols-2 gap-4">
                <label class="block">
                    <span class="text-sm text-[#7b7c7e]">IP 1</span>
                    <input id="live-ip1" type="number" step="0.01" min="0" max="4"
                           class="mt-1 w-full rounded-md bg-[#161616] border border-[#353535]/60 px-3 py-2
                                  text-[#f2f4f8] focus:outline-none focus:border-[#78a9ff]">
                </label>
                <label class="block">
                    <span class="text-sm text-[#7b7c7e]">IP 2</span>
                    <input id="live-ip2" type="number" step="0.01" min="0" max="4"
                           class="mt-1 w-full rounded-md bg-[#161616] border border-[#353535]/60 px-3 py-2
                                  text-[#f2f4f8] focus:outline-none focus:border-[#78a9ff]">
                </label>
            </div>

            <div class="mt-4 text-sm">
                <span class="text-[#7b7c7e]">Rata-rata:</span>
                <span id="live-result" class="ml-2 text-lg font-semibold text-[#78a9ff]">&mdash;</span>
            </div>
        </section>

    </div>
@endsection

@push('scripts')
<script>
    const ip1El = document.getElementById('live-ip1');
    const ip2El = document.getElementById('live-ip2');
    const outEl = document.getElementById('live-result');
    let current = null;
    
    function animateNumber(el, to) {
        const from = current ?? 0;
        const start = performance.now();
        const dur = 400;
        function step(now) {
            const t = Math.min((now - start) / dur, 1);
            const eased = 1 - Math.pow(1 - t, 3);
            const val = from + (to - from) * eased;
            el.textContent = val.toFixed(2);
            if (t < 1) requestAnimationFrame(step);
            else current = to;
        }
        requestAnimationFrame(step);
    }
    
    function recalc() {
        const a = parseFloat(ip1El.value);
        const b = parseFloat(ip2El.value);
        if (isNaN(a) || isNaN(b)) { outEl.textContent = '—'; current = null; return; }
        animateNumber(outEl, (a + b) / 2);
    }
    
    ip1El.addEventListener('input', recalc);
    ip2El.addEventListener('input', recalc);
</script>
@endpush