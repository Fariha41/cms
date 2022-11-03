@extends('master')
@section('contents')
<h1>Admin Form</h1>
<form action="{{route('admin.store')}}"method="post">
    @csrf
   
        
        <div class="form-group">
            <label for="name">Name</label>
            <input type="text" name="name">
        </div>
        <div class="form-group">
            <label for="name">email</label>
            <input type="text" name="email">
        </div> 
        <div class="form-group">
            <label for="name">phone_number</label>
            <input  type="select" name="phone">
        </div> 
        <div class="form-group">
            <label for="name">address</label>
            <input  type="text" name="address">
        </div>

       

        <button type="submit" class="btn btn-primary">Submit</button>
    </form>

@endsection