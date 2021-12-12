@extends('layouts.main')

@section('container')
    <h4 class="text-center mt-4">Edit Vaccine</h4>
    <div class="container col-lg-8">
        <form action="{{ url('vaksin/'.$model->id) }}" method="POST">
            @csrf
            <input type="hidden" name="_method" value="PATCH" enctype="multipart/form-data">
            <div class="mb-3">
                <label for="name" class="form-label">Vaccine Name</label>
                <input type="text" class="form-control" id="name" name="name" value="{{ $model->name }}">
            </div>
            <div class="mb-3">
                <label for="price" class="form-label">Price</label>
                <div class="input-group">
                    <div class="input-group-text">Rp</div>
                    <input type="text" class="form-control" id="price" name="price" value="{{ $model->price }}">
                </div>
            </div>
            <div class="mb-3">
                <label for="description" class="form-label">Description</label>
                <textarea class="form-control" id="description" name="description" rows="3"required>{{ $model->description }}</textarea>
            </div>
            <label for="gambar" class="form-label">Image</label>
            <div class="mb-3">
                <input id="formFile" type="file" name="image" required>
            </div>
            <button type="submit" class="btn btn-primary">Update</button>
          </form>
    </div>
@endsection