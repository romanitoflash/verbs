<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Models\Verb;
use Illuminate\Http\Request;

class VerbController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        
        $verbs  = Verb::paginate(10);
        return [            
            "status" => 1,
            "data" => $verbs
        ];
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Verb  $verb
     * @return \Illuminate\Http\Response
     */
    public function show(Verb $verb)
    {
        //
        return [
            "status" => 1,
            "data" =>$verb
        ];
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Verb  $verb
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Verb $verb)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Verb  $verb
     * @return \Illuminate\Http\Response
     */
    public function destroy(Verb $verb)
    {
        //
    }
}
