<?php

namespace App\Http\Controllers;

class ContactController extends Controller
{
    public function store()
    {
        request()->validate(
            [
                'name'  => 'required',
                'email' => 'required|email',
                'subject' => 'required',
                'content' => 'required|min:3'
            ] 
            //,
            // [
            //     'name.required'  => 'Es necesario su nombre'
            // ]
        );

        return 'Datos Validados';
    }
}
