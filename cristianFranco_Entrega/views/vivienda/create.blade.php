@extends('layouts.master')

{{-- @section("title", $data["title"]) --}}
@section("title")

@section('content')
<div class="container">
    <div class="row">
        <div class="col-sm-8 mx-auto">
            @include('util.message')
            <div class="card border-0 shadow">
                <div class="card-body">
                    @if($errors->any())
                    <div class="alert alert-danger">
                        @foreach($errors->all() as $error)
                            - {{ $error }} <br>
                        @endforeach
                    </div>
                    @endif

                    <form action="{{ route('viviendas.store') }}" method="POST">
                        <div class="form-row">
                            <div class="col-sm-3">
                                <input type="text" name="direccion" class="form-control" placeholder="Direccion" value="{{ old('direccion') }}">
                            </div>
                            <div class="col-sm-4">
                                <input type="text" name="tipo" class="form-control" placeholder="apartamento o vivienda" value="{{ old('tipo') }}">
                            </div>

                            {{-- <div >
                                <p><label class="color-5">
                                    Seleccione tipo de vivienda</label>
                                <select class="browser-default custom-select">
                                    <option name="tipo" value="apartamento">Apartamento</option>
                                    <option value="tipo">Casa</option>
                                  </select>
                                </p>
                            </div> --}}


                        </div>
                        <br>
                        <div class="form-row">
                            <div class="col-sm-4">
                                <input type="text" name="valor_comercial" class="form-control" placeholder="Valor comercial" value="{{ old('valor_comercial') }}">
                            </div>
                        </div>
                        <br>
                        <br><br>
                        <div class="form-row center">
                            <div class="col-auto">
                                @csrf
                                <button type="submit" class="btn btn-primary">Send</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection