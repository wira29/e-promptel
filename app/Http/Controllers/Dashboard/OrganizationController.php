<?php

namespace App\Http\Controllers\Dashboard;

use App\Contracts\Interfaces\OrganizationInterface;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class OrganizationController extends Controller
{
    private OrganizationInterface $organization;

    public function __construct(OrganizationInterface $organization)
    {
        $this->organization = $organization;
    }

    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

}
