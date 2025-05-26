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
            <h1 class="fw-bold">Sve Usluge:</h1>
            <a href="/admin/add-service"><button class="btn btn-primary">Nova usluga</button></a>
        </div>

    <table class="table">
        <thead>
            <th>Slika</th>
            <th>Naziv</th>
            <th class="text-center">Opis</th>
            <th width="10%">Cena po m²</th>
            <th colspan="3">Opcije</th>
        </thead>
        <tbody>
            @foreach ($services as $service)
                <tr>
                    <td><img src="{{ asset('images/' . $service->slika) }}" alt="Slika usluge" width="100"></td>                    
                    <td>{{$service->naziv}}</td>
                    <td>{{ Str::limit($service->opis, 200, '...') }}</td>
                    <td>{{$service->cena}}RSD</td>
                    <td><a href="{{route('service.delete', $service->id)}}" class="btn btn-danger">Obrisi</a></td>
                    <td><a href="{{route('service.edit', $service->id)}}" class="btn btn-secondary">Izmeni</a></td>
            @endforeach
        </tbody>
    </table>
    </div>
    
    <!-- <div class="row">
        <div class="col-md-12">
            @if (count($services) > 0)
                @foreach ($services as $service)
                    <div class="card mb-4">
                        <div class="card-body">
                            <h2 class="card-title">
                                {{$service->naziv}}
                            </h2>
                            <p class="card-text">
                                {{$service->opis}}
                            </p>
                        </div>
                    </div>
                @endforeach
            @endif
        </div>
    </div> -->


@endsection