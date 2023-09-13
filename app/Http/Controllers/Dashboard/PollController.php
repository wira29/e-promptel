<?php

namespace App\Http\Controllers\Dashboard;

use App\Contracts\Interfaces\PollInterface;
use App\Http\Controllers\Controller;
use App\Http\Requests\PollRequest;
use App\Models\Poll;
use Illuminate\Http\RedirectResponse;
use Illuminate\View\View;

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
//        $questions = $this->questionBank->show($group_question->id);

        return view('dashboard.pages.polls.index', compact('poll'));
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
}
