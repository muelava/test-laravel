@extends('layouts.app-master')

@section('content')
    <div class="bg-light p-5 rounded">
        @auth

          <table class="table table-dark table-striped">
            <thead>
              <tr>
                <th scope="col">No</th>
                <th scope="col">NRP</th>
                <th scope="col">Nama</th>
                <th scope="col">Jenis Kelamin</th>
                <th scope="col">Jabatan</th>
                <th scope="col">Username Input</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <th scope="row">2</th>
                @for ($i = 1; $i <= 5; $i++)
                <td>Data {{ $i }}</td>
                @endfor
              </tr>
             </tbody>
          </table>


        @endauth

        @guest
        <h1>Homepage</h1>
        <p class="lead">Your viewing the home page. Please login to view the restricted data.</p>
        @endguest
    </div>
@endsection