@extends('layouts.main')


@section('container')

  <div class='container text-center mt-5' style='color: grey;'>
    <p>There is no data..</p>
    <a href='{{ url('vaksin/create') }}' type='button' class='btn btn-primary btn-sm'>Add Vaccine</a>
  </div>

  <div class="container">
    <h4 class="text-center mt-4">List Vaccine</h4>
    <a href="{{ url('vaksin/create') }}" type="button" class="btn btn-primary btn-sm">Add Vaccine</a>
    <table class="table table-info border border-dark border-2 mt-2">
      <thead>
        <tr>
          <th scope="col">#</th>
          <th scope="col">Name</th>
          <th scope="col">Price</th>
          <th scope="col">Action</th>
        </tr>
      </thead>
      <tbody>
        @foreach ($vaccines as $vaccine)
        <tr>
          <th scope="row">{{ $vaccine->id }}</th>
          <td>{{ $vaccine->name }}</td>
          <td>{{ $vaccine->price }}</td>
          <td>
            <a href="{{ 'vaksin/'.$vaccine->id.'/edit' }}" type="button" class="btn btn-warning btn-sm">Edit</a>
            <form action="{{ url('vaksin/'.$vaccine->id) }}" method="POST" class="d-inline">
              @csrf
              <input type="hidden" name="_method" value="DELETE">
              <button type="a" class="btn btn-danger btn-sm" onclick="return confirm('Ingin Menghapus Data ini ?')">Delete</button>
            </form>
          </td>
        </tr>
        @endforeach
      </tbody>
    </table>
  </div>

  
@endsection