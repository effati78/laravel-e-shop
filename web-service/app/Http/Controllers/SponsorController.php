<?php

namespace App\Http\Controllers;

use App\Models\Sponsor;
use Illuminate\Http\Request;

class SponsorController extends Controller
{
    public function index()
    {
        $sponsor = Sponsor::all();
        return response()->json(["status" => 200, "success" => true, "sponsors" => $sponsor], 200);
    }

    public function add_sponsor(Request $request)
    {
        $sponsor = new Sponsor();
        $sponsor->name = $request->name;
        $sponsor->url = $request->url;
        $sponsor->img = $request->img;
        $sponsor->save();

        return response()->json(["status" => 201, "success" => true, "message" => "Adding Sponsor Done"], 201);
    }

    public function delete_sponsor($id)
    {
        $sponsor = Sponsor::where('id', $id)->first();
        $sponsor->delete();

        return response()->json(["status" => 202, "success" => true, "message" => "Deleting Sponsor Done"], 202);
    }

    public function edit_sponsor(Request $request, $id)
    {
        $sponsor = Sponsor::findORFail($id);
        $sponsor->name = $request->name;
        $sponsor->url = $request->url;
        $sponsor->img = $request->img;
        $sponsor->save();

        return response()->json(["status" => 200, "success" => true, "message" => "Editing Sponsor Done"], 200);
    }
}
