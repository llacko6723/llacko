@extends("layout/public")

@section("title") Provera za brisanje radnika @endsection

@section("content")
    <div class="row justify-content-center">
        <div class="col-md-6 mt-5">
            <div class="card text-center">
                <div class="card-header">
                    <h5 class="card-title">Delete <b>{{$worker->ime}} {{$worker->prezime}}</b> Radnika</h5>
                </div>
                <div class="card-body">
                    <p>Da li ste sigurni da zelite da obrisete radnika?</p>
                    <form action="{{route('worker.delete', $id)}}" method="post">
                        @csrf
                        <button type="submit" class="btn btn-danger">Obrisi</button>
                        <a href="{{route('worker.list')}}" class="btn btn-secondary">Cancel</a>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection