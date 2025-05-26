<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Symfony\Component\HttpFoundation\Response;

class AuthMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        // prvo vidimo dali je korisnik ulogovan
        if (!Auth::check()){
            // to znaci da korisnik nije ulogovan
            return redirect()->route("login")->with("error", "Da biste prisutpili stranici morate se ulogovati kao admin!");
        }

        // ako je korisnik ulogovan proveriti da li je ulogovan kao admin. ako nije onda nema pristup strani
        if (!in_array(Auth::user()->role_id, [1, 3])) {
            return redirect()->route("not-auth");
        }

        //ako je korisnik admin pusti ga da pristupi stranici
        return $next($request);
    }
}

