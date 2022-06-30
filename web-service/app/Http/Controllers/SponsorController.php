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
}
