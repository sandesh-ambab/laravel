
@extends('master')
@section('content')  
<div class="container text-center bg-light mt-3"> 
    <div id="msg"></div>
    <h1 class="bg-dark text-light">CRUD Operations using PHP</h1><br>
    @if(Session::has('success'))
        <div class="alert alert-success" role="alert">
            {{Session::get('success')}}
        </div>
    @endif
    <form method="POST" action="index">
        @csrf
        <input type="text" class= "text-center" name="name" id="name" placeholder="Your name" required>
        <input type="text" class= "text-center" name="designation" id="designation" placeholder="Your description" required>
        <button class="btn btn-primary" id="submit" type="submit" name= "submit">ADD</button><br><br>
    </form>
    @include('read')

</div>
@endsection
