<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;

class PageController extends Controller
{
    public function welcome() {
        return view('pages.welcome');
    }
    
    public function mahasiswa($nrp) {
        $view = "pages.mahasiswa.{$nrp}";
        if (!view()->exists($view)) {
            $view = 'pages.mahasiswa';
        }
        return view($view, ['nrp' => $nrp]);
    }

    public function dashboard() {
        return view('pages.dashboard');
    }

    public function hitungIpk($ipk1, $ipk2) {
        $total = $ipk1 + $ipk2;
        $rata  = $total / 2;
        return view('pages.hitung-ipk', compact('ipk1', 'ipk2', 'total', 'rata'));
    }

    public function agent($tema = null) {
        $tema = $tema ?? 'General Assistant Agent';
        return view('pages.agent', ['tema' => $tema]);
    }

}
