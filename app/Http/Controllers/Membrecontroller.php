<?php

namespace App\Http\Controllers;

use App\Models\Membres;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class Membrecontroller extends Controller
{
    public function edit($id)
    {
        $member = Membres::find($id);
      //  $auteurs = Auteurs::all();

        if (isset($member)) {

        return view('profile', [
            'membre' => $member
           // 'auteurs' => $auteurs
        ]);
        } else {
        return redirect()->route('login'); 
    }

}
    public function update(Request $request, $id)
    {
      
        $request->validate([
            'nom' => 'required|max:255',
            'prenom' => 'required',
            'email' => 'required|string|email|max:255',
           // 'avatar'=> 'required',
           // 'pcouverture' => 'required'
     
        ]);
        
        $member = Membres::find($id);
        if (isset($member)) {
        $member->prenom = $request->prenom;
        $member->nom = $request->nom;
        $member->email = $request->email;
        if (null!==($request->file('avatar'))) {
            $name = $request->file('avatar')->getClientOriginalName();
            $extension = $request->file('avatar')->getClientOriginalExtension();
                 
            if (($name) && ($extension)) {
                $path = $request->file('avatar')->store('/images', 'public');
                $member->avatar = $path;
            } else {
                return redirect()->route('home')->with('status', "problème lors du chargement de l'image");
            } 
            }    
            if (null!==($request->file('pcouverture'))) {
                $name = $request->file('pcouverture')->getClientOriginalName();
                $extension = $request->file('pcouverture')->getClientOriginalExtension();
                     
                if (($name) && ($extension)) {
                    $path = $request->file('pcouverture')->store('/images', 'public');
                    $member->pcouverture = $path;
                } else {
                    return redirect()->route('home')->with('status', "problème lors du chargement de l'image");
                } 
                }
        $member->save();
        return redirect()->route('home')->with('status', 'votre profil a bien été modifié !'); }
        else
            return redirect()->route('home');   
        }
    }
}
