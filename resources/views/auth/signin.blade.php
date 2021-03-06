@extends('template.template')
@section('title', 'Sign up')



@section('content')

    <div class="col-lg-5">
        <h2>Login</h2>
        {{Form::open( array(
            'route' =>  'login',
            'class' =>  'form-vertical',
            'role'  =>  'form',
        ) )}}

        <div class="form-group {{ $errors->has('email') ? 'has-error' : '' }}">
            {{Form::label('email', 'Email Address')}}
            {{Form::text('email', Request::old('email') ? : '' , array(
                'class' =>  'form-control',
                'id'    =>  'email',
                'placeholder'   =>  'Enter Email Address',
            ))}}

            <!-- show errors -->
            @if($errors->has('email'))
                <span class="help-block">{{ $errors->first('email') }}</span>
            @endif
        </div>


        <div class="form-group {{ $errors->has('email') ? 'has-error' : '' }}">
            {{Form::label('password', 'Password')}}
            {{Form::password('password', array(
                'class' =>  'form-control',
                'id'    =>  'password',
                'placeholder'   =>  'Enter Password',
            ))}}

            <!-- show errors -->
            @if($errors->has('password'))
                <span class="help-block">{{ $errors->first('password') }}</span>
            @endif
        </div>

        <div class="checkbox">
            <label>
              {{ Form::checkbox('remember', null, false) }} Remember me
            </label>
        </div>

        <input type="hidden" name="_token" value="{{ Session::token() }}" />

        <div class="form-group">
            {{Form::submit('Login', array(
                'class' =>  'btn btn-primary',
            ))}}
        </div>
        {{ Form::close() }}
    </div>
@endsection
