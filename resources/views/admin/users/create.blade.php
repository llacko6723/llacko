@extends("layout/private")

@section("title") Create User stranica @endsection

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
                        <input type="text" name="ime" id="ime" class="form-control" placeholder="Ime Korisnika">
                        </div>
                    <div class="mb-3">
                        <label for="">Email</label>
                        <input type="email" name="email" class="form-control" placeholder="Email Korisnika">
                    </div>
                    <div class="mb-3">
                        <label for="">Password</label>
                        <input type="password" name="password" class="form-control" placeholder="Password Korisnika">
                    </div>
                    <div class="mb-3">
                        <label for="">Role Korisnika</label>
                        <select name="role_id" id="role_id" class="form-control">
                            <option value="1">1 - Admin</option>
                            <option value="2">2 - Registerd</option>
                            <option value="3">3 - Editor</option>
                        </select>
                    </div>

                    <button type="submit" class="btn btn-primary">Dodaj Radnika</button>
                    <a href="{{route('user.list')}}" class="btn btn-secondary">Nazad</a>
                </form>
            </div>
        </div>
    </div>
</div>

@endsection