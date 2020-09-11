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
                        <th>Apartamentos</th>
                        <th>Casas</th>
                    </tr>
                </thead>
                <tbody>
                    <td>{{ $apartamentos }}</td>
                    <td>{{ $casas }}</td>
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection