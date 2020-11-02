@extends('home')
@section('contenu')

<br>

<h1>Ajouter un nouveau produit</h1>

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


<form method="post" action="{{route('product.store')}}">
    @csrf
    <div class="form-row align-items-center">
        <div class="col-6">
            <label  for="inlineFormInput">Product Name</label>
            <input value="{{old('name')}}" name="name" type="text" class="form-control mb-2" id="inlineFormInput" >
        </div>
        <div class="col-6">
            <label  for="inlineFormInput">Categorie</label>

            <select name="category_id" class="form-control mb-2">
                @foreach(\App\Models\Category::all() as $cat)
                    <option value="{{$cat->id}}" > {{$cat->name}}</option>
                @endforeach()
            </select>
        </div>



    </div>

    <div class="form-row align-items-center">

        <div class="col-6">
            <label  for="inlineFormInput">Description</label>
            <input value="{{old('description')}}" name="description" type="text" class="form-control mb-2"  >
        </div>
        <div class="col-6">
            <label  for="inlineFormInput">Price</label>
            <input value="{{old('price')}}" name="price" type="text" class="form-control mb-2"  >
        </div>

    </div>

    <div class="form-row align-items-center">

        <div class="col-6">
            <label  for="inlineFormInput">Stock</label>
            <input value="{{old('stock')}}" name="stock" type="text" class="form-control mb-2"  >
        </div>


    </div>

    <div class="form-row align-items-center">
        <div class="col-auto">
            <button type="submit" class="btn btn-primary mb-2">Add</button>
        </div>
    </div>

</form>
@endsection
