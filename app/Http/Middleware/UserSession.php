<?php

namespace App\Http\Middleware;
use App\Http\Controllers\SessionController;
use App\Http\Controllers\UserController;

use Closure;
use Illuminate\Http\Request;

class UserSession
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
        $session = new SessionController();
        if(isset($_COOKIE[$session->GetCookie()])){
            $user_session = $session->SessionByToken($_COOKIE[$session->GetCookie()]);
            if($user_session){
                $user = new UserController();
                $_SESSION['current_user'] = $user->UserById($user_session->user);
            }else{
                $_SESSION['current_user'] = null;
            }
        }
        return $next($request);
    }
}
