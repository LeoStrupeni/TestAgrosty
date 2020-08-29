<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\message;
use App\subject;
use App\Mail\AgrostyMail;

class msgController extends Controller
{
    public function index()
    {
        $asuntos = subject::all();
        $listamjs = message::all();
        return view('layout', compact('asuntos','listamjs')); 
    }

    public function create()
    {
        //
    }

    public function store(Request $request)
    {
       
        $mensaje = $this->validate($request, [
            'name' => 'required',
            'email' => ['required','email'], 
            'subject' => 'required',
            "body" => "required"
        ], [
            'required' => 'El campo :attribute es obligatorio',
            'email' => 'El campo :attribute no tiene el formato correcto'
        ]);

        $fecha = date("Y-m-d");

        $spanScore = 0;
        if(strpos($mensaje['body'],'viagra')>0){ $spanScore += 5;}
        if(strpos($mensaje['body'],'oferta')>0 || strpos($mensaje['body'],'ofertas')>0){ $spanScore += 4;}
        if(strpos($mensaje['body'],'buy')>0){ $spanScore += 5;}
        if(strpos($mensaje['body'],'contactanos')>0){ $spanScore += 3;}
        if(strpos($mensaje['body'],'tarifas')>0){ $spanScore += 2;}
        if(strpos($mensaje['body'],'stock')>0){ $spanScore += 1;}
        $spanScore = $spanScore / 6;

        message::create([
            'subjectid' => $request->subject,
            'body' => $request->body,
            'fromName' => $request->name,
            'FromEmail' => 'leonardo.strupeni@gmail.com',
            'toEmail' => $request->email,
            'date' => $fecha,
            'spanScore' => $spanScore
        ]);

        $asunto = subject::find($request->subject);

        Mail::to('leonardo.strupeni@gmail.com')->send(new AgrostyMail($mensaje,$asunto['desc'],$fecha));

        $subject = subject::all();
        return view('form', compact('subject')); 
    }

    public function show($id)
    {
        //
    }


    public function edit($id)
    {
        //
    }

    public function update(Request $request, $id)
    {
        //
    }

    public function destroy($id)
    {
        //
    }
}
