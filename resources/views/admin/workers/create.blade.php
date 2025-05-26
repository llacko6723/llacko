@extends("layout/private")

@section("title") Create Worker stranica @endsection

@section("content")

@if (session("error"))
    <div class="alert alert-danger">
        {{session("error")}}
    </div>
@endif

<div class="row">
    <div class="col-md-12">
        <div class="card mt-5">
            <div class="card-body">
                <form action="" method="post">
                    @csrf
                    <div class="mb-3">
                        <label for="">Ime</label>
                        <input type="text" name="ime" id="ime" class="form-control" placeholder="Ime radnika">
                        </div>
                    <div class="mb-3">
                        <label for="">Prezime</label>
                        <input type="text" name="prezime" class="form-control" placeholder="Prezime radnika">
                    </div>
                    <div class="mb-3">
                        <label for="">Email</label>
                        <input type="email" name="email" class="form-control" placeholder="Email radnika">
                    </div>

                    <button type="submit" class="btn btn-primary">Dodaj Radnika</button>
                    <a href="{{route('worker.list')}}" class="btn btn-secondary">Nazad</a>
                </form>
            </div>
        </div>
    </div>
</div>

@endsection