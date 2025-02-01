<?php

namespace App\Http\Controllers;


use App\Models\Contact;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

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
      $name = $request->input('name');
      $email = $request->input('email');
      $message = $request->input('message');
      $botToken = env('BOT_TOKEN');
      $chatId = env('CHAT_ID');
      $text = "یک فیدبک برای شما ثبت شد." . ":\n\nName: $name\nEmail: $email\nMessage: $message";

      $url = "https://api.telegram.org/bot{$botToken}/sendMessage";

      Http::post($url, [
          'chat_id' => $chatId,
          'text' => $text,
      ]);


      Contact::Create($data);
    return response()->json('success');

  }

}
