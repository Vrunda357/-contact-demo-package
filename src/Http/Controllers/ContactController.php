<?php
namespace PriyaXYZ1\Contact\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use PriyaXYZ1\Contact\Models\Contact;
use PriyaXYZ1\Contact\Mail\ContactMailable;
use Mail;

class ContactController extends Controller{

	public function index()
	{
		return view('contact::contact');
	}

	public function send(Request $request){
		//Mail::to(config('contact.send_email_to'))->send(new ContactMailable($request->message,$request->name));
		//echo "test";exit;
		Contact::create($request->all());
        return redirect(route('contact'));
	}
}