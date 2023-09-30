<?php

namespace App\Exports;

use App\Models\Poll;
use App\Models\PollAnswer;
use App\Models\Question;
use App\Models\Respondent;
use Illuminate\Contracts\View\View;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\FromView;

class PollExport implements FromView
{
    private int $id;
    public function __construct(int $id)
    {
        $this->id = $id;
    }

    public function view(): View
    {
        $data = [
            'questions' => Question::query()
                ->where('poll_id', $this->id)
                ->get(),
            'respondents' => Respondent::query()
                ->with('pollAnswers')
                ->whereRelation('pollAnswers.question', function($q) {
                    $q->where('poll_id', $this->id);
                })
                ->get(),
            'options' => [
              "Sangat Setuju", "Setuju", "Netral", "Tidak Setuju", "Sangat Tidak Setuju"
            ],
        ];
        return view('dashboard.pages.polls.export', $data);
    }
}
