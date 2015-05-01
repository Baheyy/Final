@extends('app')
<style>
    body
    {
        background: #DDF;
        font: 1.05em/1.2em 'Myriad Pro', Helvetica, sans-sherif;
    }

    #container
    {
        min-height: 650px;
        width: 960px;
        background: #1EBCFA;
        color: #000;
        margin: 0px auto;
        padding: 20px;
        -webkit-border-radius: 10px;
        -moz-border-radius: 10px;
        border-radius: 10px;
    }

    #buttons {
        text-align: center;
    }



    #buttons a {
        background: #428bca;
        display: block;
        height: 40px;
        width: 450px;
        overflow: hidden;
        text-decoration: none;
        -webkit-border-radius: 10px;
        -moz-border-radius: 10px;
        border-radius: 10px;
        border: 1px solid #FFF;
        margin: 15px 5px;
    }

    #buttons h6{
        opacity: 1;
        color: #FFF;
        font: 1.40em/40px 'Myriad Pro', Helvetica, sans-sherif;
        margin: 0px;
        padding: 0px;
        text-transform: Capitalize;
        -webkit-transition: all .3s linear;
        -moz-transition: all .3s linear;
        -o-transition: all .3s linear;
        transition: all .3s linear;
    }

    #buttons div{
        opacity: 0;
        color: #FFF;
        height: 40px;
        background: #204d74;
        line-height: 40px;
        -webkit-transition: all .2s linear;
        -moz-transition: all .2s linear;
        -o-transition: all .2s linear;
        transition: all .2s linear;
    }

    #buttons a:hover h6{
        margin-top: -40px;
    }

    #buttons a:hover div{
        opacity: 1;
    }
    #username{
        font: 2.8em/40px 'Myriad Pro', Helvetica, sans-sherif;
        text-transform: capitalize;
    }
</style>
@section('content')

<div class="container">
        <h1 id="username"> Hello {{$user->name}}</h1>
    <div id="buttons">
        <a href="/Customer/RentABike"> <h6> Ride a bike! </h6>
            <div>
                Are you ready for one hell of a ride?
            </div>
        </a>
    </div>
    @yield('RentABike')
    <div id="buttons">
        <a href="/Customer/ViewRentedBikes"> <h6> View rented bikes! </h6>
            <div>
                Can't remember what bikes you rented? We do!
            </div>
        </a>
    </div>
    @yield('ViewRentedBikes')
    <div id="buttons">
        <a href="/Customer/ParkABike"> <h6> Park a bike! </h6>
            <div>
                So soon?
            </div>
        </a>
        </div>
        @yield('ParkABike')


    <div id="buttons">
        <a href="/Customer/ViewBikesInStation"><h6> View Bike Stations! </h6>

            <div>
                Gotta view'em all!
            </div>
        </a>
    </div>

@yield('viewBikeStations')
<div id="buttons">
    <a href="/Customer/OutstandingPrice"> <h6> View outstanding price! </h6>
        <div>
            No, please no, not this button!
        </div>
    </a>
    <h1></h1>
</div>
    @yield('OutstandingPrice')
<div id="buttons">
    <a href="/Customer/OutstandingTime"> <h6> View outstanding time! </h6>
        <div>
            Accuracy at its finest.
        </div>
    </a>
    <h1></h1>
</div>
    @yield('OutstandingTime')
    <div id="buttons">
        <a href="/Customer/viewCustomerProcesses"><h6> View Processes! </h6>

            <div>
                Proof.
            </div>
        </a>
    </div>
    @yield('viewCustomerProcesses')
</div>
</div>



@endsection