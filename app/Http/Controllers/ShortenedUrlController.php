<?php

namespace App\Http\Controllers;

use App\Models\ShortenedUrl;
use App\Http\Requests\StoreShortenedUrlRequest;
use App\Http\Requests\UpdateShortenedUrlRequest;

class ShortenedUrlController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
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
    public function store(StoreShortenedUrlRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(ShortenedUrl $shortenedUrl)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(ShortenedUrl $shortenedUrl)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateShortenedUrlRequest $request, ShortenedUrl $shortenedUrl)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(ShortenedUrl $shortenedUrl)
    {
        //
    }
}
