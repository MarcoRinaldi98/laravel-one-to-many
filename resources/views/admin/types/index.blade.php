@extends('layouts.admin')

@section('page-title', 'Tipes')

@section('content')
    <table class="table">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Nome</th>
                <th scope="col">Slug</th>
                <th scope="col">N° proggetti</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($types as $type)
                <tr>
                    <th scope="row">{{ $type->id }}</th>
                    <td>{{ $type->name }}</td>
                    <td>{{ $type->slug }}</td>
                    <td>{{ count($type->projects) }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection
