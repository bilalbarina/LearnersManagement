<?php

namespace App\Http\Controllers;

use App\Models\Promotion;
use Illuminate\Http\Request;

class PromotionController extends Controller
{
    protected function index()
    {
        $promotions = Promotion::all();

        return view('promotions', [
            'promotions' => $promotions
        ]);
    }

    protected function store(Request $request)
    {
        $request->validate([
            'title' => ['required', 'string']
        ]);

        Promotion::create([
            'title' => $request->get('title')
        ]);

        return back()
            ->with('success', 'Promotion créée avec succès');
    }
}
