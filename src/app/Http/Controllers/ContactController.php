<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use App\Http\Requests\ContactRequest;

class ContactController extends Controller
{
    public function index(){
        return view('index');
    }

    public function confirm(ContactRequest $request){
        $contact = $request->only(['first-name','last-name','gender_id','email','postcode','address','building_name','opinion']);
        return view('confirm',['contact'=>$contact]);


    }

    public function store(ContactRequest $request){
        $contact = $request->only(['first-name','last-name','gender_id','email','postcode','address','building_name','opinion']);
        Contact::create($contact);
        return view('thanks');
    }


}
