<?php

namespace App\Http\Controllers;

use App\Models\Promotion;
use Illuminate\Http\Request;

class PromotionController extends Controller
{
    protected function index()
    {
        $promotions = Promotion::all();

        return view('promotion.index', [
            'promotions' => $promotions
        ]);
    }

    protected function create()
    {
        return view('promotion.create');
    }

    protected function store(Request $request)
    {
        $request->validate([
            'title' => ['required', 'string']
        ]);

        Promotion::create([
            'title' => $request->get('title')
        ]);

        return redirect()
            ->route('promotion.index')
            ->with('success', 'Promotion créée avec succès');
    }

    protected function edit(Promotion $promotion)
    {
        return view('promotion.edit', [
            'promotion' => $promotion
        ]);
    }

    protected function update(Request $request, Promotion $promotion)
    {
        $promotion->update($request->input());

        return redirect()
            ->route('promotion.index')
            ->with('success', 'La promotion a été mise à jour avec succès');
    }

    protected function delete(Promotion $promotion)
    {
        $promotion->delete();

        return back()
            ->with('success', 'Promotion supprimée avec succès');
    }

    protected function search(Request $request)
    {
        $title = $request->input('title');

        $promotions = Promotion::where('title', 'LIKE', "%$title%")->get();
        
        return response()->json($promotions);
    }
}
