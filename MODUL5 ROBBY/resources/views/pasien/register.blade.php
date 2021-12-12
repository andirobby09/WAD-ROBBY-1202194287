@extends('layouts.main')

@section('container')
    <div class="container">
        <h4 class="text-center">List Vaccine</h4>
        <div class="container">
            <div class="row mt-4">
                @foreach ($vaccines as $vaccine)
                <div class="col-sm-4 mb-4">
                    <div class="card" style="width: 18rem;">
                        <img src="{{ $vaccine['image'] }}" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">{{ $vaccine['name'] }}</h5>
                            <p style="color: gray;">{{ $vaccine['price'] }}</p>
                            <p class="card-text">{{ $vaccine['description'] }}</p>
                        </div>
                        <li class="list-group-item d-grid gap-2">
                            <a href="{{ 'register/'.$vaccine->id.'/create' }}" type="button" class="btn btn-primary btn-sm">Vaccine Now</a>
                        </li>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </div>
@endsection