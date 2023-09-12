<?php

namespace App\Traits\Datatables;

use Exception;
use Illuminate\Http\JsonResponse;
use Yajra\DataTables\DataTables;

trait AgendaDatatable
{

    /**
     * Datatable mockup for customers
     *
     * @param mixed $collection
     *
     * @return JsonResponse
     * @throws Exception
     */

    public function AgendaMockup(mixed $collection): JsonResponse
    {
        return DataTables::of($collection)
            ->addIndexColumn()
            ->editColumn('thumbnail', function ($data) {
                return view('dashboard.pages.agendas.datatables.thumbnail', compact('data'));
            })
            ->editColumn('status', function ($data) {
                return view('dashboard.pages.agendas.datatables.status', compact('data'));
            })
            ->editColumn('action', function ($data) {
                return view('dashboard.pages.agendas.datatables.action', compact('data'));
            })
            ->rawColumns(['action'])
            ->toJson();
    }
}
