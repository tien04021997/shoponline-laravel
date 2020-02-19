<?php
/**
 * Created by PhpStorm.
 * User: DELL
 * Date: 2/13/2020
 * Time: 11:14 PM
 */

namespace App\Http\Middleware;
use Closure;

class CheckLoginUser
{
    public function handle($request, Closure $next)
    {
        if (!get_data_user('web'))
        {
            return redirect()->route('get.login');
        }

        return $next($request);
    }

}