<?php

namespace App\Http\Controllers\Dashboard;

use App\Contracts\Interfaces\QuestionInterface;
use App\Helpers\ResponseHelper;
use App\Http\Controllers\Controller;
use App\Http\Requests\QuestionRequest;
use App\Models\Question;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\RedirectResponse;

class QuestionController extends Controller
{
    private QuestionInterface $question;

    public function __construct(QuestionInterface $question)
    {
        $this->question = $question;
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param QuestionRequest $request
     * @return RedirectResponse
     */
    public function store(QuestionRequest $request): RedirectResponse
    {
        $data = $request->validated();

        foreach ($data['repeater-group'] as $value) {
            $this->question->store([
                'name' => $value['name'],
                'poll_id' => $data['poll_id']
            ]);
        }

        return back()->with('success', trans('alert.update_success'));
    }


    /**
     * Remove the specified resource from storage.
     *
     * @param Question $question
     * @return JsonResponse
     */
    public function destroy(Question $question): JsonResponse
    {
        $destroy = $this->question->delete($question->id);

        if (!$destroy) return ResponseHelper::error(message: trans('alert.delete_constrained'));

        return ResponseHelper::success(message: trans('alert.delete_success'));
    }
}
