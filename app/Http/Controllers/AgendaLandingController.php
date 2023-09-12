<?php

namespace App\Http\Controllers;

use App\Contracts\Interfaces\AgendaLandingInterface;
use Illuminate\Http\Request;
use Illuminate\View\View;

class AgendaLandingController extends Controller
{
    private AgendaLandingInterface $agenda;

    public function __construct(AgendaLandingInterface $agenda)
    {
        $this->agenda = $agenda;
    }

    /**
     * Display a listing of the resource.
     *
     * @return View
     */
    public function index(): View
    {
        $data = [
            'agendas' => $this->agenda->paginate(9),
            'latests' => $this->agenda->getLatest(5)
        ];

        return view('landing.pages.agenda.agenda', $data);
    }

    /**
     * Display a listing of the resource.
     *
     * @param string $slug
     * @return View
     */
    public function show(string $slug): View
    {
        $data = [
            'agenda' => $this->agenda->show($slug),
            'latests' => $this->agenda->getLatest(5),
            'share' => ShareFacade::page(url()->full(), 'Share title')
                ->facebook()
                ->twitter()
                ->telegram()
                ->whatsapp()
                ->getRawLinks(),
        ];

        return view('landing.pages.agendas.detail_article', $data);
    }
}
