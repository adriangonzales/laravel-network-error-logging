<?php

use Illuminate\Support\Str;

/*
 * Network Error Logging
 * https://developer.mozilla.org/en-US/docs/Web/HTTP/Network_Error_Logging
 */

return [

    'enabled' => env('NEL_ENABLED', false),

    /*
     * The reporting API group to send network error reports to (see below).
     */
    'group' => env('NEL_GROUP', (string) Str::of(env('APP_NAME', 'Laravel'))->kebab()->finish('-nel')),

    /*
     * Specifies the lifetime of the policy, in seconds (in a similar way to e.g. HSTS policies are time-restricted).
     * The referenced reporting group should have a lifetime at least as long as the NEL policy.
     */
    'max_age' => env('NEL_MAX_AGE', 31536000),

    /*
     * If true, the policy applies to all subdomains under the origin that the policy header is set.
     * The reporting group should also be set to include subdomains, if this option is to be enabled.
     */
    'include_subdomains' => env('NEL_INCLUDE_SUBDOMAINS', true),

    /*
     * Floating point value between 0 and 1 which specifies the proportion of successful network requests to report.
     * Defaults to 0, so that no successful network requests will be reported if the key is not present in the JSON payload.
     */
    'success_fraction' => env('NEL_SUCCESS_FRACTION', 0),

    /*
     * Floating point value between 0 and 1 which specifies the proportion of failed network requests to report.
     * Defaults to 1, so that all failed network requests will be reported if the key is not present in the JSON payload.
     */
    'failure_fraction' => env('NEL_FAILURE_FRACTION', 1),
];
