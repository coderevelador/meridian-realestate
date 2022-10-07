<?php

namespace App\Http\Controllers;

use App\Http\Requests\PropertyStatusStoreRequest;
use App\Models\Status;
use Illuminate\Http\Request;

class PropertyStatusController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $status = Status::all();
        return view('backend.property_status.index', compact('status'));
    }
    public function create()
    {
        return view('backend.property_status.create');
    }
    public function store(PropertyStatusStoreRequest $request)
    {
        Status::create($request->validated());
        return redirect()->route('property-status')->with('message', 'Successfully Added');
    }
    public function edit($id)
    {
        $status = Status::find($id);
        return view('backend.property_status.edit', compact('status', 'id'));
    }
    public function update(Request $request, $id)
    {
        $request->validate(['name' => 'required']);
        $status = Status::find($id);
        $status->name = $request->name;
        $status->update();
        return redirect()->route('property-status')->with('info', 'Successfully Updated');
    }

    public function delete($id)
    {
        $status = Status::find($id);
        $status->delete();
        return redirect()->route('property-status')->with('error', 'Successfully Deleted');
    }
}
