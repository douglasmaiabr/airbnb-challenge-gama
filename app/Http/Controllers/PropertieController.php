<?php

namespace App\Http\Controllers;

use App\Propertie;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class PropertieController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    public function getProperties()
    {
        return response()->json(Propertie::all());
    }
    public function getPropertie($id)
    {
        return response()->json(Propertie::find($id));
    }

    public function create(Request $request)
    {
        $propertie = Propertie::create($request->all());

        return response()->json($propertie, 201);
    }

    public function update($id, Request $request)
    {
        $propertie = Propertie::findOrFail($id);
        $propertie->update($request->all());

        return response()->json($propertie, 200);
    }

    public function delete($id)
    {
        Propertie::findOrFail($id)->delete();
        return response('Deleted Successfully', 200);
    }
}
