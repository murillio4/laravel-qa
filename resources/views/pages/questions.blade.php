@extends('base.master')

@section('title', 'Questions')

@section('main')
        @include('partials.subheader', ['title' => 'Top Questions',
                    'sub_item' => [
                        ['name' => 'newest', 'title' => 'The most recent asked questions'],
                        ['name' => 'votes', 'title' => 'Questions with the most votes'],
                        ['name' => 'views', 'title' => 'Questions with the most views'],
                        ['name' => 'active', 'title' => 'Questions with recent activity'],
                        ['name' => 'unanswered', 'title' => 'Unanswered questions'],
                    ],
                ])
@stop
