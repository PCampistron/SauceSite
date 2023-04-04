<?php

namespace App\Http\Controllers;

use App\Models\Sauce;
use Illuminate\Http\Request;

class SauceController extends Controller
{
    public function index()
    {
        $sauces = Sauce::all();
        return view('sauces', compact('sauces'));
    }

    public function show($id)
    {
        $sauce = Sauce::find($id);
        return view('sauce', compact('sauce'));
    }

    public function destroy($id)
    {
        if (request()->isMethod('delete')) {
            $sauce = Sauce::find($id);
            $sauce->delete();
            return redirect()->route('sauces.index')->with('success', 'La sauce a été supprimée avec succès !');
        } else {
            abort(405);
        }
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'name' => 'required',
            'description' => 'required',
        ]);

        $sauce = new Sauce();
        $sauce->name = $validatedData['name'];
        $sauce->description = $validatedData['description'];
        $sauce->save();

        return redirect()->route('sauces.index')->with('success', 'La sauce a été créée avec succès !');
    }
}
