<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Person;
use App\Http\Requests\CreatePersonRequest;

class PersonController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('Person/index', ['people' => Person::all()]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('Person/create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(CreatePersonRequest $request)
    {
        $data = $request->all();
        try {
            $newPerson = Person::create($data);
            return redirect()->to('/person');
        } catch (\Throwable $th) {
            return back()->withErrors(['Fail' => 'Fail to create a new Person, error:' . $th->getMessage() ]);
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
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
