@extends("layout/private")

@section("title")
Edit Usluge
@endsection

@section("content")

@if (session("error"))
    <div class="alert alert-danger">
        {{session("error")}}
    </div>
@endif

<script src="https://cdn.tiny.cloud/1/7vu9ptl0tfw1ervuyysz74kgtptr5hp1425mxf74w8u5j5ax/tinymce/6/tinymce.min.js" referrerpolicy="origin"></script>
<script>
  tinymce.init({
    selector: 'textarea.wysiwyg',
    height: 300,
    menubar: false
  });
</script>

<div class="row">
    <div class="col-md-12">
        <div class="card">
            <div class="card-body">
                <form action="" method="post">
                    @csrf
                    <div class="mb-3 row">
                        <img src="{{ asset('images/' . $service->slika) }}" alt="slika" style="max-width: 200px;">
                    </div>
                    <div class="mb-3">
                        <label for="">Naziv</label>
                        <input type="text" value="{{$service->naziv}}" class="form-control" name="naziv">
                    </div>
                    <div class="mb-3">
                        <label for="">Opis</label>
                        <textarea type="text" class="form-control wysiwyg" name="opis" rows="10">{{$service->opis}}</textarea>
                    </div>
                    <div class="mb-3">
                        <label for="">Cena po m²</label>
                        <input type="number" value="{{$service->cena}}" class="form-control" name="cena">
                    </div>
                    <button type="submit" class="btn btn-primary">Izmeni Uslugu</button>
                    <a href="{{route('service.list')}}" class="btn btn-secondary">Nazad</a>
                </form>
            </div>
        </div>
    </div>
</div>

@endsection