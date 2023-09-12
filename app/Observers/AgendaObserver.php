<?php

namespace App\Observers;

use App\Models\Agenda;

class AgendaObserver
{
    /**
     * Handle the Agenda "creating" event.
     *
     * @param Agenda $agenda
     * @return void
     */
    public function creating(Agenda $agenda): void
    {
        $agenda->user_id = auth()->id();
        $agenda->slug = str_slug($agenda->title);
    }

    /**
     * Handle the Agenda "updating" event.
     *
     * @param Agenda $agenda
     * @return void
     */
    public function updating(Agenda $agenda): void
    {
        $agenda->slug = str_slug($agenda->title);
    }
}
