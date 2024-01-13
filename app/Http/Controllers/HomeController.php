<?php

namespace App\Http\Controllers;

use App\Mail\ContactFormMail;
use Exception;
use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Validator;
use Illuminate\Http\Response;
class HomeController extends Controller
{
    //
    
    public function index() {

        $WebServiceController = new WebServiceController();
        $response = $WebServiceController->GetAllBlogs();
        $blogs = json_decode($response, true);
        return view('welcome',compact('blogs'));
    }
    public function CRS(){
        $WebServiceController = new WebServiceController();
        $response = $WebServiceController->GetAllNews();
        $blogs = json_decode($response, true);
        return view('CSR',compact('blogs'));
    }
    public function Message(Request $request) {
        //return $request->json()->all();
        if($request->ajax()){

                $validator = Validator::make($request->json()->all(), [
                    'name'=>'required',
                    "Email"=>"email|required",
                    "Message"=>'required'
                ]);

                if($validator->fails()){
                        return response()->json(['errors' => $validator->errors()], Response::HTTP_BAD_REQUEST);
                    
                }
                   
                    $message = $request->json()->get("Message");
                    $name = $request->json()->get("name");
                    $email = $request->json()->get("Email");
                try {
                    //code...
                    Mail::to('efricamw@efricamw.com')->send(new ContactFormMail($message,$name,$email));
                    return response()->json(['message' => 'Email sent successfully!',Response::HTTP_OK]);
              

                } catch (Exception $th) {
                
                    return response()->json(['error' => $th->getMessage(),Response::HTTP_BAD_REQUEST]);

                }
    }

        
    }
    
}
