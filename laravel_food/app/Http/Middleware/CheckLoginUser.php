<?php
/**
 * Created by PhpStorm .
 * User: trungphuna .
 * Date: 2/24/21 .
 * Time: 9:10 PM .
 */

namespace App\Http\Middleware;


class CheckLoginUser
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, \Closure $next)
    {
        if (get_data_user('web'))  return $next($request);

        return redirect()->route('get.login');
    }
}
