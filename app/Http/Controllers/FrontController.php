<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FrontController extends Controller
{
    public function index()
    {
        return view('index');
    }

    public function aboutUs()
    {
        return view('about_us');
    }

    public function boutique()
    {
        return view('boutique');
    }

    public function business()
    {
        return view('business');
    }

    public function eventWedding()
    {
        return view('events');
    }

    public function eventGeneral()
    {
        return view('events');
    }

    public function experiencies()
    {
        return view('experiencies');
    }

    public function gastro()
    {
        return view('gastro');
    }

    public function rooms()
    {
        return view('rooms');
    }

    public function roomDetail()
    {
        return view('room_detail');
    }

    public function terms()
    {
        $text = 'Terminos y Condiciones';

        return view('legal')->with('text', $text);
    }

    public function privacy()
    {
        $text = 'Aviso de Privacidad';

        return view('legal')->with('text', $text);
    }

    public function cookies()
    {
        $text = 'Uso de Cookies';

        return view('legal')->with('text', $text);
    }
}
