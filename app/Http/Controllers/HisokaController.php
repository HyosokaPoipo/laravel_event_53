<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Events\ActionDone;
use App\Http\Requests;
use Log;
use Event;


class HisokaController extends Controller
{
    public function trigger()
    {
        log::info("Start of Triggering Event");
        Event::fire(new ActionDone());

        return redirect()->back();
    }
}
