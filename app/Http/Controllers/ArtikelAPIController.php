<?php

namespace App\Http\Controllers;
use App\Models\Artikel;
use Illuminate\Http\Request;

class ArtikelAPIController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $artikel=artikel::all();

        return $artikel;
    }


    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        
        $input=$request->all();
      
        $artikel=Artikel::create($input);

        return $artikel;
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $artikel=Artikel::find($id);

        return $artikel;
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $input=$request->all();

        return $input;

        $artikel=Artikel::find($id);

        if(empty($artikel)){
            return response()->json(['message'=>'data tidak di temukan'], status: 404);
        }

        $artikel->update($input);

        return response()->json($artikel);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $input=$request->all();

        return $input;

        $artikel=Artikel::find($id);

        if(empty($artikel)){
            return response()->json(['message'=>'data tidak di temukan'], status: 404);
        }

        $artikel->delete();

        return response()->json(['message'=>'data telah di hapus']);
    }
}
