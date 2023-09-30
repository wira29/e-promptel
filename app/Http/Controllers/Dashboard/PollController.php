<?php

namespace App\Http\Controllers\Dashboard;

use App\Contracts\Interfaces\PollInterface;
use App\Exports\PollExport;
use App\Http\Controllers\Controller;
use App\Http\Requests\PollRequest;
use App\Models\Poll;
use App\Models\Question;
use App\Models\Respondent;
use Carbon\Carbon;
use Illuminate\Http\RedirectResponse;
use Illuminate\View\View;
use Maatwebsite\Excel\Facades\Excel;

class PollController extends Controller
{
    private PollInterface $poll;

    public function __construct(PollInterface $poll)
    {
        $this->poll = $poll;
    }

    /**
     * Display a listing of the resource.
     *
     * @return View
     */
    public function index(): View
    {
        $polls = $this->poll->get();

        return view('dashboard.pages.polls.index', compact('polls'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return View
     */
    public function create(): View
    {
        return view('dashboard.pages.polls.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param PollRequest $request
     * @return RedirectResponse
     */
    public function store(PollRequest $request): RedirectResponse
    {
        $this->poll->store($request->validated());

        return to_route('polls.index')->with('success', trans('alert.add_success'));
    }

    /**
     * Display the specified resource.
     *
     * @param Poll $poll
     * @return View
     */
    public function show(Poll $poll): View
    {
        return view('dashboard.pages.polls.show', compact('poll'));
    }


    /**
     * Show the form for editing the specified resource.
     *
     * @param Poll $poll
     * @return View
     */
    public function edit(Poll $poll): View
    {
        return view('dashboard.pages.polls.edit', compact('poll'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param PollRequest $request
     * @param Poll $poll
     * @return RedirectResponse
     */
    public function update(PollRequest $request, Poll $poll): RedirectResponse
    {
        $this->poll->update($poll->id, $request->validated());
        return to_route('polls.index')->with('success', trans('alert.update_success'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param Poll $poll
     * @return RedirectResponse
     */
    public function destroy(Poll $poll): RedirectResponse
    {
        $destroy = $this->poll->delete($poll->id);

        if (!$destroy) return back()->with('errors', trans('alert.delete_constrained'));

        return back()->with('success', trans('alert.delete_success'));
    }

    /**
     * export poll
     *
     * @param Poll $poll
     * @return \Symfony\Component\HttpFoundation\BinaryFileResponse
     */
    public function export(Poll $poll)
    {
        return Excel::download(new PollExport($poll->id), $poll->title . Carbon::now() . '.xlsx');
    }
}
