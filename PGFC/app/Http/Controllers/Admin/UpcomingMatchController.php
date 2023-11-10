<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\UpcomingMatchRequest;
use App\Models\UpcomingMatch;
use Illuminate\Http\Request;
// use Illuminate\Support\Str;

class UpcomingMatchController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $items = UpcomingMatch::all();

        return view('pages.admin.upcoming-match.index', [
            'items' => $items
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('pages.admin.upcoming-match.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(UpcomingMatchRequest $request)
    {
        $data = $request->all();
        $data['home_team_logo'] = $request->file('home_team_logo')->store(
            'admin/upcoming_match/home_team_logo',
            'public'
        );
        $data['away_team_logo'] = $request->file('away_team_logo')->store(
            'admin/upcoming_match/away_team_logo',
            'public'
        );

        UpcomingMatch::create($data);

        return redirect()->route('upcoming-match.index')->with('success', 'Upcoming Match successfully created');
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
        $item = UpcomingMatch::findOrFail($id);

        return view('pages.admin.upcoming-match.edit', [
            'item' => $item
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpcomingMatchRequest $request, string $id)
    {
        $data = $request->all();
        $data['home_team_logo'] = $request->file('home_team_logo')->store(
            'admin/upcoming_match/home_team_logo',
            'public'
        );
        $data['away_team_logo'] = $request->file('away_team_logo')->store(
            'admin/upcoming_match/away_team_logo',
            'public'
        );

        $item = UpcomingMatch::findOrFail($id);
        $item->update($data);

        return redirect()->route('upcoming-match.index')->with('success', 'Upcoming Match successfully updated');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $item = UpcomingMatch::findOrFail($id);
        $item->delete();

        return redirect()->route('upcoming-match.index')->with('success', 'Upcoming Match successfully deleted');
    }
}
