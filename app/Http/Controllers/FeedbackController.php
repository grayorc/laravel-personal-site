<?php

namespace App\Http\Controllers;


use App\Models\Contact;
use Illuminate\Http\Request;

class FeedbackController extends Controller
{

  public function __invoke(){
    return view ('pages.contact');
  }
  
  public function create(Request $request){

    $data = $request->validate([
      'subject' => 'required',
      'name' => 'required',
      'email' => 'required|email',
      'message' => 'required',
    ]);
    Contact::Create($data);
    return response()->json('success');

  }

}
