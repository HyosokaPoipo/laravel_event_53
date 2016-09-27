<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use Log;


class HisokaController extends Controller
{
    public function trigger()
    {
        log::info("Start of Triggering Event");
    }
}
