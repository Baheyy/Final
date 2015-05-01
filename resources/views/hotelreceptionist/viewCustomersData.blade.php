@extends('hotelreceptionist.welcome')
@section('viewCustomersData')
<h1></h1>

@foreach($customers as $customer)
<ul>
    <li>
        <a href="{{ url('/customers', $customer)}}"> {{$customer}} </a>
    </li>
</ul>
@endforeach

@endsection