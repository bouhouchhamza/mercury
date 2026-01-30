<?php

namespace App\Http\Controllers;

use App\Models\Group;
use App\Models\Contact;

use Illuminate\Http\Request;

class ContactController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $groups = Group::all();


    $contacts = Contact::with('group')
        ->when($request->search, function ($q) use ($request) {
            $q->where('name', 'like', '%' . $request->search . '%');
        })
        ->when($request->group_id, function ($q) use ($request) {
            $q->where('group_id', $request->group_id);
        })
        ->get();

    return view('contacts.index', compact('contacts', 'groups'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $groups = Group::all();
        return view('contacts.create', compact('groups'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'nullable|email'
        ]);
        Contact::create($request->all());

        return redirect()->route('contacts.index')->with('success', 'Contact ajouté');
    }
    /**
     * Display the specified resource.
     */
    public function show(int $id)
    {
        return redirect()->route('groups.index');
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Contact $contact)
    {
        $groups = Group::All();
        return view('contacts.edit', compact('contact', 'groups'));;
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Contact $contact)
    {
        $contact->update($request->all());

        return redirect()->route('contacts.index')->with('success', 'contact modifié');
    }
    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Contact $contact)
    {
        $contact->delete();
        return redirect()->route('contacts.index')->with('success', 'contact suprimé');
    }
}
