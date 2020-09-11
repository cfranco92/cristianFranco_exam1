@extends('layouts.master')

{{-- @section("title", $data["title"]) --}}
@section("title")

@section('content')
<div class="container">
    <div class="row">
        <div class="col-sm-8 mx-auto">

            <table class="table">
                <thead>
                    <tr>
                        <th>Id</th>
                        <th>Dirección</th>
                        <th>Tipo</th>
                        <th>Valor comercial</th>
                        {{-- <th>Phone</th>
                        <th>City</th> --}}
                        {{-- <th>&nbsp;</th> --}}
                    </tr>
                </thead>
                <tbody>
                    @foreach($viviendas as $index=>$vivienda)
                    <tr>
                        <td>{{ $vivienda->getId() }}</td>
                        @if ($vivienda->getTipo() == 'apartamento')
                            <td><b style="color: green;">{{ $vivienda->getDireccion() }}</b></td>
                        @else 
                            <td>{{ $vivienda->getDireccion() }}</td>
                        @endif 
                        <td>{{ $vivienda->getTipo() }}</td>
                        <td>${{ $vivienda->getValorComercial() }}</td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection