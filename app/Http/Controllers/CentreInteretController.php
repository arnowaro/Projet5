<?php

namespace App\Http\Controllers;

use App\Models\CentreInteret;
use App\Models\User;
use Illuminate\Http\Request;

class CentreInteretController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $cinterets = CentreInteret::all();
        
        return view('centreinteret', 
        [
            'cinterets' => $cinterets
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
    public function store(Request $request)
    {
        //
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
     *  Afficher le formulaire pour modifier les centre d'interet d'un utilitsateur
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {   
       
        $user=User::with('centreinterets')->find($id);
        $cinterets = CentreInteret::all();

        return view('centreinteret_edit', 
        [   
            'user' => $user,
            'cinterets' => $cinterets,
        ]); 
    }

    /**
     * Modifie les centres d'interet d'un utilisateurs
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
          $validate = $request->validate([


            'centreinterets' => 'required|array|min:1',

        ]);

        $user = User::with('centreinterets')->where('id', '=', $id)->get();
        $user = User::find($id);

        $user-> centreinterets()->sync($validate['centreinterets']);
        $user->update();

        return redirect()->route('profile', ['id' => $id]);
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
