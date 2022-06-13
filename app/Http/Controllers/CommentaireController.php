<?php

namespace App\Http\Controllers;

use App\Models\Commentaire;
use Illuminate\Http\Request;

class CommentaireController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function getCommByPost($id)
        {
            $commentaires = Commentaire::where('post_id', $id)->get();
        return view('profilepub', [
            'commentaires' => $commentaires,
        ]);
    }



    /**
     *  Affiche le formulaire pour ajouter un commentaire
     *
     * @return \Illuminate\Http\Response
     */
    public function createComm(Request $request)
    {
       
    }

    /**
     *  Ajoute un commentaire
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function storeComm(Request $request)
    {
        
        $validate = $request->validate([
            
            'membre_id' => 'required|max:150', // ici il faut récuperer le membre_id dans la session
            'post_id' => 'required|max:1048',
            'comment' => 'required|',
            'compteur' => 'required|max:150',
            'ddc' => 'required', // la ddc doit se fixer automatiquement sur la date du jour
            'censcomm' => 'required|max:150',
        ]);
        
        if ($request->hasFile('photo')) {
            $path = $request->file('photo')->store('/images', 'public');
        }
        
        $commentaire = Commentaire::with(['membres', 'posts',])->find($request->input('id'));
        
        $commentaire = new Commentaire();

        $commentaire->membre_id = $request->input('membre_id');
        $commentaire->post_id = $request->input('post_id');
        $commentaire->comment = $validate['comment'];
        $commentaire->compteur = $validate['compteur'];
        $commentaire->ddc = $validate['ddc'];
        $commentaire->censcomm = $validate['censcomm'];
        $commentaire->save();
        return redirect()->route('Commentaire');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $commentaire = Commentaire::find($id);

        return view('commentaire', [
            'commentaire' => $commentaire,
        ]); //
    }

    /**
     *  Affiche le formulaire pour modifier un commentaire
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function editComm(Request $request, $id)
    {
    }
    /**
     * Modifie un commentaire
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function updateComm(Request $request, $id)
    {
        $validate = $request->validate([
            
            'membre_id' => 'required|', // ici il faut récuperer le membre_id dans la session
            'post_id' => 'required|',
            'comment' => 'required|max:1048',
            'compteur' => 'required|max:150',
            'ddc' => 'required', // la ddc doit se fixer automatiquement sur la date du jour
            'censcomm' => 'required|max:150',
        ]);
        
        if ($request->hasFile('photo')) {
            $path = $request->file('photo')->store('/images', 'public');
        }
    // ici comme on a pas de clé primaire id il faut utiliser le nom de la colonne??? posts_id ou membre_id et la date ???
        $commentaire = Commentaire::with(['membres', 'posts',])->where('id', '=', $id)->get();
        $commentaire = Commentaire::find($id);
        
        $commentaire->membre_id = $request->input('membre_id');
        $commentaire->post_id = $request->input('post_id');
        $commentaire->comment = $validate['comment'];
        $commentaire->compteur = $validate['compteur'];
        $commentaire->ddc = $validate['ddc'];
        $commentaire->censcomm = $validate['censcomm'];
        $commentaire->update();
        return redirect()->route('Commentaire');   
        //
    }

    /**
     * Effacer un commentaire
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroyComm($id)
    {
        //
    }
}
