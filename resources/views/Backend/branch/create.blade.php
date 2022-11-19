@extends('master') 
@section('contents')
<form action="{{route('branch.store')}}" method="post">


<div class="form-group">
@csrf

            <label for="name">Brance Name</label>
            <input required name="Brance_name" type="text" class="form-control" id="name" placeholder="Brance Name">
            
        </div>

        <div class="form-group">
            <label for="name">Brance phone</label>
            <input name="Branch_phone"type="text" class="form-control" id="name"placeholder="Brance phone">
        </div>

        <div class="form-group">
            <label for="name">Brance address</label>
            <input name="Brance_address" type="text" class="form-control" id="name" placeholder="Brance address">

            
        </div>

        <div class="form-group">
            <label for="">Select Status</label>
            <select name="Branch_status" id="" class="form-control">
                <option value="active">Active</option>
                <option value="inactive">Inactive</option>
            </select>
        </div>
       
        

        <button type="submit" class="btn btn-primary">Submit</button>
</form>
@endsection