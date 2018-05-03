<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use App\Http\Requests;
use Mail;


class Pages extends Controller
{
    /**
     * Displays the index page.
     *
     * @return \Illuminate\Http\Response
     */
    
    public function index()
    {
        return view('pages.welcome');
    }
   
    /**
     * Displays the contact page.
     *
     * @return \Illuminate\Http\Response
     */

    public function contact()
    {
        return view('pages.contact');
    }

    /**
     * Send Contact Us Email.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */

    public function contactForm(Request $request)
    {
        $this->validate($request, [
            'email' => 'required|email',
            'name' => 'required',
            'messageBody' => 'required',
            'reason' => 'required'
            ]);

        $data = array(
            'email' => $request->email,
            'name' => $request->name,
            'messageBody' => $request->messageBody,
            'reason' => $request->reason
        );

        Mail::send('alerts.contactEmail', $data, function($message) use ($data){
            $message->from($data['email']);
            $message->to('contact@webbie.website');
            $message->subject($data['messageBody']);
        });

        return redirect('/')->with('success', 'Your Email Was Sent Successfully');
    }

    /**
     * Displays the profile page.
     *
     * @return \Illuminate\Http\Response
     */

    public function profile()
    {
        return view('pages.profile');
    }

}
