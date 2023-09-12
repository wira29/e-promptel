<?php

namespace App\Traits\Datatables;

use Exception;
use Illuminate\Http\JsonResponse;
use Yajra\DataTables\DataTables;

trait ActivityDatatable
{

    /**
     * Datatable mockup for customers
     *
     * @param mixed $collection
     *
     * @return JsonResponse
     * @throws Exception
     */

    public function ActivityMockup(mixed $collection): JsonResponse
    {
        return DataTables::of($collection)
            ->addIndexColumn()
            ->editColumn('thumbnail', function ($data) {
                return view('dashboard.pages.activities.datatables.thumbnail', compact('data'));
            })
            ->editColumn('status', function ($data) {
                return view('dashboard.pages.activities.datatables.status', compact('data'));
            })
            ->editColumn('action', function ($data) {
                return view('dashboard.pages.activities.datatables.action', compact('data'));
            })
            ->rawColumns(['action'])
            ->toJson();
    }
}
