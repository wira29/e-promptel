<?php

namespace App\Observers;

use App\Models\Audio;

class AudioObserver
{
    /**
     * Handle the Audio "creating" event.
     *
     * @param Audio $audio
     * @return void
     */
    public function creating(Audio $audio): void
    {
        $audio->user_id = auth()->id();
        $audio->slug = str_slug($audio->title);
    }

    /**
     * Handle the Audio "updating" event.
     *
     * @param Audio $audio
     * @return void
     */
    public function updating(Audio $audio): void
    {
        $audio->slug = str_slug($audio->title);
    }
}
