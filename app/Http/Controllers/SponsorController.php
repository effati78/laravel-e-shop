<?php

namespace App\Http\Controllers;

use App\Models\Sponsor;
use Illuminate\Http\Request;

class SponsorController extends Controller
{
    public function index()
    {
        $sponsor = Sponsor::all();
        return response()->json(['message' => ['sponsors' => $sponsor]], 200);
    }
}
