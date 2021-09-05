@extends('layouts.app')

@section('content')
    <div class="flex justify-center mb-6">
        <div class="w-8/12 bg-white p-6 rounded-lg">
            Dashboard
        </div>
    </div>
    <div class="flex justify-center">
        <div class="w-8/12 bg-white p-6 rounded-lg">
            <table id="users" class="stripe hover" style="width:100%; padding-top: 1em;  padding-bottom: 1em;">
                <thead>
                  <tr>
                    <th>Név</th>
                    <th>Felhasználónév</th>
                    <th>Email</th>
                    <th>Regisztrálva</th>
                    <th>Módosítva</th>
                  </tr>
                </thead>
                <tbody>
                  @foreach($users as $user)
                    <tr>
                        <td>{{ $user['name'] }}</td>
                        <td>{{ $user['username'] }}</td>
                        <td>{{ $user['email'] }}</td>
                        <td>{{ $user['created_at'] }}</td>
                        <td>{{ $user['updated_at'] }}</td>
                    </tr>
                  @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection
