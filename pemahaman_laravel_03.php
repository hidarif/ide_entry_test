<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;

class SchoolController extends Controller
{
    public function getInauguratedSchool()
    {
        $schools = DB::table('school')->select('id', 'school_name', 'inaugurated_date')->get();
        $data = $schools;
        return response()->json([
            'status' => true,
            "message" => "Success",
            "data" => $data
        ], 201)->header('Content-Type', 'application/json');
    }
}
