<?php

namespace App\Http\Controllers;

use App\Mail\ContactFormMail;
use Exception;
use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class HomeController extends Controller
{
    //
    
    public function index() {

        $WebServiceController = new WebServiceController();
        $response = $WebServiceController->GetAllBlogs();
        $blogs = json_decode($response, true);
        return view('welcome',compact('blogs'));
    }
    public function Message(Request $request) {

        if($request->ajax()){

                    
                    $request->validate([
                        'name'=>'required',
                        "email"=>"email|required",
                        "message"=>'required'
                    ]);
                    $message = $request->message;
                    $name = $request->name;
                    $email = $request->email;
                try {
                    //code...
                    Mail::to('khumbozimba4@gmail.com')->send(new ContactFormMail($message,$name,$email));
                    return response()->json(['message' => 'Email sent successfully!']);


                } catch (Exception $th) {
                    return response()->json(['error' => 'Failed to send the email.']);

                }
    }

        
    }
    
}
