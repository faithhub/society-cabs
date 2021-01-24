<?php

namespace App\Http\Middleware;

use Config;
use Closure;

use JWTAuth;
use Tymon\JWTAuth\Http\Middleware\BaseMiddleware;

class ProviderApiMiddleware
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
            Config::set('auth.providers.users.model', 'App\Provider');
            try {
                if (! $user = JWTAuth::parseToken()->authenticate(false, 'provider')) {
                    return response()->json(['user_not_found'], 404);
                } else {
                    \Auth::loginUsingId($user->id);
                }
            } catch (Exception $e) {
                if ($e instanceof \Tymon\JWTAuth\Exceptions\TokenInvalidException){
                    return response()->json(['status' => 'Token is Invalid']);
                }else if ($e instanceof \Tymon\JWTAuth\Exceptions\TokenExpiredException){
                    return response()->json(['status' => 'Token is Expired']);
                }else{
                    return response()->json(['status' => 'Authorization Token not found']);
                }
            }
            return $next($request);
        }
}
