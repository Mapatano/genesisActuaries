<?php

namespace App\Http\Middleware;
use Closure;
/*use illuminate\Support\Facades\App;*/
use illuminate\Support\Facades\Config;
use illuminate\Support\Facades\session;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;
use App;
  
class LanguageManager
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        if (session()->has('locale')) {
            App::setLocale(session()->get('locale'));
        }
          
        return $next($request);
    }
}
