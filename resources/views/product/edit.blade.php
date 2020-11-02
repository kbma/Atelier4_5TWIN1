@extends('home')
@section('contenu')

<br>

<h1>Modifier la categorie {{$id}}</h1>

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



<form method="POST" class="form-inline" action="{{route('category.update',$id)}}">
    @csrf
    @method('put')
    <div class="form-group mx-sm-3 mb-2">
        <label for="inputPassword2" class="sr-only">Name</label>
        <input type="text" class="form-control" name="name" placeholder="Name" value="{{\App\Models\Category::find($id)->name}}">
    </div>
    <input type="submit" class="btn btn-primary mb-2" value="Update"/>
</form>
@endsection
