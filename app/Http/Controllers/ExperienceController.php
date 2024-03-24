<?php

namespace App\Http\Controllers;

use App\Models\Experience;
use Illuminate\Http\Request;

class ExperienceController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $experiences = Experience::latest()->paginate(5);

        return view('experiences.index', compact('experiences'))
            ->with('i', (request()->input('page', 1) - 1) * 5);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('experiences.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'position' => 'required',
            'company' => 'nullable',
            'company_url' => 'nullable',
            'description' => 'nullable',
            'dates' => 'nullable',
        ]);

        $input = $request->all();

        Experience::create($input);

        return redirect()->route('experiences.index')
            ->with('success', 'About me created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Experience  $experience
     * @return \Illuminate\Http\Response
     */
    public function show(Experience $experience)
    {
        return view('experiences.show', compact('experience'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Experience  $experience
     * @return \Illuminate\Http\Response
     */
    public function edit(Experience $experience)
    {
        return view('experiences.edit', compact('experience'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Experience  $experience
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Experience $experience)
    {
        $request->validate([
            'position' => 'required',
            'company' => 'nullable',
            'company_url' => 'nullable',
            'description' => 'nullable',
            'dates' => 'nullable',
        ]);

        $input = $request->all();

        $experience->update($input);

        return redirect()->route('experiences.index')
            ->with('success', 'Page updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Experience  $experiences
     * @return \Illuminate\Http\Response
     */
    public function destroy(Experience $experiences)
    {
        $experiences->delete();

        return redirect()->route('experiences.index')
            ->with('success', 'Page deleted successfully');
    }

    public function getExperiences()
    {
        $experiences = Experience::orderBy('created_at', 'DESC')->get();

        return $experiences;
    }
}
