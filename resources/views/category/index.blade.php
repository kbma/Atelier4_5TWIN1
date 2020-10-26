@extends('home')
@section('contenu')

<br>
<table class="table table-striped">
    <thead>
    <tr>
        <th scope="col">#</th>
        <th scope="col">Name</th>
        <th scope="col">Created_at</th>
        <th scope="col">Updated_at</th>
    </tr>
    </thead>
    <tbody>

   @foreach( $all as $cat)
    <tr>
        <th scope="row">{{$cat->id}}</th>
        <td>{{$cat->name}}</td>
        <td>{{$cat->created_at}}</td>
        <td>{{$cat->updated_at}}</td>
    </tr>
   @endforeach


    </tbody>
</table>

    {{$all->links('pagination::bootstrap-4')}}


@endsection
