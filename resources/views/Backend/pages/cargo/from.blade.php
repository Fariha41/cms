@extends('master')
@section('contents')
<form action="{{route('cargo.stores')}}" method="post"> 


<div class="form-group">
@csrf

            <label for="name">Vehicle Number</label>
            <input  required name="vehicle_number" type="text" class="form-control" id="name" placeholder="vehicle number" >
            
        </div>
        <div class="form-group">
            <label for="name">Drivers Name</label>
            <input required  name="drivers_name" type="text" class="form-control" id="name"placeholder="drivers name">
        </div>

        <div class="form-group">
            <label for="name">Drivers License</label>
            <input required  name="drivers_license" type="text" class="form-control" id="name" placeholder="drivers license">

            
       

        <div class="form-group">
            <label for="">Select Status</label>
            <select name="cargo_status" id="" class="form-control">
                <option > Active</option>
                <option>Inactive</option>
            </select>
        </div>
       
        

        <button type="submit" class="btn btn-primary">Submit</button>
</form>
@endsection