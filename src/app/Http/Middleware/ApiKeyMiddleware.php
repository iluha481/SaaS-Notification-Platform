<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;
use App\Models\User;
class ApiKeyMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  Closure(Request): (Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        $token = $request->bearerToken();
        if(!$token) {
            return response()->json(['message' => 'Unauthorized'], 401);
        }
        $user = User::query()
        ->where('api_key', $token)
        ->where('is_active', true)
        ->first();

        if(!$user) {
            return response()->json(['message' => 'Invalid API key'], 401);
        }
        $request->attributes->set('user', $user);
        
        return $next($request);
    }
}
