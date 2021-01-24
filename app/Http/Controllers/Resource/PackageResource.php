<?php

namespace App\Http\Controllers\Resource;

use Illuminate\Database\Eloquent\ModelNotFoundException;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use Setting;
use Exception;
use App\Helpers\Helper;

use App\Package;
use App\Provider;
use App\ProviderService;
use App\ServiceType;

class PackageResource extends Controller
{

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('demo', ['only' => [ 'store', 'update', 'destroy']]);
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $packages = Package::all();
        if($request->ajax()) {
            return $packages;
        } else {
            return view('admin.package.index', compact('packages'));
        }
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.package.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $this->validate($request, [
            'name' => 'required|max:255',
            'base_time' => 'required|numeric',
            'base_distance' =>  'required|numeric',
            'base_price' => 'required|numeric',
            'after_time_price' => 'required|numeric',
            'after_distance_price' => 'required|numeric'
        ]);

        try {
            $service = $request->all();


            $service = Package::create($service);

            return back()->with('flash_success','Package Saved Successfully');
        } catch (Exception $e) {
            dd("Exception", $e);
            return back()->with('flash_error', 'Package Not Found');
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\ServiceType  $serviceType
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        try {
            return Package::findOrFail($id);
        } catch (ModelNotFoundException $e) {
            return back()->with('flash_error', 'Service Type Not Found');
        }
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\ServiceType  $serviceType
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        try {
            $package = Package::findOrFail($id);
            return view('admin.package.edit',compact('package'));
        } catch (ModelNotFoundException $e) {
            return back()->with('flash_error', 'Service Type Not Found');
        }
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\ServiceType  $serviceType
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        
        $this->validate($request, [
            'name' => 'required|max:255',
            'base_time' => 'required|numeric',
            'base_distance' =>  'required|numeric',
            'base_price' => 'required|numeric',
            'after_time_price' => 'required|numeric',
            'after_distance_price' => 'required|numeric'
        ]);

        try {

            $service = Package::findOrFail($id);

    
            $service->name = $request->name;
            $service->base_time = $request->base_time;
            $service->base_distance = $request->base_distance;
            $service->base_price = $request->base_price;
            $service->after_time_price = $request->after_time_price;
            $service->after_distance_price = $request->after_distance_price;
            $service->save();

            return redirect()->route('admin.package.index')->with('flash_success', 'Package Updated Successfully');    
        } 

        catch (ModelNotFoundException $e) {
            return back()->with('flash_error', 'Package Not Found');
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\ServiceType  $serviceType
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        
        try {
            Package::find($id)->delete();
            return back()->with('message', 'Package deleted successfully');
        } catch (ModelNotFoundException $e) {
            return back()->with('flash_error', 'Package Not Found');
        } catch (Exception $e) {
            return back()->with('flash_error', 'Package Not Found');
        }
    }


    public function assign(Request $request, $provider)
    {
        try {
            $Provider = Provider::findOrFail($provider);
            $ProviderService = ProviderService::where('provider_id',$provider)->with('service_type')->get();
            $ServiceTypes = ServiceType::all();
            return view('admin.providers.document.index', compact('Provider', 'ServiceTypes','ProviderService'));
        } catch (ModelNotFoundException $e) {
            return redirect()->route('admin.index');
        }
    }

}