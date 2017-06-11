<?php

namespace BoxGrater\Merchants\Controllers;

use App\Http\Controllers\Controller;

use Illuminate\Http\Request;

use App\Http\Requests;
use BoxGrater\Merchants\Models\MerchantRep;
class MerchantRepsController extends Controller
{
    
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        if($request->has('merchant_id')) {
            $merchant_id = $request->merchant_id;
        } else {
            $merchant_id = 0;
        }
        return view('merchantreps::merchantrep', ['view'=>'create', 'merchant_id'=> $merchant_id]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // Form Request
        $input = $request->input();

        // Init
        $rep = MerchantRep::create();
        
        // Map
        $rep->merchant_id = $input['merchant_id'];
        $rep->first = $input['first'];
        $rep->last = $input['last'];
        $rep->phone = $input['phone'];
        $rep->cell = $input['cell'];
        $rep->email = $input['email'];

        // Save
        $rep->save();

        // Load View
        return redirect()->route('merchants.show', ['id'=>$rep->merchant_id]);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $rep = MerchantRep::find($id);
        return view('merchantreps::merchantrep', ['view'=>'edit'])->with('rep', $rep);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        // Form Request
        $input = $request->input();
        //dd($input);

        // Init
        $rep = MerchantRep::find($id);
        
        // Map
        $rep->merchant_id = $input['merchant_id'];
        $rep->first = $input['first'];
        $rep->last = $input['last'];
        $rep->phone = $input['phone'];
        $rep->cell = $input['cell'];
        $rep->email = $input['email'];

        // Save
        $rep->save();

        // Load View
        return redirect()->route('merchants.show', ['id'=>$rep->merchant_id]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
