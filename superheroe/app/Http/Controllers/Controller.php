<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;

class Controller extends \Illuminate\Routing\Controller
{
    /**
     * Display a listing of the superheroes.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $superheroes = Superheroe::all();
        return view('superheroes.index', compact('superheroes'));
    }

    /**
     * Show the form for creating a new superhero.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('superheroes.create');
    }
    public function home()
    {
        return view('superheroes.home');
    }
    public function about()
    {
        return view('about');
    }
    /**
     * Store a newly created superhero in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
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

    /**
     * Display the specified superhero.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $superheroe = Superheroe::findOrFail($id);
        return view('superheroes.show', compact('superheroe'));
    }

    /**
     * Show the form for editing the specified superhero.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $superheroe = Superheroe::findOrFail($id);
        return view('superheroes.edit', compact('superheroe'));
    }

    /**
     * Update the specified superhero in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
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

    /**
     * Remove the specified superhero from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $superheroe = Superheroe::findOrFail($id);
        $superheroe->delete();

        return back()->with('success', 'Superhero deleted successfully!');
    }
}