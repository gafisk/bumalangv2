<?php

namespace App\Helpers;

use Illuminate\Support\Facades\Route;

class Breadcrumbs
{
    public static function generate()
    {
        $segments = request()->segments();
        $breadcrumbs = [];
        $url = url('/');

        foreach ($segments as $segment) {
            $url .= '/' . $segment;
            $breadcrumbs[] = [
                'name' => ucwords(str_replace('-', ' ', $segment)), // Ubah slug jadi teks biasa
                'url' => $url
            ];
        }

        return $breadcrumbs;
    }
}
