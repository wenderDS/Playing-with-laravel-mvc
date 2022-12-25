<?php

namespace App\Http\Controllers;

use App\Models\Serie;
use Illuminate\Contracts\View\View;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;

class SeriesController extends Controller
{
    public function index(): View
    {
        $series = Serie::query()->orderBy('name')->get();

        return view('series.index')->with('series', $series);
    }

    public function create(): View
    {
        return view('series.create');
    }

    public function store(Request $request): RedirectResponse
    {
        Serie::create($request->all());

        return to_route('series.index');
    }

    public function destroy(Request $request): RedirectResponse
    {
        /** when using a selected method Route::{method}('series/destroy/{id}') */
        /** Serie::destroy($request->id); */
        /** when using Route::resource('/series') the param will use the same name of route */
        Serie::destroy($request->series);

        $request->session()->put('message.success', 'Series was removed with success');

        return to_route('series.index');
    }
}
