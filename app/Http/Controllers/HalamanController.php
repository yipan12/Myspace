<?php

namespace App\Http\Controllers;

use App\Models\Halaman;
use Illuminate\Http\Request;

class HalamanController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view("pages.Index", [
            'title' => 'Utama'
        ]);
    }


    public function Hobi()
    {
        return view('pages.hobi', [
        'title' => 'Hobi'
        ]);
    }

    public function Contact()
    {
        return view('pages.contact', [
            'title' => 'Contact'
        ]);
    }

    public function Gallery()
    {
        return view('pages.gallery', [
            'title' => 'Gallery'
        ]);
    }

    public function Blog()
    {
        return view('pages.blog', [
            'title' => 'Blog'
        ]);
    }







    
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
    public function show(Halaman $halaman)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Halaman $halaman)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Halaman $halaman)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Halaman $halaman)
    {
        //
    }
}
