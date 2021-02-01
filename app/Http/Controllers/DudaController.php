<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\User;
use App\Duda as Duda;
use App\Respuesta as Respuesta;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Auth;


class DudaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

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
    public function store(Request $request){
      $usuario=Auth::user();
      $datos=$request->all();
        $errors=$this->validarDuda($datos);
    //Si la la validaciones son buenas
    if($errors==null){
      $duda=new Duda();
      $duda->asunto=$datos['asunto'];
      $duda->contenido=$datos['contenido'];
      $lafoto=str_random(10)."_".$request->file('exampleFormControlFile1')->getClientOriginalName();

      $usuario->dudas()->save($duda);  //vamos a guardar
      $duda->url=$lafoto;
      $request->file('exampleFormControlFile1')->move('assets/img/archivo_dudas',$lafoto);
      //volver a la pagina
      \Session::flash('success',$duda->asunto.' creado correctamente.');
      return \Redirect::back();
    }else{
    //volver a la pagina
    return \Redirect::back()->withInput()->withErrors($errors);
    }

}



    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */

    public function show($id)
    {
//
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

    public function validarDuda($datos){
      $rules =array(
        'asunto'=>'required',
        'contenido'=>'requiresd',
        'url'=>'required',
      );
      $messages = array (
        'asunto.required'=>'El asunto es obligatorio',
        'contenido.required'=>'El contenido es obligatorio',
        'url.image'=>'No se te olvide el archivo'
      );
      $validacion =Validator::make($datos,$rules,$messages);
      if($validacion->fails()){
        $errors=$validacion->messages();
        $errors->add('Error','No se han validado las dudas');
        return $validacion;
      }else{
        return null;
      }

    }
}
