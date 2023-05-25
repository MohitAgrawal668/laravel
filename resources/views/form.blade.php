@extends('layouts.main')
@push('title')
    <title>laravel Form Example</title>   
@endpush
@section('main-section')
    <form action="{{url('/')}}/register/" method="post">
        @csrf
        <h1>Form example</h1>
        <div class="form-group">
          <label for="">Name</label>
          <input type="text" name="name" id="name" class="form-control" placeholder="" aria-describedby="helpId">
          <small id="helpId" class="text-muted"></small>
        </div>
        
        <div class="form-group">
            <label for="">Email</label>
            <input type="text" name="email" id="email" class="form-control" placeholder="" aria-describedby="helpId">
            <small id="helpId" class="text-muted"></small>
        </div>
        
        <div class="form-group">
            <label for="">Password</label>
            <input type="text" name="password" id="password" class="form-control" placeholder="" aria-describedby="helpId">
            <small id="helpId" class="text-muted"></small>
        </div>
        <div class="form-group">
            <label for="">Confirm Password</label>
            <input type="text" name="confirm-password" id="confirm-password" class="form-control" placeholder="" aria-describedby="helpId">
            <small id="helpId" class="text-muted"></small>
        </div>
        <button type="submit" class="btn btn-primary" name="">Submit</button>  
    </form>
@endsection