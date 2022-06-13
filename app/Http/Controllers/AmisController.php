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
        session_start();
        
        $amis = User::all();
        return view('amis', [
            'amis' => $amis,
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
       
        // $validate = $request->validate([
    
        //     'amis_id' => 'required ',
        //     'user_id' => 'required ',
        // ]);
        // $amis = User::get();

        // $amis = new User();
        // $amis->friend_id = $validate['amis_id'];
        // $amis->user_id = $validate['user_id'];
        // $amis->save();
        // $amis->friendsTo()->attach($validate['amis_id']);
        // return redirect()->route('amis');
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
