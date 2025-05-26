@extends("layout/private")

@section("title")
Edit Radnik
@endsection

@section("content")

@if (session("error"))
    <div class="alert alert-danger">
        {{session("error")}}
    </div>
@endif

<div class="row">
    <div class="col-md-12">
        <div class="card">
            <div class="card-body">
                <form action="" method="post">
                    @csrf
                    <div class="mb-3">
                        <label for="">Ime</label>
                        <input type="text" value="{{$worker->ime}}" class="form-control" name="ime">
                    </div>
                    <div class="mb-3">
                        <label for="">Prezime</label>
                        <input type="text" value="{{$worker->prezime}}" class="form-control" name="prezime">
                    </div>
                    <div class="mb-3">
                        <label for="">Email</label>
                        <input type="email" value="{{$worker->email}}" class="form-control" name="email">
                    </div>
                    <button type="submit" class="btn btn-primary">Izmeni Uslugu</button>
                    <a href="{{route('worker.list')}}" class="btn btn-secondary">Nazad</a>
                </form>
            </div>
        </div>
    </div>
</div>

@endsection