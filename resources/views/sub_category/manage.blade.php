@extends('layouts.app')

@section('content')
<div class="container-fluid ">
    <div class="row justify-content-center">
        <div class="col-md-10">
            <div class="d-flex justify-content-between">
                <h2>Manage Sub Category</h2>
                <a class="btn btn-success" href="{{ route('home') }}">Home</a>
            </div>
            <br>
            <div class="card p-4">
                <form action="{{ route('sub_category.store') }}" method="post">
                    @csrf
                    <div class="row">
                        <div class="col-md-4">
                            <label for="exampleInputEmail1" class="form-label">Catgory Name</label>
                            <select class="form-select" name="category_id" aria-label="Default select example">
                                <option selected>Select Category</option>
                                @foreach( $categories as $category )
                                    <option value="{{ $category->id }}">{{ $category->cat_name }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="col-md-4">
                            <div class="mb-3">
                                <label for="exampleInputEmail1" class="form-label">Sub Catgory Name</label>
                                <input type="text" class="form-control" name="sub_cat_name" aria-describedby="emailHelp">
                            </div>
                        </div>
                        <div class="col-md-2">
                            <div class="mb-3">
                                <label for="exampleInputPassword1" class="form-label">Status</label>
                                <input type="status" value="1" class="form-control" name="status" readonly>
                            </div>
                        </div>
                        <div class="col-md-2">
                            <div class="mb-3">
                                <label for="exampleInputPassword1" class="form-label">&nbsp;</label>
                                <button type="submit" class="form-control btn btn-primary">Submit</button>
                            </div>
                        </div>
                    </div>

                </form>
            </div>
        </div>
    </div>
</div>
@endsection