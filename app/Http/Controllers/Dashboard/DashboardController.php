<?php

namespace App\Http\Controllers\Dashboard;

use App\Contracts\Interfaces\ActivityInterface;
use App\Contracts\Interfaces\AgendaInterface;
use App\Contracts\Interfaces\ArticleInterface;
use App\Contracts\Interfaces\AudioInterface;
use App\Contracts\Interfaces\PollInterface;
use App\Contracts\Interfaces\VideoInterface;
use App\Http\Controllers\Controller;
use Illuminate\View\View;

class DashboardController extends Controller
{
    private ArticleInterface $article;
    private PollInterface $poll;
    private AgendaInterface $agenda;
    private ActivityInterface $activity;
    private VideoInterface $video;
    private AudioInterface $audio;

    public function __construct(ArticleInterface $article, PollInterface $poll, AgendaInterface $agenda, ActivityInterface $activity, VideoInterface $video, AudioInterface $audio)
    {
        $this->article = $article;
        $this->poll = $poll;
        $this->agenda = $agenda;
        $this->activity = $activity;
        $this->video = $video;
        $this->audio = $audio;
    }

    /**
     * Display a listing of the resource.
     *
     * @return View
     */
    public function index(): View
    {
        $total_articles = $this->article->count([]);
        $total_polls = $this->poll->count([]);
        $total_agendas = $this->agenda->count([]);
        $total_activities = $this->activity->count([]);
        $total_videos = $this->video->count([]);
        $total_audios = $this->audio->count([]);

        return view('dashboard.pages.index', compact('total_articles', 'total_polls', 'total_agendas', 'total_activities', 'total_videos', 'total_audios'));
    }

}
