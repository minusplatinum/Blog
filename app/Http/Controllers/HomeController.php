<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use App\User;
use App\Package;
use App\Template;
use Stripe\Stripe;

use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show The Package Select Page.
     */
    public function selectPackage() {
        $user = Auth::User();
        $packages = Package::all();
        
        return view('CustomerCreate.packageSelect')->with('user', $user)->with('packages', $packages);
    }

    /**
     * Update The Selected Package.
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function updatePackage(Request $request) {
       $package = Package::findOrFail($request->package_id);
       $user = Auth::user();
       
       $user->package_id = $package->id;
       $user->package_name = $package->name;
       $user->package_price = $package->price;

        $user->update();

        // redirect
        return redirect()->route('SelectTemplate');

    }

    /**
     * Show the template select page.
     *
     * @return \Illuminate\Http\Response
     */
    public function selectTemplate()
    {
        $user = Auth::user();
        $templates = Template::all();

        return view('CustomerCreate.templateSelect')->with('user', $user)->with('templates', $templates);
    }

    /**
     * Update The Selected Template.
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function updateTemplate(Request $request) {
        $template = Template::findOrFail($request->template_id);
        $user = Auth::user();
       
        $user->template_id = $template->id;
        $user->template_name = $template->name;
        $user->template_type = $template->templateType;
 
         $user->update();
 
         // redirect
         return redirect()->route('OrderConfirm');
 
     }
 
    /**
     * Show Order Confirmation Page.
     *
     * @return \Illuminate\Http\Response
     */
    public function orderConfirm()
    {
        $user = Auth::user();

        $package = Package::find($user->package_id);
        $template = Template::find($user->template_id);
        

        return view('CustomerCreate.orderConfirm')->with('user', $user)->with('template', $template)->with('package', $package);
    }

    /**
     * Add customers confirmed information in database.
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function updateCustomer() {
        $user = Auth::user();
        // Create Custoemr Variables
        $user->fname = request('fName');
        $user->lName = request('lName');
        $user->username = request('username');
        $user->email = request('email');
        $user->phone1 = request('phone1');
        $user->phone2 = request('phone2');
        $user->streetAddress = request('streetAddress');
        $user->city = request('city');
        $user->province = request('province');
        $user->country = request('country');
        $user->postal = request('postal');

        // Update Customer In Database
        $user->update();
        
        // redirect
        return redirect()->route('CustomerPayment');
    }

    /**
     * Show The Dashboard Page..
     *
     * @return \Illuminate\Http\Response
     */
    public function customerPayment(Request $request)
    {
        $user = Auth::user();
        $token = config('services.stripe');
        Stripe::setApiKey($token['secret']);
        
        return view('CustomerCreate.paymentPage')->with('user', $user);
        
    }

    /**
     * Show The Dashboard Page..
     *
     * @return \Illuminate\Http\Response
     */
    public function customerPaymentPost(Request $request)
    {
        $user = Auth::user();
        $StripeKeys = config('services.stripe');
        Stripe::setApiKey($StripeKeys['secret']);
        $token = request('_token');
        $stripeToken = request('stripeToken');
        $stripeTokenType = request('stripeTokenType');
        $stripeEmail = request('stripeEmail');
        //dd($request);
        $customer = \Stripe\Customer::create(array(
            'email' => $stripeEmail,
            'source'  => $stripeToken
        ));

        $charge = \Stripe\Charge::create(array(
            'customer' => $customer->id,
            'amount'   => 5000,
            'currency' => 'usd'
        ));
        
        return redirect()->route('home')->with('success', 'Your Purchase Was Completed Successfully!')->with('user', $user);
          
    }



    /**
     * Show The Dashboard Page..
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $user = Auth::user();
        return view('pages.home')->with('user', $user);
    }

    /**
     * Update The User Profile.
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function updateProfile(User $user) {
        $user = Auth::user();
        $user->fname = request('fName');
        $user->lName = request('lName');
        $user->username = request('username');
        $user->email = request('email');
        $user->phone1 = request('phone1');
        $user->phone2 = request('phone2');
        $user->streetAddress = request('streetAddress');
        $user->city = request('city');
        $user->province = request('province');
        $user->country = request('country');
        $user->postal = request('postal');

        $user->update();

        // redirect
        return redirect()->route('home')->with('user', $user);
    }
}

