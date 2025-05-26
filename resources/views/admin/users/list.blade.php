@extends("layout/private")


@section("title")
Lista Korisnika
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
            <h1 class="fw-bold">Svi Korisnici:</h1>
            <a href="/admin/add-user"><button class="btn btn-primary">Dodaj Korisnika</button></a>
        </div>

    <table class="table">
        <thead>
            <th>Ime</th>
            <th>Email</th>
            <th colspan="2">Opcije</th>
        </thead>
        <tbody>
            @foreach ($users as $user)
                <tr>
                    <td>{{$user->ime}}</td>
                    <td>{{$user->email}}</td>
                    <td><a href="{{route('user.delete', $user->id)}}" class="btn btn-danger">Obrisi</a></td>
                    <td><a href="{{route('user.edit', $user->id)}}" class="btn btn-secondary">Izmeni</a></td>
            @endforeach
        </tbody>
    </table>
    </div>
    


@endsection