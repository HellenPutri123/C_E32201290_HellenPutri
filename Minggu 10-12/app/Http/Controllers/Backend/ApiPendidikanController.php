<?php

namespace App\Http\Controllers\Backend;

use Illuminate\Http\Request, App\Models\Pendidikan, App\Http\Controllers\Controller, Illuminate\Support\Facades\Response;

class ApiPendidikanController extends Controller
{
    public function getAll()
    {
        $pendidikan = Pendidikan::all();
        return Response::json($pendidikan, 201);
    }
}
