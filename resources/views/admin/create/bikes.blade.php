@extends('admin.welcome')
@section('bikes')

<h1></h1>
<h1></h1>
{!! Form::open(['url' => 'CreateBikes']) !!}

<div class ="container">

    <div class = "form-group"">
        {!! Form::label('type', 'Type:') !!}
        {!! Form::text('type', null, $attributes = ['class' => 'form-control', 'placeholder' => 'Please enter the bike type here (e.g. Peugeot)']) !!}
    </div>

    <div class = "form-group"">
        {!! Form::label('bike_station_id', 'Bike Station ID:') !!}
        {!! Form::text('bike_station_id', null, $attributes = ['class' => 'form-control', 'placeholder' => 'Please enter the bike station ID here']) !!}
    </div>

    <div class = "form-group"">
        {!! Form::label('vendor', 'Vendor:') !!}
        {!! Form::text('vendor', null, $attributes = ['class' => 'form-control', 'placeholder' => 'Please enter the vendor  name here (e.g. Bisceletta)']) !!}
    </div>

    <div class = "form-group"">
        {!! Form::label('features', 'Features:') !!}
        {!! Form::text('features', null, $attributes = ['class' => 'form-control', 'placeholder' => 'Please enter the bike\'s features here']) !!}
    </div>

    <div class = "form-group"">
        {!! Form::label('model', 'Model Number:') !!}
        {!! Form::text('model', null, $attributes = ['class' => 'form-control', 'placeholder' => 'Please enter the bike\'s model number here']) !!}
    </div>

<div class = "form-group">

    {!! Form::submit(null, ['class' => 'btn btn-primary form-control']) !!}

</div>

@include('errors/list')

</div>

@endsection