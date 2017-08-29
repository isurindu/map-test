<?php

namespace App\Http\Controllers;

use App\Events\TestEvent;
use Illuminate\Http\Request;

class TestMapController extends Controller
{
    public function run()
    {
        event(new TestEvent('hello world'));
    }
}
