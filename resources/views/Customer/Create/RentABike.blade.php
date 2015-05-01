@extends('Customer.welcome')
@section('RentABike')

<h1></h1>
<h1></h1>
{!! Form::open(['url' => 'RentABike']) !!}

<div class ="container">



<div class = "form-group"">
    {!! Form::label('bike_station_id', 'Bike Station:') !!}
    {!! Form::select('bike_station_id', $bikestations->lists('location'), null, ['class' => 'form-control']) !!}
</div>

<div class = "form-group"">
    {!! Form::label('bike_id', 'Bike ID:') !!}
    {!! Form::select('bike_id', $bikes->lists('type'), null, ['class' => 'form-control']) !!}
</div>

<div class = "form-group"">
    {!! Form::label('card_id', 'Card ID:') !!}
    {!! Form::text('card_id', null, ['class' => 'form-control']) !!}
</div>



<div class = "form-group">
    {!! Form::submit(null, ['class' => 'btn btn-primary form-control']) !!}
</div>

@include('errors/list')

</div>

@endsection