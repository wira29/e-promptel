<table>
    <thead>
    <tr>
        <th>Responden</th>
        @foreach($questions as $question)
            <th>{{ $question->name }}</th>
        @endforeach
    </tr>
    </thead>
    <tbody>
    @foreach($respondents as $respondent)
        <tr>
            <td>{{ $respondent->name }}</td>
            @foreach($respondent->pollAnswers as $answer)
                <td>{{ $options[$answer->answer] }}</td>
            @endforeach
        </tr>
    @endforeach
    </tbody>
</table>
