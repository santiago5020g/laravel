<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Servicio;
use App\Pago;


class ServicioController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $servicios = Servicio::with('pagos.cliente')->whereHas('pagos.cliente', function ($query) {
        $query->where('cedula', '!=', 1111);
        })->get();

        foreach ($servicios as $servicio => $value) {
            
        }

        return json_encode($servicios);

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('servicio.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $servicio = new Servicio();
        $servicio->name = $request->serviceName;
        $servicio->save();

        $pagoArray =  [];

        foreach ($request->paymentName as $i => $key) {
            $pago = new Pago();
            $pago->name = $request->paymentName[$i];
            $pago->date = $request->paymentDate[$i];
            $pago->valor_pago = $request->paymentValue[$i];
            $pagoArray[] = $pago;

        }

        $servicio->pagos()->saveMany($pagoArray);
    }


    public function AddPaymentToService()
    {
        $servicios = Servicio::All();
        return view ('servicio.pservice',['servicios'=>$servicios]);
    }

    public function SavePaymentToService(Request $request)
    {
        $servicio = Servicio::where('id',$request->serviceName)->first();

        $pagoArray =  [];

        foreach ($request->paymentName as $i => $key) {
            $pago = new Pago();
            $pago->name = $request->paymentName[$i];
            $pago->date = $request->paymentDate[$i];
            $pago->valor_pago = $request->paymentValue[$i];
            $pagoArray[] = $pago;

        }

        $servicio->pagos()->saveMany($pagoArray);

    }

}
