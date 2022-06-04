<?php

namespace App\Http\Middleware;

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
        
      // dd($request->session());
        if($request->session()->has('user')){
          $data = Auth::user()->name;
          $utils=User::with('roles')->get()->where('name' ,'=', $data);
       
          foreach ($utils as $util) {

          foreach ($util->roles as $role) {

          if ($role->rolename ==='ADMIN'){ 
               
        return $next($request);
      }else {return redirect()->route('livres')->with('status', "vous n'avez pas les droits d'accès du statut administrateur !");}  
    } } 
     } else{
       return redirect()->route('/');
    }
    }
}
