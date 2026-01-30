<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Group;
class GroupController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $groups = Group::All();
        return view('groups.index', compact('groups'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('groups.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate(['name'=>'required']);
        Group::create($request->all());

        return redirect()->route('groups.index')->with('success','groupe ajouté');
    }

    /**
     * Display the specified resource.
     */
    public function show(Group $group)
    {
        return redirect()->route('contacts.index');
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Group $group)
    {
        $Groups = Group::All();
        return view('groups.edit', compact('group'));
    }
    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Group $group)
    {
       
       $request->validate(['name'=>'required']);
       $group->update($request->all());

       return redirect()->route('groups.index')->with('success','groupe modifié');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Group $group)
    {
        $group->delete();

        return redirect()->route('groups.index')->with('success','group supprimé');
    }
}
