<?php

namespace App\Traits\Datatables;

use Carbon\Carbon;
use Exception;
use Illuminate\Http\JsonResponse;
use Yajra\DataTables\DataTables;

trait AudioDatatable
{

    /**
     * Datatable mockup for customers
     *
     * @param mixed $collection
     *
     * @return JsonResponse
     * @throws Exception
     */

    public function AudioMockup(mixed $collection): JsonResponse
    {
        return DataTables::of($collection)
            ->addIndexColumn()
            ->editColumn('date', function ($data) {
                return Carbon::parse($data->date)->translatedFormat('d F Y');
            })
            ->editColumn('content', function ($data) {
                return strip_tags($data->content);
            })
            ->editColumn('link', function ($data) {
                return view('dashboard.pages.audios.datatables.link', compact('data'));
            })
            ->editColumn('action', function ($data) {
                return view('dashboard.pages.audios.datatables.action', compact('data'));
            })
            ->rawColumns(['action'])
            ->toJson();
    }
}
