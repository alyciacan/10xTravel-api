<?php

namespace App\Http\Controllers;

use App\Models\Program;
use Illuminate\Http\Request;
use Illuminate\Pagination\Paginator;


class ProgramController extends Controller
{
    /**
     * Display all program names and ids
     */
    public function index()
    {
        $programs = Program::paginate(25);

        return response()->json($programs, 200);

    }

    // Display only unique program names and ids

    public function showOptions()
    {
        $programOptions = Program::select('name', 'id')->distinct()->get();

        $sorted = $programOptions->sortBy('name');

        return response()->json($sorted);

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
    public function show(Program $program)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Program $program)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Program $program)
    {
        //
    }
}
