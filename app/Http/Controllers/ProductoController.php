<?php

namespace App\Http\Controllers;

use App\Producto;
use Illuminate\Http\Request;

class ProductoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $creado  = '0';
        $productos = Producto::get();
        return view('administrador.index',['productos'=>$productos,'creado'=>$creado]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
       
          $data = $request->all();
        // dd($data);
        Producto::create([
        'codigo' => $data['codigo'],
        'descripcion' => $data['descripcion'],
        'valor_unitario' => $data['valor_unitario'],
        'IVA' => $data['IVA'],
        ]);
        $data = null;
        $creado  = '2';
       $productos = Producto::get();

        return back();

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Producto  $producto
     * @return \Illuminate\Http\Response
     */
    public function show(Producto $producto)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Producto  $producto
     * @return \Illuminate\Http\Response
     */
    public function edit(Producto $producto)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Producto  $producto
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Producto $producto)
    {
      $producto->update($request->only(['codigo','descripcion','valor_unitario','IVA']));
        $producto->save();
        $productos = Producto::get();
        $creado  = '2';
        return back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Producto  $producto
     * @return \Illuminate\Http\Response
     */
    public function destroy(Producto $producto)
    {
        //
    }
}
