@extends('master')
@section('content')
<div class="wrapper">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <h2 class="mt-5">Update Record</h2>
                <p>Please edit the input values and submit to update the employee record.</p>
                <form action="{{route('update', [$readArr->id])}}" method="POST">
                    @csrf
                    <div class="form-group">
                        <label>Name</label>
                        <input type="text" name="name" class="form-control" value="{{$readArr->name}}">
                    </div>
                    <div class="form-group">
                        <label>Designation</label>
                        <input type="text" name="designation" class="form-control" value="{{$readArr->designation}}">
                    </div>
                    <button class="btn btn-primary" type="submit" name= "update">Update</button>
    
                </form>

            </div>
        </div>        
    </div>
</div>
@endsection