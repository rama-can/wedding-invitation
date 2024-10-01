<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Guest;
use Illuminate\Http\Request;

class InvitationController extends Controller
{
    public function index(string $slug)
    {
        $guest = Guest::where('slug', $slug)->first();

        if (!$guest) {
            abort(404);
        }

        $path      = asset('themes/images/');
        $number    = [1, 2, 3, 4, 5, 6];
        $gallery = [];
        foreach($number as $num) {
            $gallery[] = $path . '/' . $num . '.jpeg';
        }

        return view('pages.frontend.gold-black-silver', [
            'title' => 'Asep & Nuryanti',
            'guest' => $guest,
            'gallery' => $gallery,
        ]);
    }
}
