<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;

class PageController extends Controller
{
    public function welcome() {
        return view('pages.welcome');
    }

    public function mahasiswaIndex() {
        return view('pages.dashboard.mahasiswa');
    }

    public function mahasiswa($nrp) {
        $view = "pages.dashboard.mahasiswa.{$nrp}";
        if (!view()->exists($view)) {
            $view = 'pages.dashboard.mahasiswa';
        }
        return view($view, ['nrp' => $nrp]);
    }

    public function dashboard() {
        return view('pages.dashboard.index');
    }

    public function hitungIpk($ip1, $ip2) {
        $total = $ip1 + $ip2;
        $rata  = $total / 2;
        return view('pages.dashboard.hitung-ipk', compact('ip1', 'ip2', 'total', 'rata'));
    }

    public function agent($tema = null) {
        $isFallback = $tema === null;
        $tema       = $tema ?? 'General Assistant Agent';
    
        return view('pages.agent', [
            'tema'       => $tema,
            'isFallback' => $isFallback,
        ]);
    }

}
