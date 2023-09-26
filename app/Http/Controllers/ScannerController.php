<?php

namespace App\Http\Controllers;

use App\Models\Scanner;
use Illuminate\Http\Request;

class ScannerController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('dashboard.scans.index',[
            'title'=> 'Absences'
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
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Scanner $scanner)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Scanner $scanner)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Scanner $scanner)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Scanner $scanner)
    {
        //
    }
}
