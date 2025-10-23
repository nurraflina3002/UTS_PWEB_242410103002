<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function login() {
        return view('login');
    }

    public function doLogin(Request $request) {
        $username = $request->input('username');
        $request->session()->put('username', $username);
        return redirect()->route('dashboard');
    }


    public function dashboard(Request $request) {
        $username = $request->session()->get('username');
        return view('dashboard', compact('username'));
    }


    public function pengelolaan() {
        $books = [
            [
                'judul' => 'Laskar Pelangi',
                'penulis' => 'Andrea Hirata',
                'harga' => 75000,
                'gambar' => asset('images/LaskarPelangi.jpeg')
            ],
            [
                'judul' => 'Bumi Manusia',
                'penulis' => 'Pramoedya A. Toer',
                'harga' => 88000,
                'gambar' => asset('images/BumiManusia.jpeg')
            ],
            [
                'judul' => 'Filosofi Teras',
                'penulis' => 'Henry Manampiring',
                'harga' => 67000,
                'gambar' => asset('images/FilosofiTeras.jpeg')
            ],
            [
                'judul' => 'Negeri 5 Menara',
                'penulis' => 'Ahmad Fuadi',
                'harga' => 72000,
                'gambar' => asset('images/Negeri5Menara.jpeg')
            ],
        ];

        return view('pengelolaan', compact('books'));
    }



    public function profile(Request $request) {
        $username = $request->session()->get('username');
        return view('profile', compact('username'));
    }
}
