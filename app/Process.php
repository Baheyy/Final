<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Process extends Model {

    protected $fillable = ['card_id', 'bike_id', 'station_from', 'hotel', 'start_time'];

}
