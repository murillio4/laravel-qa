@extends('base.master')

@section('title', 'Home')

@section('main')
        @include('partials.subheader', ['title' => 'Top Questions',
                    'sub_item' => [
                        ['name' => 'interesting', 'title' => 'Questions based on your tag preferences'],
                        ['name' => 'hot', 'title' => 'Questions with the most views, answers, and votes over the last few days'],
                        ['name' => 'week', 'title' => 'Questions with the most views, answers, and votes this week'],
                        ['name' => 'month', 'title' => 'Questions with the most views, answers, and votes this month'],
                    ],
                ])
@stop
