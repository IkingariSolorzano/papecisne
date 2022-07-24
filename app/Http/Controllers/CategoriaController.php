<?php

namespace App\Http\Controllers;

use App\Models\Categoria;
use Illuminate\Http\Request;

class CategoriaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $datos['categorias'] = categoria::orderBy('id', 'desc')->paginate(50);
        return view('categoria.categoria', $datos);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $datos['categorias'] = new categoria;
        return view('categoria.create', $datos);
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
        $datoscategoria = $request->except('_token');
        categoria::insert($datoscategoria);
        // return response()->json($datoscategoria);
        return redirect('categoria');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\categoria  $categoria
     * @return \Illuminate\Http\Response
     */
    public function show(categoria $categoria)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\categoria  $categoria
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $datos['categorias'] = categoria::findOrFail($id);
        return view('categoria.edit', $datos);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\categoria  $categoria
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $datoscategoria = request()->except(['_token', '_method']);
        categoria::where('id', $id)->update($datoscategoria);
        return redirect('categoria');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\categoria  $categoria
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        categoria::destroy($id);
        return redirect('categoria');
    }
}
