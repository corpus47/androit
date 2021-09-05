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
                  <tr>
                    <td>teszt</td>
                    <td>teszt</td>
                    <td>teszt</td>
                    <td>teszt</td>
                    <td>teszt</td>
                  </tr>
                </tbody>
            </table>
        </div>
    </div>
@endsection
