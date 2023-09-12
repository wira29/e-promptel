<?php

namespace App\Observers;

use App\Models\Activity;

class ActivityObserver
{

    /**
     * Handle the Activity "creating" event.
     *
     * @param Activity $activity
     * @return void
     */
    public function creating(Activity $activity): void
    {
        $activity->user_id = auth()->id();
        $activity->slug = str_slug($activity->title);
    }

    /**
     * Handle the Activity "updating" event.
     *
     * @param Activity $activity
     * @return void
     */
    public function updating(Activity $activity): void
    {
        $activity->slug = str_slug($activity->title);
    }
}
