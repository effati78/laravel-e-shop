<?php

namespace App\Http\Controllers;

use App\Models\Sponsor;
use App\CustomClasses\FilesPatch;
use App\CustomClasses\RenameFile;
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

        $absolutePatch = storage_path('app/public');
        if (isset($request->img)) {
            $image = $request->file('img');
            $rename_image = new RenameFile($image);
            $new_name_image = FilesPatch::getPatch('shop', 'sponsors') . $rename_image->createNewFileName();

            $sponsor->img = $new_name_image;

            $image->move($absolutePatch . FilesPatch::getPatch('shop', 'sponsors'), $new_name_image);
        }
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
        $sponsor->update([
            'name' => $request->name,
            'url' => $request->url,
        ]);

        $absolutePatch = storage_path('app/public');
        if (isset($request->img)) {
            $image = $request->file('img');
            $rename_image = new RenameFile($image);
            $new_name_image = FilesPatch::getPatch('shop', 'sponsors') . $rename_image->createNewFileName();

            $sponsor->update([
                'img' => $new_name_image,
            ]);

            $image->move($absolutePatch . FilesPatch::getPatch('shop', 'sponsors'), $new_name_image);
        }
        $sponsor->save();

        return response()->json(["status" => 200, "success" => true, "message" => "Editing Sponsor Done"], 200);
    }
}
