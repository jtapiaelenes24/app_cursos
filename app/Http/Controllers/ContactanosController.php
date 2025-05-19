<?php

namespace App\Http\Controllers;

use App\Mail\ContactanosMailAble;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class ContactanosController extends Controller
{
    //
    public function index()
    {
        return view('contactanos.index');
    }

    public function store(Request $request)
    {
        // return $request->all();

        $request->validate([
            'name' => 'required',
            'correo' => 'required',
            'mensaje' => 'required'
        ]);

        $correo = new ContactanosMailAble($request->all());
        Mail::to('correo@gmail.com')->send($correo);

        return redirect()->route('contactanos.index')->with('info', 'Correo enviado');
    }
}
