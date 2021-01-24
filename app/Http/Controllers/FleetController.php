<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Helpers\Helper;

use Auth;
use Setting;
use Exception;

use App\User;
use App\Fleet;
use App\Provider;
use App\UserPayment;
use App\ServiceType;
use App\UserRequests;
use App\ProviderService;
use App\UserRequestRating;
use App\UserRequestPayment;

class FleetController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('fleet');
        $this->middleware('demo', ['only' => ['profile_update', 'password_update', 'destory_provider_service']]);
    }


    /**
     * Dashboard.
     *
     * @param  \App\Provider  $provider
     * @return \Illuminate\Http\Response
     */
    public function dashboard()
    {
        try{

            $getting_ride = UserRequests::has('user')
                    ->whereHas('provider', function($query) {
                            $query->where('fleet', Auth::user()->id );
                        })
                    ->orderBy('id','desc');

            $rides = $getting_ride->get();
            $all_rides = $getting_ride->get()->pluck('id');
            $cancel_rides = UserRequests::where('status','CANCELLED') 
                            ->whereHas('provider', function($query) {
                                $query->where('fleet', Auth::user()->id );
                            })->count();
            $scheduled_rides = UserRequests::where('status','SCHEDULED') 
            ->whereHas('provider', function($query) {
                $query->where('fleet', Auth::user()->id );
            })->count();
            
            $completed_rides = UserRequests::where('status','COMPLETED') 
            ->whereHas('provider', function($query) {
                $query->where('fleet', Auth::user()->id );
            })->count();

            $ongoing_rides =  $getting_ride->count() - $completed_rides - $cancel_rides - $scheduled_rides;

            $service = ServiceType::count();
            $revenue = UserRequestPayment::whereIn('request_id',$all_rides)->sum('total');
            $providers = Provider::where('fleet', Auth::user()->id)->take(10)->orderBy('rating','desc')->get();
            $user  = User::count();
            $provider = Provider::where('fleet', Auth::user()->id)->count();
            $cashpayments = UserRequests::where('payment_mode','CASH')->whereHas('provider', function($query) {
                $query->where('fleet', Auth::user()->id ); })->count();
            $online_payments = UserRequests::where('payment_mode','WALLET')->whereHas('provider', function($query) {
                $query->where('fleet', Auth::user()->id ); })->count();

            return view('fleet.dashboard',compact('providers','ongoing_rides','completed_rides','scheduled_rides','cancel_rides','service','rides','user','provider','cancel_rides','cashpayments','online_payments','revenue'));
        }
        catch(Exception $e){
            return redirect()->route('fleet.user.index')->with('flash_error','Something Went Wrong with Dashboard!');
        }
    }

    /**
     * Map of all Users and Drivers.
     *
     * @return \Illuminate\Http\Response
     */
    public function map_index()
    {
        return view('fleet.map.index');
    }

    /**
     * Map of all Users and Drivers.
     *
     * @return \Illuminate\Http\Response
     */
    public function map_ajax()
    {
        try {

            $Providers = Provider::where('latitude', '!=', 0)
                    ->where('longitude', '!=', 0)
                    ->where('fleet', Auth::user()->id)
                    ->with('service')
                    ->get();

            $Users = User::where('latitude', '!=', 0)
                    ->where('longitude', '!=', 0)
                    ->get();

            for ($i=0; $i < sizeof($Users); $i++) { 
                $Users[$i]->status = 'user';
            }

            $All = $Users->merge($Providers);

            return $All;

        } catch (Exception $e) {
            return [];
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Provider  $provider
     * @return \Illuminate\Http\Response
     */
    public function profile()
    {
        return view('fleet.account.profile');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Provider  $provider
     * @return \Illuminate\Http\Response
     */
    public function profile_update(Request $request)
    {
        $this->validate($request,[
            'name' => 'required|max:255',
            'company' => 'required|max:255',
            'mobile' => 'required',
            'logo' => 'mimes:jpeg,jpg,bmp,png|max:5242880',
        ]);

        try{
            $fleet = Auth::guard('fleet')->user();
            $fleet->name = $request->name;
            $fleet->mobile = $request->mobile;
            $fleet->company = $request->company;
            if($request->hasFile('logo')){
                $fleet->logo = $request->logo->store('fleet/profile');  
            }
            $fleet->save();

            return redirect()->back()->with('flash_success','Profile Updated');
        }

        catch (Exception $e) {
             return back()->with('flash_error','Something Went Wrong!');
        }
        
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Provider  $provider
     * @return \Illuminate\Http\Response
     */
    public function password()
    {
        return view('fleet.account.change-password');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Provider  $provider
     * @return \Illuminate\Http\Response
     */
    public function password_update(Request $request)
    {

        $this->validate($request,[
            'old_password' => 'required',
            'password' => 'required|min:6|confirmed',
        ]);

        try {

           $Fleet = Fleet::find(Auth::guard('fleet')->user()->id);

            if(password_verify($request->old_password, $Fleet->password))
            {
                $Fleet->password = bcrypt($request->password);
                $Fleet->save();

                return redirect()->back()->with('flash_success','Password Updated');
            } else {
                return back()->with('flash_error','Password entered doesn\'t match');
            }
        } catch (Exception $e) {
             return back()->with('flash_error','Something Went Wrong!');
        }
    }

    /**
     * Provider Rating.
     *
     * @return \Illuminate\Http\Response
     */
    public function provider_review()
    {
        try {

            $rides = UserRequests::whereHas('provider', function($query) {
                            $query->where('fleet', Auth::user()->id );
                        })->get()->pluck('id');

            $Reviews = UserRequestRating::whereIn('request_id',$rides)
                        ->where('provider_id','!=',0)
                        ->with('user','provider')
                        ->get();

            return view('fleet.review.provider_review',compact('Reviews'));

        } catch(Exception $e) {
            return back()->with('flash_error','Something Went Wrong!');
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\ProviderService
     * @return \Illuminate\Http\Response
     */
    public function destory_provider_service($id){
        try {
            ProviderService::find($id)->delete();
            return back()->with('message', 'Service deleted successfully');
        } catch (Exception $e) {
             return back()->with('flash_error','Something Went Wrong!');
        }
    }
}
