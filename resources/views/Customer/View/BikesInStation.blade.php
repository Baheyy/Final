@extends('Customer.welcome')
@section('viewBikeStations')
<h1></h1>
@foreach($bikes as $bike)
<div class="container">
<ul>
    <li>
        {{$bike['type']}}
    </li>
</ul>
</div>

@endforeach

@endsection