@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                        <div class="dropdown">
                            <button class="btn btn-primary dropdown-toggle" type="button" id="Categories" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                Categories
                            </button>
                            <div class="dropdown-menu" aria-labelledby="Categories">
                                <a class="dropdown-item" href="{{route('category.index')}}">Ajouter</a>
                                <a class="dropdown-item" href="#">Lister</a>
                                <a class="dropdown-item" href="#">Rechercher</a>
                            </div>
                        </div>


                    @yield('contenu')



                </div>
            </div>
        </div>
    </div>
</div>
@endsection
