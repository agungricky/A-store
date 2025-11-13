<?php

namespace App\Providers;

use App\Models\Riwayat;
use App\Models\storage;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\View;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        View::composer('*', function ($view) {
            $listStorage = Storage::with('icon', 'user')->get()->map(function ($item) {
                $item->icon->lokasi = $item->icon->lokasi
                    ? asset($item->icon->lokasi)
                    : asset('assets/media/svg/brand-logos/default.svg');
                return $item;
            });

            if (Auth::check()) {
                $dataLogin = Auth::user();

                if ($dataLogin->role == "admin") {
                    $riwayat = Riwayat::with('barang.storage', 'user', 'storage')->get();
                } else {
                    $riwayat = Riwayat::with('barang.storage', 'user' , 'storage')
                        ->where('user_id', $dataLogin->id)
                        ->get();
                }
            } else {
                $dataLogin = null;
                $riwayat = collect();
            }

            $view->with(compact('listStorage', 'dataLogin', 'riwayat'));
        });
    }
}
