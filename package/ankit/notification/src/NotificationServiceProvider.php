<?php
namespace ankit\notification;

use Illuminate\Support\ServiceProvider;

class NotificationServiceProvider extends ServiceProvider
{
    public function register()
    {
        $this->app->bind('notification', function ($app) {
            return new Notification;
        });
    }

    public function boot()
    {
        // loading the routes file
        require __DIR__ . '/Http/web.php';

        // path for view files

        $this->loadViewsFrom(__DIR__ . '/../views', 'notification');

        // migration files

        $this->publishes([
            __DIR__ . '/migrations/2017_04_05_000000_create_notifications_table.php' => base_path('database/migrations/2017_04_05_000000_create_notifications_table.php'),
        ]);
    }
}
