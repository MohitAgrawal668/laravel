@extends('layouts.main')
@push('title')
    <title>laravel Form Example</title>   
@endpush
@section('main-section')
    <form action="{{url('/')}}/register/" method="post">
        @csrf
        <h1>Form example</h1>
        <x-input type="text" name="name" label="Name" value="{{ old('name') }}"/>
        <small id="helpId" class="text-danger">
            @error("name")
                {{ $message }}
            @enderror
          </small>
        <x-input type="email" name="email" label="email" value="{{ old('email') }}"/>
        <small id="helpId" class="text-danger">
            @error("email")
                {{ $message }}
            @enderror
          </small>
        <x-input type="password" name="password" label="Password" />
        <small id="helpId" class="text-danger">
            @error("password")
                {{ $message }}
            @enderror
          </small>  
        <x-input type="password" name="confirm-password" label="Confirm Password" />
        <small id="helpId" class="text-danger">
            @error("confirm-password")
                {{ $message }}
            @enderror
          </small>
        <button type="submit" class="btn btn-primary" name="">Submit</button>  
    </form>
@endsection