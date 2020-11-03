<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App;

class PagesController extends Controller
{
    public function inicio(){
        $notas = App\Nota::paginate(2);
        return view('welcome',compact('notas'));
    }
    public  function  fotos(){
        return view('fotos');
    }
    public function nosotros($nombre = null){
        $equipo = ['Nico', 'Fer', 'Leny'];
        //return view('nosotros', ['equipo'=>$equipo]);
        return view('nosotros',compact('equipo','nombre'));
    }
    public function blog(){
        return view('blog');
    }

    public function detalle($id){
        $nota = App\Nota::findOrFail($id);
        return view('notas.detalle', compact('nota'));
    }

    public function crear(Request $request){
        //return $request->all();
        $request->validate([
           'nombre' => 'required',
           'descripcion' => 'required'
        ]);
        $notaNueva = new App\Nota;
        $notaNueva->nombre = $request->nombre;
        $notaNueva->descripcion = $request->descripcion;
        $notaNueva->save();
        return back()->with('mensaje','Nota agregada, señor!');
    }

    public function editar($id){
        $nota = App\Nota::findOrFail($id);
        return view('notas.editar', compact('nota'));
    }

    public function update(Request $request, $id){
        $notaUpdate = App\Nota::findOrFail($id);
        $request->validate([
            'nombre' => 'required',
            'descripcion' => 'required'
        ]);
        $notaUpdate->nombre = $request->nombre;
        $notaUpdate->descripcion = $request->descripcion;
        $notaUpdate->save();
        return back()->with('mensaje', 'Nota actualizada');
    }

    public function eliminar($id){
        $notaEliminar = App\Nota::findOrFail($id);
        $notaEliminar->delete();
        return back()->with('mensaje', 'Nota eliminada');
    }

    public function valor(Request $request){
        $request->validate([
            'nombre' => 'valor'
        ]);
        $valorNuevo = new App\Valor;
        $valorNuevo->valor = $request->valor;
        $valorNuevo->valorIVA = ($request->valor)*1.19;
        $valorNuevo->save();
        return back()->with('mensaje', 'Valor agregado');
    }
    public function cuenta_agua(){
        return view('cuentas.formulario_agua');
    }
    public function cuenta_elec(){
        return view('cuentas.formulario_elec');
    }
    public function form_cuenta_agua(Request $request){
        //return $request->all();
        $request->validate([
            'fecha' => 'required',
            'cargo_fijo' => 'required',
            'valor_unitario' => 'required',
            'consumo_total' => 'required',
            'consumo_casa' => 'required',
            'recoleccion' => 'required',
            'tratamiento' => 'required',
            'subsidio' => 'required',
            'otro' => 'required',
            'valor_total' => 'required'
        ]);
        $aguaNueva = new App\Agua;

        $aguaNueva->fecha = $request->fecha.'-01';
        $aguaNueva->cargo_fijo = $request->cargo_fijo;
        $aguaNueva->valor_unitario = $request->valor_unitario;
        $aguaNueva->consumo = $request->consumo_total;
        $aguaNueva->consumo_casa = $request->consumo_casa;
        $aguaNueva->recoleccion = $request->recoleccion;
        $aguaNueva->tratamiento = $request->tratamiento;
        $aguaNueva->subsidio = $request->subsidio;
        $aguaNueva->otro = $request->otro;
        $aguaNueva->total = $request->valor_total;
        $aguaNueva->total_casa = ($request->valor_unitario*$request->consumo_casa)+($request->cargo_fijo+$request->recoleccion+$request->tratamiento-$request->subsidio+$request->otro)/3;
        $aguaNueva->save();
        return back()->with('mensaje','Valor agregado, valor casa ='.$aguaNueva->total_casa);
    }

    public function form_cuenta_elec(Request $request){
        //return $request->all();
        $request->validate([
            'fecha' => 'required',
            'admin' => 'required',
            'electricidad' => 'required',
            'kwhtotal' => 'required',
            'consumo_casa' => 'required',
            'coordinacion' => 'required',
            'otro' => 'required',
            'valor_total' => 'required'
        ]);
        $electricidadNueva = new App\Electricidad;

        $electricidadNueva->fecha = $request->fecha.'-01';
        $electricidadNueva->admin = $request->admin;
        $electricidadNueva->electricidad = $request->electricidad;
        $electricidadNueva->kwhtotal = $request->kwhtotal;
        $electricidadNueva->consumo_casa = $request->consumo_casa;
        $electricidadNueva->coordinacion = $request->coordinacion;
        $electricidadNueva->otro = $request->otro;
        $electricidadNueva->valor_total = $request->valor_total;
        $electricidadNueva->valor_casa = $request->consumo_casa*($request->electricidad/$request->kwhtotal)+($request->admin+$request->coordinacion+$request->otro)/3;
        $electricidadNueva->save();
        return back()->with('mensaje','Valor agregado, valor casa ='.$electricidadNueva->valor_casa);
    }

    public function lista_agua(){
        $agua = App\Agua::paginate(10);
        return view('cuentas.lista_agua',compact('agua'));
    }

    public function lista_Elec(){
        $elec = App\Electricidad::paginate(10);
        return view('cuentas.lista_elec',compact('elec'));
    }
}
