<?php

namespace App\Http\Controllers;

use App\Models\Superheroe; 
use Illuminate\Http\Request; 

class SuperheroController extends Controller

{

    public function index()
    {
        $superheroes = Superheroe::all();
        return view('index', compact('superheroes'));
    }


    public function create()
    {
        return view('create');
    }


    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'real_name' => 'required|max:255',
            'hero_name' => 'required|max:255',
            'photo_url' => 'required|url',
            'additional_info' => 'nullable|max:1000',
        ]);

        Superheroe::create($validatedData);
        return redirect('/superheroes')->with('success', 'Superhero added successfully!');
    }


    public function show($id)
    {
        $superheroe = Superheroe::findOrFail($id);
        return view('show', compact('superheroe'));
    }

    public function edit($id)
    {
        $superheroe = Superheroe::findOrFail($id);
        return view('edit', compact('superheroe'));
    }

    public function update(Request $request, $id)
    {
        $validatedData = $request->validate([
            'real_name' => 'required|max:255',
            'hero_name' => 'required|max:255',
            'photo_url' => 'required|url',
            'additional_info' => 'nullable|max:1000',
        ]);

        Superheroe::whereId($id)->update($validatedData);
        return redirect('/superheroes')->with('success', 'Superhero updated successfully!');
    }


    public function destroy($id)
    {
        $superheroe = Superheroe::findOrFail($id);
        $superheroe->delete();

        return back()->with('success', 'Superhero deleted successfully!');
    }
}
