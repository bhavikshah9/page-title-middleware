<?php

namespace Bhavikshah\PageTitle;

use Closure;

class PageTitle
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next, $pageTitle="")
    {
        
        if (!empty($pageTitle)) {
            \View::share('dynamicPageTitle', $pageTitle);
        }
        
        //echo "pageTitle:" . $pageTitle;

        /*
        $routeName = $request->route()->getName();
        if (!empty($routeName)) {
          \View::share('dynamicPageTitle', $routeName);
        }

        $parameters = array();
        $parameters = $request->route()->parameters();
        echo "<pre>";
        print_r($parameters);
        echo "</pre>";
        */
        return $next($request);
    }
}
