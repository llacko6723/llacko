@php
    use Illuminate\Support\Str;
@endphp

@extends("layout/private")


@section("title")
Lista Usluga
@endsection

@section("content")

@if (session("success"))
    <div class="alert alert-success">
        {{session("success")}}
    </div>
@endif

@if (session("info"))
    <div class="alert alert-info">
        {{session("info")}}
    </div>
@endif

    <div class="container">
    <div class="d-flex justify-content-between mt-5 mb-2">
            <h1 class="fw-bold">Svi Radnici:</h1>
            <a href="/admin/add-worker"><button class="btn btn-primary">Nov Radnik</button></a>
        </div>

    <table class="table">
        <thead>
            <th>Ime</th>
            <th>Prezime</th>
            <th>Email</th>
            <th colspan="2">Opcije</th>
        </thead>
        <tbody>
            @foreach ($workers as $worker)
                <tr>
                    <td>{{$worker->ime}}</td>
                    <td>{{$worker->prezime}}</td>
                    <td>{{$worker->email}}</td>
                    <td><a href="{{route('worker.delete', $worker->id)}}" class="btn btn-danger">Obrisi</a></td>
                    <td><a href="{{route('worker.edit', $worker->id)}}" class="btn btn-secondary">Izmeni</a></td>
            @endforeach
        </tbody>
    </table>
    </div>
    


@endsection