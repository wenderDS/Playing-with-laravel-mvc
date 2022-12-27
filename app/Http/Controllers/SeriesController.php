<?php

namespace App\Http\Controllers;

use App\Http\Requests\SeriesFormRequest;
use App\Models\Serie;
use Illuminate\Contracts\View\View;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;

class SeriesController extends Controller
{
    public function index(Request $request): View
    {
        $series = Serie::query()->orderBy('name')->get();
        $successMessage = session('message.success');

        return view('series.index')
            ->with('series', $series)
            ->with('successMessage', $successMessage)
        ;
    }

    public function create(): View
    {
        return view('series.create');
    }

    public function edit(Serie $series)
    {
        return view('series.edit')
            ->with('series', $series)
        ;
    }

    public function store(SeriesFormRequest $request): RedirectResponse
    {
        $series = Serie::create($request->all());

        return to_route('series.index')
            ->with('message.success', "Series '{$series->name}' was added with success!")
        ;
    }

    public function update(Serie $series, SeriesFormRequest $request)
    {
        $oldName = $series->name;
        $newName = $request->post('name');

        $series->fill($request->all());
        $series->save();

        return to_route('series.index')
            ->with('message.success', "Series '{$oldName}' was modified to '{$newName}' with success!")
        ;
    }

    public function destroy(Serie $series): RedirectResponse
    {
        /** when using a selected method Route::{method}('series/destroy/{id}') */
        /** Serie::destroy($request->id); */
        /** when using Route::resource('/series') the param will use the same name of route */
        $series->delete();

        // $request->session()->flash('message.success', "Series '{$series->name}' was removed with success!");

        return to_route('series.index')
            ->with('message.success', "Series '{$series->name}' was removed with success!")
        ;
    }
}
