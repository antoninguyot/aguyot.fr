<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Str;

class SetLocale
{
    /**
     * Key used to get the locale from requests
     * @var string
     */
    protected $localeKey = 'l';

    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        if($request->has($this->localeKey)){
            $locale = $request->get($this->localeKey);
        } else {
            // 'en_US' will be trimmed to 'en'
            $locale = Str::before($request->getPreferredLanguage(), '_');
        }

        App::setLocale($locale);

        return $next($request);
    }
}
