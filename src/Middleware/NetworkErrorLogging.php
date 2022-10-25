<?php

namespace AdGoDev\LaravelNetworkErrorLogging\Middleware;

use Closure;
use Illuminate\Http\Response;

class NetworkErrorLogging
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
        /** @var Response $response */
        $response = $next($request);

        if (config('network-error-logging.enabled')) {
            $endpoints = [
                [
                    "url" => route('report-nel', ['time' => now()->format('U')])
                ]
            ];

            $reportGroupData = [
                "group" => config('network-error-logging.group'),
                "max_age" => config('network-error-logging.max_age'),
                'include_subdomains' => config('network-error-logging.include_subdomains'),
                'success_fraction' => config('network-error-logging.success_fraction'),
                'failure_fraction' => config('network-error-logging.failure_fraction'),
                "endpoints" => $endpoints
            ];

            $response->headers->set('report-to', json_encode($reportGroupData));
        }

        return $response;
    }
}
