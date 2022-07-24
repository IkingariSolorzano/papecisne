<?php

namespace App\Http\Controllers;

use App\Models\Articulo;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ArticuloController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $datos['articulos'] = Articulo::orderBy('id', 'desc')->paginate(50);
        return view('articulo.index', $datos);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $datos['articulos']=new Articulo;
        $datos['categorias'] = DB::table('categorias')->get();
        $datos['marcas'] = DB::table('marcas')->get();
        return view('articulo.create', $datos);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {   
        // $request->validate([
        //     'codigo_barras' => []
        // ])
        $datosArticulo = $request->except('_token');
        Articulo::insert($datosArticulo);
        // return response()->json($datosArticulo);
        return redirect('articulo');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Articulo  $articulo
     * @return \Illuminate\Http\Response
     */
    public function show(Articulo $articulo)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Articulo  $articulo
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $datos['articulos'] = Articulo::findOrFail($id);
        $datos['categorias'] = DB::table('categorias')->get();
        $datos['marcas'] = DB::table('marcas')->get();
        return view('articulo.edit', $datos);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Articulo  $articulo
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $datosArticulo = request()->except(['_token', '_method']);
        Articulo::where('id', $id)->update($datosArticulo);
        return redirect('articulo');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Articulo  $articulo
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Articulo::destroy($id);
        return redirect('articulo');
    }
}
