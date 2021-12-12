@extends('layouts.main')

@section('container')
    <h4 class="text-center mt-3">Rrgister ... Patient</h4>
    <div class="container col-lg-8">
        <form action="{{ url('patient/'.$model->id) }}" method="POST">
            @csrf
            <div class="mb-3">
                <label for="nama" class="form-label">Vaccine ID</label>
                <input type="text" class="form-control" id="nama" name="nama" value='1' readonly >
            </div>
            <div class="mb-3">
                <label for="nama" class="form-label">Patient Name</label>
                <input type="text" class="form-control" id="nama" name="nama">
            </div>
            <div class="mb-3">
                <label for="nik" class="form-label">NIK</label>
                <input type="text" class="form-control" id="nik" name="nik">
            </div>
            <div class="mb-3">
                <label for="alamat" class="form-label">Alamat</label>
                <input type="text" class="form-control" id="alamat" name="alamat">
            </div>
            <label for="gambar" class="form-label">Image</label>
            <div class="mb-3">
                <input id="formFile" type="file">
            </div>
            <div class="mb-3">
                <label for="nohp" class="form-label">No Hp</label>
                <input type="text" class="form-control" id="nohp" name="nohp">
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
          </form>
    </div>
    
@endsection