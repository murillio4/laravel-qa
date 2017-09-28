@extends('base.master')

@section('title', 'Question')

@section('content')
    <div class="question-header">
        <h1>
            <a href="" class="question-hyperlink">
                {{ $question->title }}
            </a>
        </h1>
        <div class="ask">
            <a href="{{ route('question.create') }}" class="btn btn-primary">Ask Question</a>
        </div>
    </div>

    @parent
@stop

@section('main')

    {{ json_encode($answers) }}
    {{ $answers->render() }}
    {{ json_encode(Session::get('viewed')) }}
@stop

@section('sidebar')

@stop
