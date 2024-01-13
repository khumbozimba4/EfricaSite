<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class CheckAccessToken
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle($request, Closure $next): Response
    {
        $apiAccessToken = $request->header('Api-Access-Token'); // Adjust the header name as needed
    
        if (!$this->isValidApiAccessToken($apiAccessToken)) {
            return response()->json("Unauthorized", Response::HTTP_UNAUTHORIZED);
        }
    
        return $next($request);
    }
    
    protected function isValidApiAccessToken($token)
    {
        $validTokens = [
            'coolmbolaofcsdvlvdH',
            'efricawillbegr3t3',
        ];
    
        return in_array($token, $validTokens);
    }
    
}
