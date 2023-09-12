<?php

namespace App\Http\Controllers\Dashboard;

use App\Contracts\Interfaces\OrganizationInterface;
use App\Http\Controllers\Controller;
use App\Http\Requests\OrganizationRequest;
use App\Models\Organization;
use App\Services\OrganizationService;
use Illuminate\Http\RedirectResponse;
use Illuminate\View\View;

class OrganizationController extends Controller
{
    private OrganizationInterface $organization;
    private OrganizationService $service;

    public function __construct(OrganizationInterface $organization, OrganizationService $service)
    {
        $this->organization = $organization;
        $this->service = $service;
    }

    /**
     * Display a listing of the resource.
     *
     * @return View
     */
    public function index(): View
    {
        $organization = $this->organization->get();

        return view('dashboard.pages.organization.index', compact('organization'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(OrganizationRequest $request, Organization $organization): RedirectResponse
    {
        $this->organization->update($organization->id, $this->service->update($organization, $request));

        return back()->with('success', trans('alert.update_success'));
    }

}
