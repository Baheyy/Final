@extends('admin.welcome')
@section('bikestations')

<h1></h1>
<h1></h1>
{!! Form::open(['url' => 'CreateBikeStations']) !!}

<div class ="container">

    <div class = "form-group"">
    {!! Form::label('BatchSize', 'Batch size:') !!}
    {!! Form::text('BatchSize', null, $attributes = ['class' => 'form-control', 'placeholder' => 'Please enter how many bikes the station can hold here']) !!}
</div>


<div class = "form-group"">
{!! Form::label('location', 'Location:') !!}
{!! Form::text('location', null, $attributes = ['class' => 'form-control', 'placeholder' => 'Please enter the bike station\'s name here (should be the same as the hotel\'s)']) !!}
</div>

<div class = "form-group"">
{!! Form::label('maxCapacity', 'Max Capacity:') !!}
{!! Form::text('maxCapacity', null, $attributes = ['class' => 'form-control', 'placeholder' => 'Please enter how many bikes the station can hold here']) !!}
</div>

<div class = "form-group"">
{!! Form::label('functional', 'Functional:') !!}
{!! Form::text('functional', null, $attributes = ['class' => 'form-control', 'placeholder' => 'Is the station ready to work? Please enter true/false']) !!}
</div>

<div class = "form-group">

    {!! Form::submit(null, ['class' => 'btn btn-primary form-control']) !!}

</div>

@include('errors/list')

</div>

@endsection