<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\CreateVerificationRequest;
use App\Verification;
use Illuminate\Support\Facades\Redirect;

class VerificationController extends Controller
{
    /**
     * Handle the incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */

    public function indexplate(){
        return view('verification.indexplate',[ 'verification'=> new Verification]);
    }

    public function showplate(Request $request){
        $fields = request()->validate([
            'plate' => 'required',
         ]);
        // return $request->get('plate');
        // return Verification::where('plate', '=', $request->get('plate'))->firstOrFail();

        return view('verification.show', [
            'verification' =>   Verification::where('plate', '=', $request->get('plate'))->firstOrFail()
        ]);

    }

    public function create(){

        return view('verification.create',[ 'verification'=> new Verification]);
    }

    public function store(CreateVerificationRequest $request){

        Verification::create($request->validated());
        return redirect()->route('home');


    }
}
