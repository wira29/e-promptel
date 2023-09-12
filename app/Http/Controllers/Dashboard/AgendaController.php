<?php

namespace App\Http\Controllers\Dashboard;

use App\Contracts\Interfaces\AgendaInterface;
use App\Contracts\Interfaces\CategoryInterface;
use App\Http\Controllers\Controller;
use App\Http\Requests\Agenda\StoreRequest;
use App\Http\Requests\Agenda\UpdateRequest;
use App\Models\Agenda;
use App\Services\AgendaService;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\View\View;

class AgendaController extends Controller
{
    private AgendaInterface $agenda;
    private CategoryInterface $category;
    private AgendaService $service;

    public function __construct(AgendaInterface $agenda, CategoryInterface $category, AgendaService $service)
    {
        $this->agenda = $agenda;
        $this->category = $category;
        $this->service = $service;
    }

    /**
     * Display a listing of the resource.
     *
     * @param Request $request
     * @return View|JsonResponse
     */
    public function index(Request $request): View|JsonResponse
    {
        if ($request->ajax()) return $this->agenda->datatable();

        return view('dashboard.pages.agendas.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return View
     */
    public function create(): View
    {
        $categories = $this->category->get();

        return view('dashboard.pages.agendas.create', compact('categories'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param StoreRequest $request
     * @return RedirectResponse
     */
    public function store(StoreRequest $request): RedirectResponse
    {
        $this->agenda->store($this->service->store($request));
        return to_route('agendas.index')->with('success', trans('alert.add_success'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param Agenda $agenda
     * @return View
     */
    public function edit(Agenda $agenda): View
    {
        $categories = $this->category->get();
        return view('dashboard.pages.agendas.edit', compact('agenda', 'categories'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param UpdateRequest $request
     * @param Agenda $agenda
     * @return RedirectResponse
     */
    public function update(UpdateRequest $request, Agenda $agenda)
    {
        $this->agenda->update($agenda->id, $this->service->update($agenda, $request));

        return to_route('agendas.index')->with('success', trans('alert.update_success'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param Agenda $agenda
     * @return RedirectResponse
     */
    public function destroy(Agenda $agenda): RedirectResponse
    {
        $destroy = $this->agenda->delete($agenda->id);

        if (!$destroy) return back()->with('errors', trans('alert.delete_constrained'));

        $this->service->remove($agenda->thumbnail);

        return back()->with('success', trans('alert.delete_success'));
    }
}
