@extends('master')
@section('contents')
<div class="container">
    <table class="table">
    <thead class="thead-dark">
        <tr>
        <th scope="row">1</th>
        <th>booking_id</th>
    
        <th>cargo_id</th>
        </tr>
    </thead>
    <tbody>
    @foreach( $dispatch as $data)
    <tr>
        
         <th scope="row">{{$data->id}}</th>
                <td>{{$data->booking_id}}</td>
                <td>{{$data->cargo_id}}</td>

         
            
    </tr>
    @endforeach
    </tbody>
    </table>

@endsection