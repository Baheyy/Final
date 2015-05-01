@extends('app')
@section('content')

{!! Form::open(['url' => 'login']) !!}

<div class ="container">


    <div class = "form-group">

        {!! Form::label('email', 'E-mail Address:') !!}
        {!! Form::text('email', null, ['class' => 'form-control']) !!}

    </div>

    <div class = "form-group">

        {!! Form::label('password', 'Password:') !!}
        {!! Form::password('password', ['class' => 'form-control']) !!}

    </div>

    <h1></h1>
    <div class = "form-group">
            {!! Form::submit('Submit', ['class' => 'btn btn-primary form-control'] ) !!}

    </div>
<!--
        <div id="buttons">
            <a href="postLogin"> <h6> Login </h6>
                <div>
                    Ready for one hell of a ride?
                </div>
            </a>
        </div>
-->

@include('errors/list')

</div>

{!! Form::close() !!}



@endsection