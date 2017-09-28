@extends('base.master')

@section('title', 'Tags')

@section('content')
    @include('partials.subheader', ['title' => 'Tags',
                'sub_item' => [
                    ['name' => 'popular', 'title' => 'Sort tags by popularity'],
                    ['name' => 'name', 'title' => 'Sort tabs by name'],
                    ['name' => 'newest', 'title' => 'recent created task'],
                ],
            ])
@stop
