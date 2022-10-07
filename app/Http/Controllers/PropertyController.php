<?php

namespace App\Http\Controllers;

use App\Http\Requests\PropertiesUpdateRequest;
use App\Http\Requests\PropertiesStoreRequest;
use App\Models\Aminity;
use App\Models\Property;
use App\Models\Status;
use App\Models\Type;
use Illuminate\Http\Request;


class PropertyController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $properties = Property::all();
        return view('backend.properties.index', compact('properties'));
    }
    public function create()
    {
        $properties = Property::all();
        $aminites = Aminity::all();
        $statues = Status::all();
        $types = Type::all();
        return view('backend.properties.create', compact('properties', 'types', 'statues', 'aminites'));
    }
    public function store(PropertiesStoreRequest $request)
    {
        $property = Property::create($request->validated());
        $property->name = $request->name;
        $property->location = $request->location;
        $property->description = $request->description;
        $property->price = $request->price;
        $property->type_id = $request->type;
        $property->status_id = $request->status;

        $aminites = $request->input('aminities');
        $aminites = implode(',', $aminites);
        $property->amenities_id = $aminites;

        $property->area = $request->area;
        $property->bedroom = $request->bedroom;
        $property->bathroom = $request->bathroom;

        // Featured image
        $featued_image = $request->file('image');
        $featued_image_name = time() . '.' . $featued_image->getClientOriginalExtension();
        $featued_image->move(public_path('/image/properties/'), $featued_image_name);
        $property->image = $featued_image_name;

        // gallery
        $gallery_image = array();

        if ($gallery = $request->file('gallery')) {
            foreach ($gallery as $img) {
                $img_name = time() . rand(1, 100) . '.' . $img->getClientOriginalExtension();
                $img->move(public_path('image/properties/'), $img_name);
                $gallery_image[] = $img_name;
            }
        }

        $property->gallery = implode(',', $gallery_image);

        $property->save();

        return redirect()->route('properties')->with('message', 'Successfully Created');
    }

    public function edit($id)
    {
        $properties = Property::find($id);
        $aminites = Aminity::all();
        $statues = Status::all();
        $types = Type::all();
        return view('backend.properties.edit', compact('properties', 'types', 'statues', 'aminites'));
    }
    public function update(PropertiesUpdateRequest $request, $id)
    {
        $property = Property::find($id);
        $property->name = $request->name;
        $property->location = $request->location;
        $property->description = $request->description;
        $property->price = $request->price;
        $property->type_id = $request->type;
        $property->status_id = $request->status;

        $aminites = $request->input('aminities');
        $aminites = implode(',', $aminites);
        $property->amenities_id = $aminites;

        $property->area = $request->area;
        $property->bedroom = $request->bedroom;
        $property->bathroom = $request->bathroom;

        // Featured image
        if ($request->file('image')) {
            $current_img = $property->image;
            unlink(public_path('/image/properties/' . $current_img));
            $featued_image = $request->file('image');
            $featued_image_name = time() . '.' . $featued_image->getClientOriginalExtension();
            $featued_image->move(public_path('/image/properties/'), $featued_image_name);
            $property->image = $featued_image_name;
        }
        // gallery
        $gallery_image = array();

        if ($gallery = $request->file('gallery')) {
            foreach ($gallery as $img) {
                $img_name = time() . rand(1, 100) . '.' . $img->getClientOriginalExtension();
                $img->move(public_path('image/properties/'), $img_name);
                $gallery_image[] = $img_name;
            }
        }

        $property->gallery = implode(',', $gallery_image);

        $property->update();

        return redirect()->route('properties')->with('info', 'Successfully Updated');
    }
    public function delete($id)
    {
        $property = Property::find($id);
        $property->delete();
        return redirect()->route('properties')->with('error', 'Successfully Deleted');
    }
}
