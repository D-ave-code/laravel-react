<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Cliente;
use App\Models\Producto;
use App\Models\TipoProducto;
use Illuminate\Http\Request;


class RelacionController extends Controller
{
    public function index()
    {
        $producto = Producto::all();
        return   $producto[0]->id.'<br>'
                .$producto[0]->nombre.'<br>'
                
                .$producto[0]->descripcion.'<br>'
                .$producto[0]->imagenP.'<br>'
                .$producto[0]->precio.'<br>'
                
                .$producto[0]->tipoproductos->nombre_tipo.' id producot'.'<br>'
                .$producto[0]->tipopersonas->nombre.' id persona'.'<br>'
                .$producto[0]->marcas.' id producto'.'<br>';
                //return $producto;
    }

    public function show(Request $request){
        //permite tomar datos de usuario->cliente y cliente->usuario
        $u = auth()->user()->id;
        $user = User::find($u);
        $cliente = Cliente::where('id_users', $user->id)->get();
        $cl = new Cliente(['id_users'=>$user->id]);
        
        return $user->clientes;
        //return  $cl->usuarios;
    }
}
