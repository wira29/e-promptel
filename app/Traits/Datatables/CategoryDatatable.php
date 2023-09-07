<?php

namespace App\Traits\Datatables;

use Exception;
use Illuminate\Http\JsonResponse;
use Yajra\DataTables\DataTables;

trait CategoryDatatable
{

    /**
     * Datatable mockup for Category
     *
     * @param mixed $collection
     *
     * @return JsonResponse
     * @throws Exception
     */

    public function CategoryMockup(mixed $collection): JsonResponse
    {
        return DataTables::of($collection)
            ->addIndexColumn()
            ->editColumn('action', function ($data) {
                return view('dashboard.pages.categories.datatables.action', compact('data'));
            })
            ->rawColumns(['action'])
            ->toJson();
    }
}
