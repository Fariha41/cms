@extends('master')
@section('contents')

<div class="container">
    <table class="table">
    <thead class="thead-dark">
        <tr>
        <th scope="row">1</th>
        <th>sender name</th>
    
        <th>sender phone number</th>
        <th>sender address</th>
       
        <th>Receiver name</th>
        
        <th>Receiver phone number</th>
        <th>Receiver address</th>
       

        <th>Status</th>
        <th>Action</th>
        </tr>
    </thead>
    <tbody>
        @foreach($bookingList as $data)
        <tr>
            <th scope="row">{{$data->id}}</th>
            <td>{{$data->sender_name}}</td>
           
            <td>{{$data->sender_mobile}}</td>
            <td>{{$data->sender_address}}</td>
           
            <td>{{$data->receiver_name}}</td>
            
            <td>{{$data->receiver_mobile}}</td>
            <td>{{$data->receiver_address}}</td>
           
            
            <td>{{$data->status}}</td>
            <td>
                <a href="{{route('booking.edit',$data->id)}}" class="btn btn-primary">Update</a>
                <a href="{{route('admin.booking.delete',$data->id)}}" class="btn btn-danger">Delete</a>
                <a href="{{route('admin.booking.view',$data->id)}}" class="btn btn-success">View</a>
            </td>

        </tr>
        @endforeach
        
    </tbody>
    </table>
</div>



@endsection