@extends('layouts.autenticado')
@section('titulo', $titulo)

@section('contenido')

<div class="col-md-10 content-pane">
    <h3 class="title-header" style="text-transform: uppercase;">
        <i class="fa fa-qr"></i>
        {{$titulo}}
        <a href="{{url('proveedores/nuevo')}}" class="btn btn-sm btn-success float-right" style="margin-left:10px;"><i class="fa fa-plus"></i> NUEVO proveedor</a>
    </h3>
    <div class="row">
        <div class="col-12">              
                <!-- inicio card  -->
                <div class="card card-stat">
                    <div class="card-body">

                        <div class="row">
                            <div class="col-md-4 offset-md-4 text-center">
                                <div id="qr-reader" style="300px"></div>
                                <input type="hidden" id="qr-result">

                                <select class="form-control" name="evento" id="evento">
                                    <option value="">Seleccione salida/entrada</option>
                                    <option value="entrada">Entrada</option>
                                    <option value="salida">Salida</option>
                                </select>

                                <button id="btn-escanear" class="btn btn-primary">
                                    <i class="fa fa-save"></i>
                                    Guardar datos
                                </button>

                            </div>
                        </div>
                        
                    </div>
                </div>
                <!-- fin card  -->



        </div>
    </div>
</div>




<script type="text/javascript">
$(function(){

    function onScanSuccess(decodedText, decodedResult) {
        console.log("QR leído:", decodedText);

        $.ajax({
            url: "/qr/procesar",
            method: "POST",
            data: {
                qr: decodedText,
                _token: "{{ csrf_token() }}"
            },
            success: function (response) {
                alert(response.mensaje);
            }
        });
    }

    const scanner = new Html5QrcodeScanner(
        "qr-reader",
        {
            fps: 10,
            qrbox: 250
        },
        false
    );

    // 🔹 CAMBIAR TEXTOS A ESPAÑOL
    scanner.render(onScanSuccess, null);

    // Esperar a que se renderice el DOM interno
    setTimeout(() => {
        $(".html5-qrcode-element").each(function () {
            const text = $(this).text().trim();

            if (text === "Scan an Image File") $(this).text("Escanear imagen");
            if (text === "Start Scanning") $(this).text("Iniciar escaneo");
            if (text === "Stop Scanning") $(this).text("Detener escaneo");
            if (text === "Switch On Torch") $(this).text("Encender linterna");
            if (text === "Switch Off Torch") $(this).text("Apagar linterna");
            if (text === "Camera based scan") $(this).text("Escaneo con cámara");
            if (text === "File based scan") $(this).text("Escaneo desde archivo");
        });
    }, 500);



});


</script>




@endsection
