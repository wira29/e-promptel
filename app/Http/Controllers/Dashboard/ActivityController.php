<?php

namespace App\Http\Controllers\Dashboard;

use App\Contracts\Interfaces\ActivityInterface;
use App\Contracts\Interfaces\CategoryInterface;
use App\Http\Controllers\Controller;
use App\Http\Requests\Activity\StoreRequest;
use App\Http\Requests\Activity\UpdateRequest;
use App\Models\Activity;
use App\Services\ActivityService;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\View\View;

class ActivityController extends Controller
{
    private ActivityInterface $activity;
    private CategoryInterface $category;
    private ActivityService $service;

    public function __construct(ActivityInterface $activity, CategoryInterface $category, ActivityService $service)
    {
        $this->activity = $activity;
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
        if ($request->ajax()) return $this->activity->datatable();

        return view('dashboard.pages.activities.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return View
     */
    public function create(): View
    {
        $categories = $this->category->get();

        return view('dashboard.pages.activities.create', compact('categories'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param StoreRequest $request
     * @return RedirectResponse
     */
    public function store(StoreRequest $request): RedirectResponse
    {
        $this->activity->store($this->service->store($request));
        return to_route('activities.index')->with('success', trans('alert.add_success'));
    }


    /**
     * Show the form for editing the specified resource.
     *
     * @param Activity $activity
     * @return View
     */
    public function edit(Activity $activity): View
    {
        $categories = $this->category->get();
        return view('dashboard.pages.activities.edit', compact('activity', 'categories'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param UpdateRequest $request
     * @param Activity $activity
     * @return RedirectResponse
     */
    public function update(UpdateRequest $request, Activity $activity): RedirectResponse
    {
        $this->activity->update($activity->id, $this->service->update($activity, $request));

        return to_route('activities.index')->with('success', trans('alert.update_success'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param Activity $activity
     * @return RedirectResponse
     */
    public function destroy(Activity $activity): RedirectResponse
    {
        $destroy = $this->activity->delete($activity->id);

        if (!$destroy) return back()->with('errors', trans('alert.delete_constrained'));

        $this->service->remove($activity->thumbnail);

        return back()->with('success', trans('alert.delete_success'));
    }
}
