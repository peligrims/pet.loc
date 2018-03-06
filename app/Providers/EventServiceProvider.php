<?php

namespace Corp\Providers;

use Illuminate\Support\Facades\Event;
use Illuminate\Foundation\Support\Providers\EventServiceProvider as ServiceProvider;

class EventServiceProvider extends ServiceProvider
{
    /**
     * The event listener mappings for the application.
     *
     * @var array
     */
    protected $listen = [
        'Corp\Events\Event' => [
            'Corp\Listeners\EventListener',
        ],
		/* 'Illuminate\Auth\Events\Attempting' => [
            'Corp\Listeners\LogAuthenticationAttempt',
        ],

        'Illuminate\Auth\Events\Authenticated' => [
            'Corp\Listeners\LogAuthenticated',
        ],

        'Illuminate\Auth\Events\Login' => [
            'Corp\Listeners\LogSuccessfulLogin',
        ],

        'Illuminate\Auth\Events\Logout' => [
            'Corp\Listeners\LogSuccessfulLogout',
        ],

        'Illuminate\Auth\Events\Lockout' => [
            'Corp\Listeners\LogLockout',
        ], */
    ];

    /**
     * Register any events for your application.
     *
     * @return void
     */
    public function boot()
    {
        parent::boot();

        //
    }
}
