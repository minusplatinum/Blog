<?php

namespace App\Http\Controllers;

use App\Package;
use Auth;
use Illuminate\Http\Request;
use App\User;
use Stripe\Stripe;
use Stripe\Customer;
use Stripe\Charge;


class PackageController extends Controller
{

    public function index()
    {
        $packages = Package::all();
        return view('packages.index')->with('packages', $packages);
    }

    /**
     * Display the specified template.
     *
     * @param  \App\Package  $package
     * @return \Illuminate\Http\Response
     */
    public function showPackage(Package $package)
    {
        $packageID = $package->id;
        if ($packageID == 1) {
          return view('packages.basicPackage');
        } else if ($packageID == 2) {
            return view('packages.premiumPackage');
        } else if ($packageID == 3) {
            return view('packages.webApp');
        } else {
            return 'No Package Found!';
        } 
          
    }
    
    public function singlePageStore(Request $request)
    {
        $user = Auth::user();

        try {
            Stripe::setApiKey(env('STRIPE_SECRET'));

            $customer = Customer::create(array(
                'email' => $request->stripeEmail,
                'source'  => $request->stripeToken,
                'description' => 'Single Page Website Package',
                'shipping' => [
                    'address' => [
                        'city' => $user->city,
                        'line1' => $user->streetAddress,
                        'postal_code' => $user->postal,
                        'state' => $user->province
                    ],
                    'name' => $user->fName.' '.$user->lName,
                    'phone' => $user->phone1
                ]
            ));
            dd($customer);
            $charge = Charge::create(array(
                'customer' => $customer->id,
                'amount'   => 1999,
                'currency' => 'usd'
            ));
            
            return redirect('home')->with('success', 'Thanks For Your Payment');

        } catch (\Exception $ex) {
            return $ex->getMessage();
        }
    }
}
