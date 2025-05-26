@extends("layout/private")

@section("title")
Edit Korisnika
@endsection

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
                        <input type="text" value="{{$user->ime}}" class="form-control" name="ime">
                    </div>
                    <div class="mb-3">
                        <label for="">Email</label>
                        <input type="text" value="{{$user->email}}" class="form-control" name="email">
                    </div>
                    <div class="mb-3">
                        <label for="">Role</label>
                        <select name="role_id" class="form-control">
                            <option value="1" {{ $user->role_id == 1 ? 'selected' : '' }}>1 - Admin</option>
                            <option value="2" {{ $user->role_id == 2 ? 'selected' : '' }}>2 - Registered</option>
                            <option value="3" {{ $user->role_id == 3 ? 'selected' : '' }}>3 - Editor</option>
                        </select>
                    </div>
                    <button type="submit" class="btn btn-primary">Izmeni Uslugu</button>
                    <a href="{{route('user.list')}}" class="btn btn-secondary">Nazad</a>
                </form>
            </div>
        </div>
    </div>
</div>

@endsection