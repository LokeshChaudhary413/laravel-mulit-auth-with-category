@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <nav class="navbar navbar-expand-lg navbar-light bg-light">
                        <div class="container-fluid">
                            <a class="navbar-brand" href="#">
                                @if(auth()->user()->is_admin == 1)
                                {{ __('Admin Dashboard') }}
                                @else
                                {{ __('Normal Dashboard') }}
                                @endif
                            </a>
                            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                                <span class="navbar-toggler-icon"></span>
                            </button>
                            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                                    
                                    @foreach( $categories as $category)
                                    <li class="nav-item dropdown">
                                        <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                        {{ $category->cat_name }}
                                        </a>
                                        @if(count($category->subcategory) > 0)
                                        <ul class="dropdown-menu">
                                            @foreach( $category->subcategory as $cat_val)
                                                <li><a class="dropdown-item" href="#">{{ $cat_val->sub_cat_name }}</a></li>
                                            @endforeach  
                                        </ul>
                                        @endif
                                    </li>                                    
                                    @endforeach
                                </ul>
                                <div class="d-flex">
                                    @if(auth()->user()->is_admin == 1)

                                    <a class="btn btn-success" href="{{ route('category.index') }}">Add Category</a>&nbsp;
                                    <a class="btn btn-success" href="{{ route('sub_category.index') }}">Add Sub Category</a>
                                    @endif
                                </div>

                            </div>
                        </div>
                    </nav>


                </div>

                <div class="card-body">
                    @if (session('status'))
                    <div class="alert alert-success" role="alert">
                        {{ session('status') }}
                    </div>
                    @endif



                </div>
            </div>
        </div>
    </div>
</div>
@endsection