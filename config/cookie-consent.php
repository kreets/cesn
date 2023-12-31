<?php

return [
    'cookie_key' => 'cesn__cookie_consent',
    'cookie_value_analytics' => '2',
    'cookie_value_marketing' => '3',
    'cookie_value_both' => 'true',
    'cookie_value_none' => 'false',
    'cookie_expiration_days' => '365',
    'gtm_event' => 'cookie_refresh',
    'ignored_paths' => [],
    'policy_url_en' => env('COOKIE_POLICY_URL_EN', '/gdpr'),
    'policy_url_fr' => env('COOKIE_POLICY_URL_FR', '/gdpr'),
    'policy_url_hu' => '/gdpr',
    'ignored_paths' => ["/admin/*"]
];