<?php

namespace App\Http\Controllers;

use App\Models\Mapel;
use \Cviebrock\EloquentSluggable\Services\SlugService;
use Illuminate\Http\Request;

class MapelContoller extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('dashboard.mapels.index', [
            'title' => 'Mata Pelajaran',
            'mapels' => Mapel::latest()->get()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validate = $request->validate([
            'mapel' => 'unique:mapels',
            'slug' => 'unique:mapels'
        ]);

        Mapel::create($validate);
        return redirect('/dashboard/mapels')->with('success', 'New lesson has been created');
    }

    /**
     * Display the specified resource.
     */
    public function show(Mapel $mapel)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Mapel $mapel)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Mapel $mapel)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Mapel $mapel)
    {
        //
    }


    public function checkSlug(Request $request)
    {
        $slug = SlugService::createSlug(Mapel::class, 'slug', $request->mapel);
        return response()->json(['slug' => $slug]);
    }
}
