@extends ('layouts.app')

@section('title')
    Mon compte
@endsection

@section('content')
    <main class="container">

        <h1>Mon compte</h1>

        <h3 class="pb-3">Modifier mes informations</h3>
        <div class="row">

            <form class="col-4 mx-auto" action="{{ route('users.update', $user) }}" method="POST">
                @csrf
                @method('PUT')

                <div class="form-group">
                    <label for="name">Nouveau nom</label>
                    <input required type="text" class="form-control" placeholder="modifier" name="name" value="{{ $user->name }}" id="pseudo">
                </div>

                <button type="submit" class="btn btn-primary">Valider</button>
            </form>

            <form action="{{route('users.destroy', $user)}}" method="post">
                @csrf
                @method("delete")
                <button type="submit" class="btn btn-danger">Supprimer le compte</button>
            </form>
        </div>
    </main>

    @endsection