<?php

namespace App\Providers;

use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\View;
use Illuminate\Support\ServiceProvider;

class ViewServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap services.
     */
    public function boot(): void
    {
        $url = "http://127.0.0.1:8001/api/menu-layanan/kategori";
        $url2 = "http://127.0.0.1:8001/api/menu-layanan/menu/terbanyak";

        try {
            $response = Http::get($url);

            if ($response->successful()) {
                $statusCode = $response->status();
                $data = $response->json();
            }
            $isError = 0;

            $responseMenuTerbanyak = Http::post($url2, [
                // 'nik' => 
            ]);

            if ($responseMenuTerbanyak->successful()) {
                $dataTerbanyak = $responseMenuTerbanyak->json();
            }

            View::composer('*', function ($view) use ($data, $statusCode, $isError, $dataTerbanyak) {
                $view->with('statusCode', $statusCode);
                $view->with('data', $data);
                $view->with('dataTerbanyak', $dataTerbanyak);
                $view->with('isError', $isError);
            });
        } catch (\Exception $e) {
            $data =  $e->getMessage();
            $isError = 1;
            $statusCode = 500;

            View::composer('*', function ($view) use ($data, $statusCode, $isError) {
                $view->with('statusCode', $statusCode);
                $view->with('data', $data);
                $view->with('isError', $isError);
            });
        }
    }
}
