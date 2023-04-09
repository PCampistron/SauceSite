<?php

namespace App\Http\Controllers;

use App\Models\Sauce;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class SauceController extends Controller
{
    public function index()
    {
        $sauces = Sauce::all();
        return view('sauces', compact('sauces'));
    }

    public function insert()
    {
        return view('insert');
    }

    public function modif()
    {
        return view('edit');
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
            return redirect()->route('sauces')->with('success', 'La sauce a été supprimée avec succès !');
        } else {
            abort(405);
        }
    }

    public function store(Request $request)
    {
        $userId = Auth::id();
        $nameInput = $request->input('name');
        $descriptionInput = $request->input('description');
        $manufacturerInput = $request->input('manufacturer');
        $mainPepperInput = $request->input('mainPepper');
        $heatInput = $request->input('heatValue');
        
        if($request->hasFile('image')!=null)
        {
            $file = $request->file('image');
            $imageUrl = time() . '.' .  $file->getClientOriginalExtension();
            $file->storeAs('/img' , $imageUrl);
        }
        else
        {
            $imageUrl = "sauceTabasco.jpg";
        }

        $sauce = new Sauce();

        $sauce->userId = $userId;
        $sauce->name = $nameInput;
        $sauce->description = $descriptionInput;
        $sauce->manufacturer = $manufacturerInput;
        $sauce->mainPepper = $mainPepperInput;
        $sauce->imageUrl = $imageUrl;
        $sauce->heat = $heatInput;
        $sauce->likes = 0;
        $sauce->dislikes = 0;
        $sauce->save();

        return redirect()->route('sauces')->with('success', 'La sauce a été créée avec succès !');
    }

    public function edit(Request $request, $id)
    {
        $userId = Auth::id();
        $nameInput = $request->input('name');
        $descriptionInput = $request->input('description');
        $manufacturerInput = $request->input('manufacturer');
        $mainPepperInput = $request->input('mainPepper');
        $heatInput = $request->input('heatValue');
        
        if($request->hasFile('image')!=null)
        {
            $file = $request->file('image');
            $imageUrl = time() . '.' .  $file->getClientOriginalExtension();
            $file->storeAs('/img' , $imageUrl);
        }
        else
        {
            $imageUrl = "sauceTabasco.jpg";
        }

        $sauce = Sauce::find($id);

        $sauce->userId = $userId;
        $sauce->name = $nameInput;
        $sauce->description = $descriptionInput;
        $sauce->manufacturer = $manufacturerInput;
        $sauce->mainPepper = $mainPepperInput;
        $sauce->imageUrl = $imageUrl;
        $sauce->heat = $heatInput;
        $sauce->likes = 0;
        $sauce->dislikes = 0;
        $sauce->update();

        return redirect()->route('sauces')->with('success', 'La sauce a été créée avec succès !');
    }
}
