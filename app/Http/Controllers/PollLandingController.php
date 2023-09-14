<?php

namespace App\Http\Controllers;

use App\Contracts\Interfaces\PollAnswerInterface;
use App\Contracts\Interfaces\PollingLandingInterface;
use App\Contracts\Interfaces\QuestionLandingInterface;
use App\Contracts\Interfaces\RespondentInterface;
use Carbon\Carbon;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\View\View;

class PollLandingController extends Controller
{
    private PollingLandingInterface $poll;
    private QuestionLandingInterface $question;
    private RespondentInterface $respondent;
    private PollAnswerInterface $pollAnswer;

    public function __construct(PollingLandingInterface $poll, QuestionLandingInterface $question, RespondentInterface $respondent, PollAnswerInterface $pollAnswer)
    {
        $this->poll = $poll;
        $this->question = $question;
        $this->respondent = $respondent;
        $this->pollAnswer = $pollAnswer;
    }

    /**
     * Display a listing of the resource.
     *
     * @return View
     */
    public function index(): View
    {
        $data = [
            'polls' => $this->poll->paginate(5),
        ];

        return view('landing.pages.polling.polling', $data);
    }

    /**
     * @param Request $request
     * @return View
     */
    public function show(Request $request): View
    {
        $respondent = $this->respondent->store(["name" => $request->name, 'email' => $request->email]);
        $questions = $this->question->show($request->poll_id);

        $data = [
            "poll" => $this->poll->show($request->poll_id),
            "questions" => $questions->pluck('name')->toArray(),
            "questions_id" => $questions->pluck('id')->toArray(),
            "respondent" => $respondent,
        ];

        return \view('landing.pages.polling.polling_form', $data);
    }

    /**
     * handle store polling answers
     *
     * @param Request $request
     * @return JsonResponse
     */
    public  function storeAnswer(Request $request): JsonResponse
    {
        foreach ($request->questions_id as $idx => $questionId) {
            $this->pollAnswer->store([
                "answer" => $request->answers[$idx],
                "date" => Carbon::now(),
                "question_id" => $questionId,
                "respondent_id" => $request->respondent_id
            ]);
        }
        return response()->json(["message" => "Berhasil mengisi polling !!"]);
    }
}
