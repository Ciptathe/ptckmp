<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class CekLevel
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure(\Illuminate\Http\Request): (\Illuminate\Http\Response|\Illuminate\Http\RedirectResponse)  $next
     * @return \Illuminate\Http\Response|\Illuminate\Http\RedirectResponse
     */
    public function handle(Request $request, Closure $next, ...$levels)
    {
        if(in_array($request->user()->level,$levels)){
        // diatas ini memanggil model user yang sudah dibuat. 
        // namanya harus sama dengan nama user model dan tabelnya jg 
            return $next($request);
        };
        
// apabila dilakukan pengecekan dan jika membuka halaman tidak sesuai rolenya maka sistem akan  meredirect halaman ke beranda
        return redirect('/beranda');
    }
}
