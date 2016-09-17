@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <form method="POST" action="invite">
            {!! csrf_field() !!}
            
            <div class="form-group">
                <label class="form-label" for="name">Name </label>
                <input type="text" name="name" id="email-3" value="{{ old('name') }}">
                @if($errors->has('name'))
                    <span>{{$errors->first('name')}}</span>
                @endif
            </div>
            
            <div class="form-group">
                <label class="form-label" for="email-1">Email #1 </label>
                <input type="text" name="email[]" id="email-1" value="{{ old('email.0') }}">
                @if($errors->has('email.0'))
                    <span>{{$errors->first('email.0')}}</span>
                @endif
            </div>
            
            <div class="form-group">
                <label class="form-label" for="email-2">Email #2 </label>
                <input type="text" name="email[]" id="email-2" value="{{ old('email.1') }}">
                @if($errors->has('email.1'))
                    <span>{{$errors->first('email.1')}}</span>
                @endif
            </div>
            
            <div class="form-group">
                <label class="form-label" for="email-3">Email #3 </label>
                <input type="text" name="email[]" id="email-3" value="{{ old('email.2') }}">
                @if($errors->has('email.2'))
                    <span>{{$errors->first('email.2')}}</span>
                @endif
            </div>
            
            
            
            <div >
                <input class='btn btn-primary' type="submit" name="Submit" value="Submit">
            </div>
        </form>
        
        {!! var_dump($errors) !!}
       
    </div>
</div>
@endsection
