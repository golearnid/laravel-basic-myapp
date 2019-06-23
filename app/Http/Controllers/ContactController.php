<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ContactController extends Controller
{
    //
    public function index() {

        // Model
        $data = [
            "name" => "PT XYZ",
            "addr_line1" => "Jl Jend Sudirman Kav 52-53",
            "addr_line2" => "Jakarta Selatan 12190",
            "phone" => "+62 21 540 5060",
            "email" => "support@xyz.com",
        ];

        return view('contact', $data);
    }    
}
