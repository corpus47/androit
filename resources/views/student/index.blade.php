@extends('layouts.app')

@section('content')
    <div class="flex justify-center mb-6">
        <div class="w-8/12 bg-white p-6 rounded-lg">
            Students
        </div>
    </div>
    <div class="flex justify-center">
        <div class="w-8/12 bg-white p-6 rounded-lg">
            <table id="students" class="stripe hover" style="width:100%; padding-top: 1em;  padding-bottom: 1em;">
                <thead>
                  <tr>
                    <th>Név</th>
                    <th>Neme</th>
                    <th>Születési dátum</th>
                    <th>Születési hely</th>
                    <th>Email</th>
                    <th>Csoportok</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <td>Kiss Ferenc</td>
                    <td>férfi</td>
                    <td>1970.07.01</td>
                    <td>Budapest</td>
                    <td>kisf@email.me</td>
                    <td>Történelem, Matek</td>
                  </tr>
                  <tr>
                    <td>Nagy Piroska</td>
                    <td>nő</td>
                    <td>1976.06.13</td>
                    <td>Szeged</td>
                    <td>nagypiroska@email.me</td>
                    <td>Történelem, Irodalom</td>
                  </tr>
                </tbody>
            </table>
        </div>
    </div>

@endsection
