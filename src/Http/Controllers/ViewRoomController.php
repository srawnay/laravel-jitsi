<?php

namespace Srawnay\LaravelJitsi\Http\Controllers;

use Srawnay\LaravelJitsi\LaravelJitsiFacade as Jitsi;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;

class ViewRoomController extends Controller
{
    /**
     * Handle the incoming request.
     *
     * @param \Illuminate\Http\Request $request
     * @param string $room
     * @return \Illuminate\View\View
     */
    public function index(Request $request, $room = null)
    {
        return Jitsi::viewRoom($room, $request->user());
    }
}
