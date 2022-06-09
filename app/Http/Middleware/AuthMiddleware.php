<?php

namespace App\Http\Middleware;

use App\Models\Membres;
use App\Models\User;
use Closure;
use Illuminate\Http\Request;
use Illuminate\Session\Middleware\StartSession;
use Illuminate\Support\Facades\Auth;

class AuthMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure(\Illuminate\Http\Request): (\Illuminate\Http\Response|\Illuminate\Http\RedirectResponse)  $next
     * @return \Illuminate\Http\Response|\Illuminate\Http\RedirectResponse
     */
    public function handle(Request $request, Closure $next)
    {
        if (Auth::viaRemember()) {
          dd('coucou');
        }
      // dd($request->session());
        if ($request->session()->has('user')) 
        
         {
          //
     
          $data = Auth::User()->name;
          //dd($data);
          $id=Auth::User()->id;
          //dd($id);
          $utils=User::with('roles')->get()->where('name' ,'=', $data);
       
          foreach ($utils as $util) {

          foreach ($util->roles as $role) {

          if ($role->rolename ==='SuperAdmin'){ 
               
        return $next($request);
      }else {return redirect()->route('profile',$id)->with('status', "vous n'avez pas les droits d'accès du statut SuperAdmin !");}  
    } } 
     } else{
       return redirect()->route('home');
    }
    }
}
