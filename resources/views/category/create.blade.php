@extends('home')
@section('contenu')

<br>

<h1>Ajouter une nouvel categorie</h1>

<div class="row">
    <div class="col">
        @if(count($errors))
            <div class="alert alert-danger">
                <ul>
                    @foreach($errors->all() as $m)
                        <li>{{$m}}</li>
                    @endforeach
                </ul>

            </div>
        @endif
    </div>

</div>



<form method="POST" class="form-inline" action="{{route('category.store')}}">
    @csrf
    <div class="form-group mx-sm-3 mb-2">
        <label for="inputPassword2" class="sr-only">Name</label>
        <input type="text" class="form-control" name="name" placeholder="Name" value="{{old('name')}}">
    </div>
    <input type="submit" class="btn btn-primary mb-2" value="Add"/>
</form>
@endsection
