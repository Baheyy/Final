@extends('app')

<style>
    #username{
        text-transform: capitalize;
    }
</style>

@section('content')

<div class="container">

<h1 id="username"> Hello {{$user->name}}</h1>

<button class="btn btn-default">
    <a href="/admin/cards">Create Cards </a></button>
<h1></h1>
@yield('cards')
    <button class="btn btn-default">
        <a href="/admin/bikes">Create Bikes </a></button>
<h1></h1>
@yield('bikes')
    <button class="btn btn-default">
        <a href="/admin/bikestations">Create Bike Stations</a></button>
<h1></h1>
@yield('bikestations')

    <button class="btn btn-default">
        <a href="/admin/viewBikeStations"> View Bike Stations</a>
    </button>

@yield('viewBikeStations')
@yield('viewBikes')
<h1></h1>
    <button class="btn btn-default">
        <a href="/admin/updateMinTime">Update Minimum Time</a></button>

@yield('updateMinTime')

<h1></h1>
    <button class="btn btn-default">
        <a href="/admin/updatePrice">Update Price</a></button>

@yield('updatePrice')

    <h1></h1>
    <button class="btn btn-default">
        <a href="/admin/viewProcesses">View Processes </a></button>

    @yield('viewProcesses')

</div>

@endsection