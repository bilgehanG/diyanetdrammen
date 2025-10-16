<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class DevPreviewAccess
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        if (app()->environment('local')) {
            return $next($request);
        }

        $token = (string) config('app.dev_preview_token', '');

        if ($token === '') {
            abort(403, 'Preview access token not configured.');
        }

        $providedToken = $request->bearerToken()
            ?: $request->header('X-Preview-Token')
            ?: $request->query('token');

        if (! is_string($providedToken) || ! hash_equals($token, (string) $providedToken)) {
            abort(403);
        }

        return $next($request);
    }
}
