@extends('layouts.dashboard')
@section('content')
<div class="card">
    <div class="card-header bg-primary text-white">Edicion de tutoría grupal</div>
        <div class="card-body">
        <form action="" method="POST">
                @csrf
                <div class="form-row">
                    <div class="col-lg-4 col-sm-12">
                        <div class="form-group">
                            <label for="cuatrimestre">Cuatrimestre</label>
                            <select disabled required name="cuatrimestre" id="" class="form-control">
                                <option selected value="{{$reporte->cuatrimestre}}">{{$reporte->cuatrimestre}}</option>
                                <option value="1">1</option>
                                <option value="2">2</option>
                                <option value="3">3</option>
                                <option value="4">4</option>
                                <option value="5">5</option>
                                <option value="6">6</option>
                                <option value="7">7</option>
                                <option value="8">8</option>
                                <option value="9">9</option>
                                <option value="10">10</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-lg-4 col-sm-12">
                        <div class="form-group">
                            <label for="turno">Turno</label>
                            <select disabled required name="turno" id="" class="form-control">
                                <option selected value="{{$reporte->turno}}">{{$reporte->turno}}</option>
                                
                                <option value="Matutino">Matutino</option>
                                <option value="Vespertino">Vespertino</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-lg-4 col-sm-12">
                        <div class="form-group">
                            <label for="grupo">Grupo</label>
                            <input disabled required type="text" class="form-control" name="grupo" value="{{$reporte->grupo}}">
                        </div>
                    </div>
                    <div class="col-lg-4 col-sm-12">
                        <div class="form-group">
                            <label for="date">Fecha</label>
                            <input disabled required type="date" class="form-control datefield" name="fecha" value="{{$reporte->fecha->format('Y-m-d')}}">
                        </div>
                    </div>
                    <div class="col-lg-12 col-sm-12">
                        <div class="form-group">
                            <label for="dinamica">Dinamica</label>
                            <br>
                            <textarea disabled name="dinamica" class="form-control" rows="10" cols="40">{{$reporte->dinamica}}</textarea>
                        </div>
                    </div>
                    <div class="col-lg-12 col-sm-12">
                        <div class="form-group">
                            <label for="observaciones">Observaciones</label>
                            <br>
                            <textarea disabled name="observaciones" class="form-control" rows="10" cols="40">{{$reporte->observaciones}}</textarea>
                        </div>
                    </div>
                </div>
    </form>
</div>

@endsection
