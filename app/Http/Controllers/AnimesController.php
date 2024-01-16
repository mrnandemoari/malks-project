<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class AnimesController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $topAllAnimesGet = Http::withHeader(config('services.mal.app'), config('services.mal.key'))
            ->get(config('services.mal.url')."/anime/top/all")
            ->json();
        $topAiringAnimesGet = Http::withHeader(config('services.mal.app'), config('services.mal.key'))
            ->get(config('services.mal.url')."/anime/top/airing")
            ->json();
        $topAllAnimes = array_slice($topAllAnimesGet, 0, 20);
        $topAiringAnimes = array_slice($topAiringAnimesGet, 0, 30);

        dump($topAllAnimes);

        return view('index', [
            'topAllAnimes' => $topAllAnimes,
            'topAiringAnimes' => $topAiringAnimes,
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
    public function show(string $id)
    {
        $anime = Http::withHeader(config('services.mal.app'), config('services.mal.key'))
            ->get(config('services.mal.url').'/anime/'.$id)
            ->json();

        dump($anime);

        return view('show', [
            'anime' => $anime
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
