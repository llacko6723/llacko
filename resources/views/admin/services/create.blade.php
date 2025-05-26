@extends("layout/private")

@section("title") Create Usluga stranica @endsection

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
                        <label for="">Slika</label>
                        <input type="file" name="slika" id="slika" placeholder="Slika usluge">
                        </div>
                    <div class="mb-3">
                        <label for="">Naziv</label>
                        <input type="text" name="naziv" class="form-control" placeholder="Naziv usluge">
                    </div>
                    <div class="mb-3">
                        <label for="">Opis</label>
                        <textarea name="opis" id="opis" class="form-control" rows="7" placeholder="Opis usluge"></textarea>
                    </div>
                    <div class="mb-3">
                        <label for="">Cena</label>
                        <input type="number" name="cena" class="form-control" placeholder="Cena po m²">
                    </div>
                    <div class="mb-3">
                        <label for="">Istaknuto</label>
                        <select name="istaknuto" class="form-control">
                            <option value="1">1</option>
                            <option value="0">0</option>
                        </select>
                    </div>
                    <button type="submit" class="btn btn-primary">Dodaj Uslugu</button>
                    <a href="{{route('service.list')}}" class="btn btn-secondary">Nazad</a>
                </form>
            </div>
        </div>
    </div>
</div>

@endsection