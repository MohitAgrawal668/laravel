@extends('layouts.main')
@push('title')
    <title>Register Customer</title>
@endpush
@section('main-section')
    <form action="{{url('/')}}/customer/" method="post">
        @csrf
        <h1>Register Your Self</h1>
        <div class="row">
            <x-input type="text" name="name" label="Your Name" value="{{old('name')}}"/>
            <small id="helpId" class="text-muted">
                @error("name")
                   {{ $message }}
                @enderror
           </small>
            <x-input type="email" name="email" label="Your Email" value="{{old('email')}}"/>
            <small id="helpId" class="text-muted">
                @error("email")
                   {{ $message }}
                @enderror
           </small>
            <x-input type="text" name="mobile" label="Your Mobile" value="{{old('mobile')}}"/>
            <small id="helpId" class="text-muted">
                @error("mobile")
                   {{ $message }}
                @enderror
           </small>
            <x-input type="password" name="password" label="Your Password"/>
            <small id="helpId" class="text-muted">
                @error("password")
                   {{ $message }}
                @enderror
           </small>
            <x-input type="password" name="confirm_password" label="Confirm Password" />  
            <small id="helpId" class="text-muted">
                @error("confirm_password")
                   {{ $message }}
                @enderror
           </small>
            <div class="col-md-12">
                <div class="form-group">
                    <label for="">Your Address</label>
                    <textarea name="address" id="" cols="30" rows="2" class="form-control">{{old('address')}}</textarea>
                    <small id="helpId" class="text-muted">
                         @error("address")
                            {{ $message }}
                         @enderror
                    </small>
                </div>
            </div>  
            <button type="submit" class="btn btn-primary" name="submit">Submit</button>
        </div>              
    </form>
@endsection