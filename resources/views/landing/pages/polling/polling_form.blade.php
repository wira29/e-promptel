@extends('landing.layouts.app') @section('content')
    <div class="container single-content">
    <div class="entry-header entry-header-style-1 mb-50 pt-50">
        <h2 class="mb-50 font-weight-900 text-center">
            {{ $poll->title }}
        </h2>
    </div>
    <article class="entry-wraper mb-50">
        <form action="">
            <div class="single-excerpt">
                <p id="question" class="font-large">-</p>
            </div>
            <div id="answers" class="entry-main-content"></div>
            <div
                class="entry-main-content mt-30 d-flex flex-row justify-content-between"
            >
                <button id="btn-back" type="button" class="btn btn-primary">
                    Kembali
                </button>
                <button id="btn-submit" style="display: none" type="button" class="btn btn-primary">
                    Submit
                </button>
                <button id="btn-next" type="button" class="btn btn-primary">
                    Selanjutnya
                </button>
            </div>
        </form>
    </article>
</div>
<!--container-->
@endsection @section('script')
<script>
    var isSubmit = false;
    window.onbeforeunload = function () {
        return (isSubmit) ? null : true;
    };

    var changeAnswer;
    $(document).ready(function () {
        // var questions = ["pertanyaan 1"];
        var questions = <?php echo json_encode($questions); ?>;
        var questions_id = <?php echo json_encode($questions_id); ?>;
        // console.log(questions)
        var answers = [];
        questions.map((e) => answers.push(0))
        var currentIdx = 0;

        changeAnswer = (point) => {
            answers[currentIdx] = point;
        };

        function showQuestion() {
            $("#question").text(questions[currentIdx]);
        }

        function checkPage() {
            if (currentIdx == 0) {
                $("#btn-back").attr("disabled", true);
                $("#btn-next").removeAttr("disabled");
            } else if (currentIdx == questions.length - 1) {
                $("#btn-back").removeAttr("disabled");
                $("#btn-next").attr("disabled", true);

                $("#btn-submit").css("display", "block")
            } else {
                $("#btn-back").removeAttr("disabled");
                $("#btn-next").removeAttr("disabled");
            }
        }

        function clearChecked() {
            $('input[type="radio"]').attr("checked", false);
        }

        function setSelectedAnswer() {
            clearChecked();
            var elAnswers = $("#answers");
            var radios = `<div class="radio">
                    <input id="radio-1" data-point="0" value="0" name="radio" type="radio" ${
                        answers[currentIdx] == 0 ? "checked" : ""
                    } onclick="changeAnswer(0)" />
                    <label for="radio-1" class="radio-label"
                        >Sangat Setuju</label
                    >
                </div>
                <div class="radio">
                    <input id="radio-2" data-point="1" value="1" name="radio" type="radio" ${
                        answers[currentIdx] == 1 ? "checked" : ""
                    } onclick="changeAnswer(1)" />
                    <label for="radio-2" class="radio-label">Setuju</label>
                </div>
                <div class="radio">
                    <input id="radio-3" data-point="2" value="2" name="radio" type="radio" ${
                        answers[currentIdx] == 2 ? "checked" : ""
                    } onclick="changeAnswer(2)"/>
                    <label for="radio-3" class="radio-label">Netral</label>
                </div>
                <div class="radio">
                    <input id="radio-4" data-point="3" value="3" name="radio" type="radio" ${
                        answers[currentIdx] == 3 ? "checked" : ""
                    } onclick="changeAnswer(3)"/>
                    <label for="radio-4" class="radio-label"
                        >Tidak Setuju</label
                    >
                </div>
                <div class="radio">
                    <input id="radio-5" data-point="4" value="4" name="radio" type="radio" ${
                        answers[currentIdx] == 4 ? "checked" : ""
                    } onclick="changeAnswer(4)" />
                    <label for="radio-5" class="radio-label"
                        >Sangat Tidak Setuju</label
                    >
                </div>`;
            elAnswers.html("");
            elAnswers.append(radios);
        }

        $("#btn-next").click(function () {
            currentIdx += 1;
            showQuestion();
            checkPage();
            setSelectedAnswer();
        });

        $("#btn-back").click(function () {
            currentIdx -= 1;
            showQuestion();
            checkPage();
            setSelectedAnswer();
        });

        $('#btn-submit').click(function() {
            var confirm = window.confirm("Apakah anda yakin ingin submit ??")
            if(confirm)
            {
                $.ajax({
                    headers: {
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                    },
                    url : "{{ route('landing.submit-polling') }}",
                    type : 'POST',
                    data: {
                        "questions_id" : questions_id,
                        "answers" : answers,
                        "respondent_id" : "{{ $respondent->id }}"
                    },
                    success: function (e) {
                        alert(e.message)
                        isSubmit = true
                        console.log(isSubmit)
                        window.location.href = "{{ route("landing.polling") }}"
                    }
                })
            }
        })

        setSelectedAnswer();
        checkPage();
        showQuestion();
    });
</script>
@endsection @section('css')
<style>
    .radio {
        margin: 0.5rem;
    }
    .radio input[type="radio"] {
        position: absolute;
        opacity: 0;
    }
    .radio input[type="radio"] + .radio-label:before {
        content: "";
        background: #f4f4f4;
        border-radius: 100%;
        border: 1px solid #b4b4b4;
        display: inline-block;
        width: 1.4em;
        height: 1.4em;
        position: relative;
        top: -0.2em;
        margin-right: 1em;
        vertical-align: top;
        cursor: pointer;
        text-align: center;
        transition: all 250ms ease;
    }
    .radio input[type="radio"]:checked + .radio-label:before {
        background-color: #0f4c75;
        box-shadow: inset 0 0 0 4px #f4f4f4;
    }
    .radio input[type="radio"]:focus + .radio-label:before {
        outline: none;
        border-color: #0f4c75;
    }
    .radio input[type="radio"]:disabled + .radio-label:before {
        box-shadow: inset 0 0 0 4px #f4f4f4;
        border-color: #b4b4b4;
        background: #b4b4b4;
    }
    .radio input[type="radio"] + .radio-label:empty:before {
        margin-right: 0;
    }
</style>
@endsection
