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
    public function getPen($id)
    {
        $pendidikan = pendidikan::find($id);
        return Response::json($pendidikan, 200);
    }
    public function createPen(Request $request)
    {
        Pendidikan::created($request->all());

        return response()->json([
            'status' => 'ok',
            'message' => 'Pendidikan berhasil ditambahkan!'
        ], 201);
    }
    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function updatePen($id, Request $request)
    {
        Pendidikan::find($id)->update($request->all());
        return response()->json([
            'status' => 'ok',
            'message' => 'Pendidikan berhasil dirubah!'
        ], 201);
    }
    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function deletePen($id)
    {
        Pendidikan::destroy($id);
        return response()->json([
            'status' => 'ok',
            'message' => 'Pendidikan berhasil dihapus!'
        ], 201);
    }
}
