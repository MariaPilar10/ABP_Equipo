@extends('layouts.app')

@section("devoluciones")
    active
@endsection
@section("content")
    <div class="row d-flex justify-content-center">
        <div class="col-6 ">
            <div class="alert alert-primary text-center" role="alert">
                <h4>Devoluciones</h4>
            </div>
            <div class="row">
                <div class="col-8 offset-2">
                    <div class="card shadow-sm al a">
                        <div class="card-body">
                            <div class="row mt-0">
                                <div class="row">
                                    <h5 class="text-center">Actualizar devolucion</h5>
                                    <div class="mt-3">
                                        <div class="card shadow-sm al">
                                            <div class="card-body">
                                                <form method="POST" action="{{route("devoluciones.update",$devolucione->id)}}">
                                                    @csrf
                                                    @method("PUT")
                                                    <div class="form-floating mb-3 ">
                                                        <input type="text" class="form-control" id="id_detalle_prestamos" placeholder=""
                                                               name="id_detalle_prestamos" value="{{$devolucione->id_detalle_prestamos}}">
                                                        <label for="id_detalle_prestamos">Numero de prestamo</label>
                                                    </div>

                                                    <div class="form-floating mb-3">
                                                        <input type="date" class="form-control" id="fecha_devolucion" placeholder=""
                                                               name="fecha_devolucion" value="{{$devolucione->fecha_devolucion}}">
                                                        <label for="fecha_devolucion">Fecha de Devolucion</label>
                                                    </div>

                                                    <div class="form-floating mb-3">
                                                        <input type="text" class="form-control" id="observaciones" placeholder=""
                                                               name="observaciones"value="{{$devolucione->observaciones}}">
                                                        <label for="observaciones">Observaciones</label>
                                                    </div>

                                                    <div class="row my-3 d-flex justify-content-center">
                                                        <div class="row my-1 d-flex justify-content-center">
                                                            <div class="col-3"></div>
                                                            <div class="col-3">
                                                                <a href="{{url("devoluciones")}}" class="btn btn-danger mb-4 text-white" data-toggle="tooltip" title="Regresar el menu principal">Cancelar</a>
                                                             </div>
                                                            <div class="col-3">
                                                                <button class="btn btn-primary" type="submit" data-toggle="tooltip"
                                                                        title="Guardar cambios">Guardar</button>
                                                            </div>
                                                            <div class="col-3"></div>
                                                        </div>
                                                    </div>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
