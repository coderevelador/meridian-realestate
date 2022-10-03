<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\Models\Property;
use App\Models\PropertyContact;
use DB;
use Illuminate\Support\Facades\Route;

class WebsiteController extends Controller
{
    public function index()
    {
        $properties = Property::all();
        return view('frontend.home', compact('properties'));
    }

    public function AllProperties()
    {
        $allproperties = Property::all();
        return view('frontend.allproperties', compact('allproperties'));
    }
    public function Property($id)
    {
        $propertiesSingle = Property::find($id);
        foreach (explode(',', $propertiesSingle->amenities_id) as $b) {

            $ami[] = DB::table('aminities')->where('id', $b)->first();
        }

        $amil = $ami;

        return view('frontend.property', compact('propertiesSingle', 'amil'));
    }

    public function PropertyContact(Request $request)
    {
        $request->validate = [
            'name' => 'required',
            'phone' => 'required',
            'email' => 'required',
            'comment' => 'required',
        ];
        $contact = PropertyContact::create();
        $contact['name'] = $request->name;
        $contact['phone'] = $request->phone;
        $contact['email'] = $request->email;
        $contact['comment'] = $request->comment;
        $contact->save();
        $route = Route::current();
        return redirect()->back()->with('message', 'Successfully Sent Your Query');
        
    }
}
