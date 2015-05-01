<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\OutstandingPayment;
use App\OutstandingTime;
use Auth;
use App\User;
use App\Card;
use Illuminate\Http\Request;
use App\Process;
use Symfony\Component\Console\Formatter\OutputFormatterStyle;

class HotelReceptionistController extends Controller {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
        $user = Auth::User();
		return view('hotelreceptionist.welcome', compact('user'));
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		//
	}

    /**
     * @return \Illuminate\View\View
     * Views the available cards.
     */

    public function viewCards()
    {
        $user = Auth::User();
        $cards = Card::all();
        return view('hotelreceptionist.viewCards', compact('cards'), compact('user'));
    }

    /**
     * @return \Illuminate\View\View
     * Views all the customers who are associated with the location associated with the signed in hotel receptionist.
     */

    public function viewCustomersData()
    {
        $user = Auth::User();
        $customers = User::where('location', $user->location)->where('type', 0);
        $customers = $customers->lists('card_id');
        return view('hotelreceptionist.viewCustomersData', compact('user'), compact('customers'));
    }

    /**
     * @param $card_id
     * @return \Illuminate\View\View
     * Views the financial data of a certain customer by their card_ids.
     */

    public function viewEachCustomerData($card_id)
    {
        $user = Auth::User();
        $customer = User::where('card_id', $card_id)->first();
        $customer_card_id = $customer->card_id;
        $outstandingPrice = OutstandingPayment::where('card_id', $customer_card_id)->first();
        $outstandingPrice = $outstandingPrice->outstanding_price;
        $outstandingTime = OutstandingTime::where('card_id', $customer_card_id)->first();
        $outstandingTime = $outstandingTime->outstanding_time;
        return view('hotelreceptionist.viewEachCustomerData', compact('user', 'customer', 'outstandingPrice', 'outstandingTime'));
    }

    /**
     * @return \Illuminate\View\View
     * Views all the processes done by all users in the hotel in a table layout.
     */

    public function viewHotelProcesses()
    {
        $user = Auth::User();
        $processes = Process::where('hotel', $user->location)->get();

        $totalPayments = OutstandingPayment::all();

        $sum = 0;

        foreach($totalPayments as $totalPayment)
        {
            $card_id = $totalPayment->card_id;
            $customer = User::where('card_id', $card_id)->first();

            if($customer->location == $user->location)
                $sum += $totalPayment->outstanding_price;
        }

        $total = 0;
        $totalTimes = OutstandingTime::all();
        foreach($totalTimes as $totalTime)
        {
            $card_id = $totalTime->card_id;
            $customer = User::where('card_id', $card_id)->first();
            if($customer->location == $user->location)
                $total += $totalTime->outstanding_time  ;
        }

        $totalPayments = number_format($sum, 2);
        $totalTimes = number_format($total, 2);

        return view('hotelreceptionist.viewHotelProcesses', compact('user', 'processes', 'totalPayments', 'totalTimes'));
    }

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		//
	}

	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		//
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		//
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		//
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		//
	}

}
