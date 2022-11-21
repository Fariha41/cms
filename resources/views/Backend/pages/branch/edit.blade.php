
@extends('master')
@section('contents')
<form action="{{route('branch.update',$branch->id)}}" method="post">
@method('put')


<div class="form-group">
@csrf

            <label for="name">Brance Name</label>
            <input value="{{$branch->Brance_name}}" required name="Brance_name" type="text" class="form-control" id="name" placeholder="Brance Name" >
            
        </div>

        <div class="form-group">
            <label for="name">Brance phone</label>
            <input value="{{$branch->Branch_phone}}" name="Branch_phone"type="text" class="form-control" id="name"placeholder="Brance phone">
        </div>

        <div class="form-group">
            <label for="name">Brance address</label>
            <input value="{{$branch->Branch_address}}" name="Brance_address" type="text" class="form-control" id="name" placeholder="Brance address">

            
        </div>

        <div class="form-group">
            <label for="">Select Status</label>
            <select name="Branch_status" id="" class="form-control">
                <option @if($branch->Branch_status=='active') selected @endif value="active">Active</option>
                <option @if($branch->Branch_status=='inactive') selected @endif value="inactive">Inactive</option>
            </select>
        </div>
       
        

        <button type="submit" class="btn btn-primary">Submit</button>
</form>
@endsection