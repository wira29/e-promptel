<?php

namespace App\Observers;

use App\Models\Video;

class VideoObserver
{
    /**
     * Handle the Video "creating" event.
     *
     * @param Video $video
     * @return void
     */
    public function creating(Video $video): void
    {
        $video->user_id = auth()->id();
        $video->slug = str_slug($video->title);
    }

    /**
     * Handle the Video "updating" event.
     *
     * @param Video $video
     * @return void
     */
    public function updating(Video $video): void
    {
        $video->slug = str_slug($video->title);
    }

}
