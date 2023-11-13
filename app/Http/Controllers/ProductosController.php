<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Producto;

class ProductosController extends Controller
{
    public function __construct()
    {
        // Agregar el middleware 'auth' para requerir autenticación
        $this->middleware('auth');#->except(['consultar', 'show']);
    }
    //
    public function store(Request $request){
        $request->validate([
            'nombre' => 'required|min:3|max:20',
            'tipo' => 'required|min:3|max:20',
            'descripcion' => 'required|min:6|max:30',
            'precio' => 'required|numeric|min:1',
            'stock' => 'required|numeric|min:1',
            'origen' => 'required|min:3|max:30',
            'proveedor' => 'required|min:3|max:35',
            'certificacion' => 'required|min:2|max:2',
        ]);
        
        $producto=new producto();

        $producto->nombre = $request->nombre;
        $producto->tipo = $request->tipo;
        $producto->descripcion = $request->descripcion;
        $producto->precio = $request->precio;
        $producto->stock = $request->stock;
        $producto->origen = $request->origen;
        $producto->proveedor = $request->proveedor;
        $producto->certificacion = $request->certificacion;

        $producto->save();

        return redirect()->route('insercion')->with('success','Profucto registrado correctamente');

    }

    public function consultar(){
        $productos=producto::all();
        return view('consultar',['arrayProductos'=>$productos]);
    }

    public function show($id){
        $producto=producto::find($id);
        return view('modulos.show',['producto'=>$producto]);
    }

    public function update(Request $request,$id){
        $producto=producto::find($id);
        $request->validate([
            'nombre' => 'required|min:3|max:20',
            'tipo' => 'required|min:3|max:20',
            'descripcion' => 'required|min:6|max:30',
            'precio' => 'required|numeric|min:1',
            'stock' => 'required|numeric|min:1',
            'origen' => 'required|min:3|max:30',
            'proveedor' => 'required|min:3|max:35',
            'certificacion' => 'required|min:2|max:2',
        ]);

        $producto->nombre = $request->nombre;
        $producto->tipo = $request->tipo;
        $producto->descripcion = $request->descripcion;
        $producto->precio = $request->precio;
        $producto->stock = $request->stock;
        $producto->origen = $request->origen;
        $producto->proveedor = $request->proveedor;
        $producto->certificacion = $request->certificacion;
        
        $producto->save();

        return redirect()->route('consulta')->with('success','Producto actualizado correctamente');

    }

    public function destroy($id){
        $producto=producto::find($id);
        $producto->delete();
        return redirect()->route('consulta')->with('success','Profucto actualizado correctamente');
    }
}
