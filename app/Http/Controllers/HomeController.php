<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\View;

class HomeController extends Controller
{
    public function index()
    {
        $url = "http://127.0.0.1:8001/api/menu-layanan/menu";
        try {
            $response = Http::post($url, [
                // 'nik' => menunggu api
                'nama_layanan' => 'Pendidikan'
            ]);

            if ($response->successful()) {
                $menuLayanan = $response->json();
                $namaLayanan = 'Pendidikan';

                return view('pages.home', compact('menuLayanan', 'namaLayanan'));
            }
        } catch (\Exception $e) {
            return response()->json(['error' => 'API request failed: ' . $e->getMessage()], 500);
        }
    }

    public function menuKategeori($menu)
    {
        $url = "http://127.0.0.1:8001/api/menu-layanan/menu";
        try {
            $response = Http::post($url, [
                // 'nik' => menunggu api
                'nama_layanan' => $menu
            ]);

            if ($response->successful()) {
                $menuLayanan = $response->json();
                $namaLayanan = $menu;

                return view('pages.home', compact('menuLayanan', 'namaLayanan'));
            }
        } catch (\Exception $e) {
            return response()->json(['error' => 'API request failed: ' . $e->getMessage()], 500);
        }
    }
}
