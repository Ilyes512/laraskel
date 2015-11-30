<?php

return [
    'devEnvironmentNames' => ['local', 'homestead', 'test', 'testing'],
    'debug'               => [
        'debugbar'             => ENV('DEBUG_DEBUGBAR', true),
        'whoopsErrorReporting' => ENV('DEBUG_WHOOPS_ERROR_REPORTING', true),
    ]
];