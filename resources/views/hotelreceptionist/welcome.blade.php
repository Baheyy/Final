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
        <a href="/authentication/register"><h6> Create a new user! </h6>

            <div>
                $$$$$$$
            </div>
        </a>
    </div>
    @yield('register')

    <div id="buttons">
        <a href="/hotelreceptionist/viewCards"><h6> View cards! </h6>

            <div>
                All the current cards by IDs.
            </div>
        </a>
    </div>
    @yield('viewCards')
    <div id="buttons">
        <a href="/hotelreceptionist/viewCustomersData"><h6> View customer data! </h6>

            <div>
                View each customer's financial data.
            </div>
        </a>
    </div>

    @yield('viewCustomersData')

    <h1></h1>

    @yield('viewEachCustomerData')

    <div id="buttons">
        <a href="/hotelreceptionist/viewHotelProcesses"><h6> View Hotel Processes! </h6>

            <div>
                Track.
            </div>
        </a>
    </div>
    @yield('viewHotelProcesses')

</div>
@endsection
