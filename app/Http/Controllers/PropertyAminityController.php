<?php

namespace App\Http\Controllers;

use App\Http\Requests\PropertyAminityStoreRequest;
use App\Models\Aminity;
use Illuminate\Http\Request;

class PropertyAminityController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $aminity = Aminity::all();
        return view('backend.property_aminity.index', compact('aminity'));
    }
    public function create()
    {
        return view('backend.property_aminity.create');
    }
    public function store(PropertyAminityStoreRequest $request)
    {
        Aminity::create($request->validated());
        return redirect()->route('property-aminity')->with('message', 'Successfully Added');
    }
    public function edit($id)
    {
        $aminity = Aminity::find($id);
        return view('backend.property_aminity.edit', compact('aminity', 'id'));
    }
    public function update(Request $request, $id)
    {
        $request->validate(['name' => 'required']);
        $aminity = Aminity::find($id);
        $aminity->name = $request->name;
        $aminity->update();
        return redirect()->route('property-aminity')->with('info', 'Successfully Updated');
    }

    public function delete($id)
    {
        $aminity = Aminity::find($id);
        $aminity->delete();
        return redirect()->route('property-aminity')->with('error', 'Successfully Deleted');
    }
}
