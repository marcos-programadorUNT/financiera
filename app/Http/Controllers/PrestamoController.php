<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Prestamo;
use DB;

class PrestamoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        try {
            $cliente = Cliente::where('dniCliente',$request->dniCliente)->first();
            return [Prestamo::where('idCliente',$cliente->idCliente)->get(),$cliente];
        } catch (Exception $e) {
            return "Error - ". $e->getMessage();
        }
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
        Try{

            $prestamo=new Prestamo();
            $prestamo->montoPrestamo=$request->montoPrestamo;
            $prestamo->fechaPrestamo=$request->fechaPrestamo;
            $prestamo->estadoPrestamo=$request->estadoPrestamo;
            $prestamo->idCliente=$request->idCliente;
            $prestamo->idTrabajador=$request->idTrabajador;
            $prestamo->save();
            //$result=['created' => true];
            return "Se solicitó su préstamo";
        }
        catch (Exception $e){
            return "Error - ". $e->getMessage();

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
}
