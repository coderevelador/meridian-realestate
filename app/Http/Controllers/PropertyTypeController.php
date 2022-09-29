<?php

namespace App\Http\Controllers;

use App\Http\Requests\PropertyStoreRequest;
use App\Models\Type;
use Illuminate\Http\Request;

class PropertyTypeController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $types = Type::all();
        return view('backend.property_type.index', compact('types'));
    }

    public function create()
    {
        return view('backend.property_type.create');
    }
    public function store(PropertyStoreRequest $request)
    {
        Type::create($request->validated());
        return redirect()->route('property-type')->with('message', 'Successfully Added');
    }
    public function edit($id)
    {
        $types = Type::find($id);
        return view('backend.property_type.edit', compact('types', 'id'));
    }
    public function update(Request $request, $id)
    {
        $request->validate(['name' => 'required']);
        $type = Type::find($id);
        $type->name = $request->name;
        $type->update();
        return redirect()->route('property-type')->with('message', 'Successfully Updated');
    }

    public function delete($id)
    {
        $type = Type::find($id);
        $type->delete();
        return redirect()->route('property-type')->with('message', 'Successfully Deleted');
    }
}
