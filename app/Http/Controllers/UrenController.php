<?php

namespace App\Http\Controllers;

use App\Models\Uren;
use App\Models\Client;
use App\Models\Locatie;
use Illuminate\Http\Request;
use App\Models\User;
use Auth;

class UrenController extends Controller
{

    public function testLocatie(){

        // Create three App\Models\User instances...
        $Locatie = Locatie::factory()->count(35)->create();


        // Use model in tests...
    }
    public function testUren(){

        // Create three App\Models\User instances...
        $clients = Client::where('user_id', Auth::id())->get();

        foreach($clients as $client){
            $count = rand(1,5);
            $locatie = rand(1,25);
            $Uren = Uren::factory()->count($count)->create([
                'client_id' => $client->id,
                'user_id' => $client->user_id,
                'locatie' => $locatie,
            ]);
        }



        // Use model in tests...
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $currentTeam = Auth::user()->currentTeam;

        if($currentTeam->id == 1){
            $uren = Uren::orderBy('id')->paginate(10);
        }else{
            $uren = Uren::where('user_id', Auth::id())->orderBy('id')->paginate(10);
        }
        return view('uren.index', compact('uren'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $locatsies = Locatie::where('user_id', Auth::id())->orderBy('titel')->paginate(10);
        $clients = Client::where('user_id', Auth::id())->orderBy('achterNaam')->paginate(10);
        return view('uren.create', compact('locatsies', 'clients'));
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
     * @param  \App\Models\Uren  $uren
     * @return \Illuminate\Http\Response
     */
    public function show(Uren $uren)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Uren  $uren
     * @return \Illuminate\Http\Response
     */
    public function edit(Uren $uren)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Uren  $uren
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Uren $uren)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Uren  $uren
     * @return \Illuminate\Http\Response
     */
    public function destroy(Uren $uren)
    {
        //
    }
}
