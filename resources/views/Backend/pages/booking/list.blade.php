@extends('master')
@section('contents')

<div class="container">
    <table class="table">
    <thead class="thead-dark">
        <tr>
        <th scope="row">1</th>
        <th>sender name</th>
        <th>sender email</th>
        <th>sender phone number</th>
        <th>sender address</th>
        <th>sender branch</th>
        <th>sender city</th>
        <th>Receiver name</th>
        <th>Receiver email</th>
        <th>Receiver phone number</th>
        <th>Receiver address</th>
        <th>Receiver branch</th>
        <th>Receiver city</th>
        <th>Status</th>
        </tr>
    </thead>
    <tbody>
        @foreach($bookingList as $data)
        <tr>
            <th scope="row">{{$data->id}}</th>
            <td>{{$data->sender_name}}</td>
            <td>{{$data->sender_email}}</td>
            <td>{{$data->sender_mobile}}</td>
            <td>{{$data->sender_address}}</td>
            <td>{{$data->sender_branch}}</td>
            <td>{{$data->sender_city}}</td>
            <td>{{$data->receiver_name}}</td>
            <td>{{$data->receiver_email}}</td>
            <td>{{$data->receiver_mobile}}</td>
            <td>{{$data->receiver_address}}</td>
            <td>{{$data->receiver_branch}}</td>
            <td>{{$data->receiver_city}}</td>
            <td>{{$data->status}}</td>

        </tr>
        @endforeach
        
    </tbody>
    </table>
</div>



@endsection