<?php

namespace App\Http\Controllers;

use App\Models\Membres;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class Membrecontroller extends Controller
{

 
    public function show($id)
    {
     
        $user = User::find($id);

        return view('profile', [
           
            'user' => $user,
        ]);

    }











    public function edit($id)
    {
        $member = User::find($id);
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
            'name' => 'required|max:255',
            'prenom' => 'required',
            'email' => 'required|string|email|max:255',
            // 'avatar'=> 'required',
            // 'pcouverture' => 'required'

        ]);

        $member = User::find($id);
        if (isset($member)) {
            // dd($request);
            $member->prenom = $request->prenom;
            $member->name = $request->name;
            $member->email = $request->email;

            if (($_FILES['avatar']['error'] !== 4) || ($_FILES['avatar']['error'] == 0)) {
                $path = $request->file('avatar')->store('/images', 'public');
                $member->avatar = $path;
            } elseif ($_FILES['avatar']['error'] == 4) {
                //rien, le fichier est vide
            } else {
                //dd($_FILES['avatar']); 
                return redirect()->route('profile', $member->id)->with('status', "problème lors du chargement de l'image");
            }

            if (($_FILES['pcouverture']['error'] !== 4) || ($_FILES['pcouverture']['error'] == 0)) {

                $path = $request->file('pcouverture')->store('/images', 'public');
                $member->pcouverture = $path;
            } elseif ($_FILES['pcouverture']['error'] == 4) {
                //rien, le fichier est vide
            } else {
                //dd($_FILES['pcouverture']);
                return redirect()->route('profile', $member->id)->with('status', "problème lors du chargement de l'image");
            }
            /*if (null!==($request->file('pcouverture'))) {
                $name = $request->file('pcouverture')->getClientOriginalName();
                $extension = $request->file('pcouverture')->getClientOriginalExtension();
                dd($name);
                dd($extension);     
                if (($name) && ($extension)) {
                    $path = $request->file('pcouverture')->store('/images', 'public');
                    $member->pcouverture = $path;
                } else {
                    return redirect()->route('home')->with('status', "problème lors du chargement de l'image");
                } 
                }*/
            $member->save();
            return redirect()->route('profile', $member->id)->with('status', 'votre profil a bien été modifié !');
        } else {
            return redirect()->route('home');
        }
    }
}
