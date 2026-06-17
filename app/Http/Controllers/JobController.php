<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\View\View;
use App\Models\Job;
use Symfony\Component\HttpFoundation\RedirectResponse;

class JobController extends Controller
{
    public function index(): View
    {
        //all es un metodo de eloquent
        $jobs = Job::all();

        return view('jobs.index')->with('jobs', $jobs);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(): View
    {
        return view('jobs.create');
    }

    public function store(Request $request): RedirectResponse
    {
        //dd($request->file('company_logo'));
        $validateData = $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'required|string',
            'salary' => 'required|integer',
            'tags' => 'nullable|string',
            'job_type' => 'required|string',
            'remote' => 'required|boolean',
            'requirements' => 'nullable|string',
            'benefits' => 'nullable|string',
            'address' => 'nullable|string',
            'city' => 'nullable|string',
            'state' => 'nullable|string',
            'zip_code' => 'nullable|string',
            'contact_email' => 'required|email',
            'contact_phone' => 'nullable|string',
            'company_name' => 'nullable|string',
            'company_description' => 'nullable|string',
            'company_logo' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
            'company_website' => 'nullable|url',

        ]);

        $validateData['user_id'] = 1; // Asignar un valor fijo para user_id

        // Manejar la carga del logo de la empresa
        if ($request->hasFile('company_logo')) {
            $logoPath = $request->file('company_logo')->store('logos', 'public');
            $validateData['company_logo'] = $logoPath;
        }

        Job::create($validateData);

        return redirect()->route('jobs.index')->with('success', 'Job created successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show(Job $job)
    {
        return view('jobs.show')->with('job', $job);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id): String
    {
        return 'Edit';
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id): String
    {
        return 'Update';
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id): String
    {
        return 'Destroy';
    }
}
