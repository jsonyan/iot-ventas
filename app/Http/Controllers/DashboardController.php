<?php

namespace App\Http\Controllers;

use App\Models\Alerta;
use Illuminate\Http\Request;
use App\Models\Venta;
use App\Models\Proveedor;
use App\Models\Producto;
use App\Models\Usuario;
use App\Models\InventarioLog;
use Illuminate\Support\Facades\Auth;
use App\Models\RegistroCaudal;
use Carbon\Carbon;

class DashboardController extends Controller
{
    private $modulo = "dashboard";

    
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //verificar si esta logueado el usuario
        // if(!Auth::check()){return redirect('/');}

        $usuario = Auth::user();
        $ventas = Venta::all();
        $proveedores = Proveedor::all();
        $productos = Producto::all();
        $usuarios = Usuario::all();
        $titulo = "Panel General";

        $fecha_hoy = date('Y-m-d');
        $mes = date('m');
        $anio = date('Y');
        $ventas_anio = Venta::whereYear('ven_fecha_venta', $anio)->get();
        $ventas_mes = Venta::whereMonth('ven_fecha_venta', $mes)->get();
        $ventas_dia = Venta::whereDate('ven_fecha_venta', $fecha_hoy)->get();

        $total_ventas_dia = 0;
        $total_ventas_mes = 0;
        $total_ventas_anio = 0;
        foreach($ventas_dia as $item){
            $total_ventas_dia = $total_ventas_dia + $item->ven_total;
        }
        foreach($ventas_mes as $item){
            $total_ventas_mes = $total_ventas_mes + $item->ven_total;
        }
        foreach($ventas_anio as $item){
            $total_ventas_anio = $total_ventas_anio + $item->ven_total;
        }

        $salidas = InventarioLog::where('ilo_tipo_movimiento', 'salida')->count();
        $entradas = InventarioLog::where('ilo_tipo_movimiento', 'entrada')->count();


        return view('dashboard.detalle_tablero', [
                                                    'usuario'=>$usuario, 
                                                    'titulo'=>$titulo, 
                                                    'ventas'=>$ventas, 
                                                    'entradas'=>$entradas, 
                                                    'salidas'=>$salidas, 
                                                    'total_ventas_dia'=>$total_ventas_dia,
                                                    'total_ventas_mes'=>$total_ventas_mes,
                                                    'total_ventas_anio'=>$total_ventas_anio,
                                                    'productos'=>$productos, 
                                                    'proveedores'=>$proveedores,
                                                    'usuarios'=>$usuarios,
                                                    'modulo_activo' => $this->modulo
                                                    ]);
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
        //
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
