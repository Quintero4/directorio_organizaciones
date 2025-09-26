<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Organization;

class OrganizationController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $organizations = Organization::all();
        return view('organizations.index', compact('organizations'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('organizations.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'name' => 'required|string|max:255',
            'description' => 'nullable|string',
            'url' => 'nullable|url',
            'email' => 'nullable|email',
        ]);

        $organization = new Organization;
        $organization->name = $validatedData['name'];
        $organization->description = $validatedData['description'];
        $organization->url = $validatedData['url'];
        $organization->email = $validatedData['email'];
        $organization->save();

        return redirect()->route('organizations.index');
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $organization = Organization::find($id);

        if (!$organization) {
            abort(404);
        }

        return view('organizations.show', compact('organization'));
    }
    
    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $organization = Organization::findOrFail($id);
        return view('organizations.edit', compact('organization'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $validatedData = $request->validate([
            'name' => 'required|string|max:255',
            'description' => 'nullable|string',
            'url' => 'nullable|url',
            'email' => 'nullable|email',
        ]);
        
        $organization = Organization::findOrFail($id);
        $organization->update($validatedData);

        return redirect()->route('organizations.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $organization = Organization::findOrFail($id);
        $organization->delete();

        return redirect()->route('organizations.index');
    }
}