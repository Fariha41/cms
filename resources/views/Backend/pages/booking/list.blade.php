@extends('master')
@section('contents')

<div class="container">
    <table class="table">
    <thead class="thead-dark">
        <tr>
            <th scope="row">#</th>
            <th>sender name</th>
            <th>sender phone number</th>
            <th>sender address</th>
            <th>Amount</th>
            <th>Receiver name</th>
            <th>Receiver phone number</th>
            <th>Receiver address</th>
            <th>Status</th>
            <th>Action</th>
        </tr>
    </thead>
    <tbody>
        @foreach($bookingList as $key => $data)
        <tr>
            <th scope="row">{{ $key + 1}}</th>
            <td>{{$data->sender_name}}</td>
            <td>{{$data->sender_mobile}}</td>
            <td>{{$data->sender_address}}</td>
            <td>{{$data->enter_amount}}</td>
            <td>{{$data->receiver_name}}</td> 
            <td>{{$data->receiver_mobile}}</td>
            <td>{{$data->receiver_address}}</td>           
            <td>{{$data->status}}</td>
            <td>
                @if($data->status!='delivered')
                <a href="{{route('booking.deliver',$data->id)}}" class="btn btn-sm btn-primary">Delivered</a>
                @endif
                <a href="{{route('admin.booking.delete',$data->id)}}" class="btn btn-sm btn-danger">Delete</a>
                <a href="{{route('admin.booking.view',$data->id)}}" class="btn btn-sm btn-success">View</a>
                <a href="{{route('booking.dispatch',$data->id)}}" class="btn btn-sm btn-success">Dispatch</a>
            </td>

        </tr>
        @endforeach
        
    </tbody>
    </table>
</div>



@endsection