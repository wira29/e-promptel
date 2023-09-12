<?php

namespace App\Providers;

use App\Models\Agenda;
use App\Models\Article;
use App\Models\Audio;
use App\Models\Video;
use App\Observers\AgendaObserver;
use App\Observers\ArticleObserver;
use App\Observers\AudioObserver;
use App\Observers\VideoObserver;
use Illuminate\Auth\Events\Registered;
use Illuminate\Auth\Listeners\SendEmailVerificationNotification;
use Illuminate\Foundation\Support\Providers\EventServiceProvider as ServiceProvider;

class EventServiceProvider extends ServiceProvider
{
    /**
     * The event to listener mappings for the application.
     *
     * @var array<class-string, array<int, class-string>>
     */
    protected $listen = [
        Registered::class => [
            SendEmailVerificationNotification::class,
        ],
    ];

    /**
     * Register any events for your application.
     */
    public function boot(): void
    {
        Article::observe(ArticleObserver::class);
        Audio::observe(AudioObserver::class);
        Video::observe(VideoObserver::class);
        Agenda::observe(AgendaObserver::class);
    }

    /**
     * Determine if events and listeners should be automatically discovered.
     */
    public function shouldDiscoverEvents(): bool
    {
        return false;
    }
}
