<?php

namespace App\Http\Controllers;
use App\Models\Amis;
use App\Models\User;
use Illuminate\Http\Request;

class AmisController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function showamis()
    {
       
        
        $amis = User::all();
        // $demandes =User::all();
        $demandes =User::with('amis')->where('id', auth()->user()->id)->first();
        //on récuperer un user( donc un first) avec ses amis donc on est obligé de faire un get  
        //les amis (tableaux) on fait un get pour les récupérers
        return view('amis', [
            'amis' => $amis,
            'demandes' => $demandes->amis()->get(),
            //ici on récupere list d'amis donc get()
        ]);
    }
    
   
    
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function storeamis(Request $request)
    {
       
        $validate = $request->validate([
    
            'amis_id' => 'required ',
            'user_id' => 'required ',
        ]);
        $amis = User::get();

        $amis = new Amis();
        $amis->amis_id = $validate['amis_id'];
        $amis->user_id = $validate['user_id'];
        $amis->accepted = 0;
        $amis->save();
        // $amis->amis()->attach($validate['amis_id']);
        return redirect()->route('amis');
    }

    public function acceptamis(Request $request, $id)

    { 
        $validate = $request->validate([
        
            'accepted' => 'required|integer',
        ]);

        $amis = Amis::find($id);
        $amis->accepted = $validate['accepted'];
        $amis->update();
        return redirect()->route('amis');
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
        //
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
        //
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
