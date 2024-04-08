<?php

namespace App\Http\Controllers;

use App\Models\Personal;
use App\Http\Requests\PersonalRequest;

/**
 * Class PersonalController
 * @package App\Http\Controllers
 */
class PersonalController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $personals = Personal::paginate();

        return view('personal.index', compact('personals'))
            ->with('i', (request()->input('page', 1) - 1) * $personals->perPage());
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $personal = new Personal();
        return view('personal.create', compact('personal'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(PersonalRequest $request)
    {
        Personal::create($request->validated());

        return redirect()->route('personals.index')
            ->with('success', 'Personal created successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $personal = Personal::find($id);

        return view('personal.show', compact('personal'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $personal = Personal::find($id);

        return view('personal.edit', compact('personal'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(PersonalRequest $request, Personal $personal)
    {
        $personal->update($request->validated());

        return redirect()->route('personals.index')
            ->with('success', 'Personal updated successfully');
    }

    public function destroy($id)
    {
        Personal::find($id)->delete();

        return redirect()->route('personals.index')
            ->with('success', 'Personal deleted successfully');
    }
}
