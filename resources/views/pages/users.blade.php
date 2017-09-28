@extends('base.master')

@section('title', 'Users')

@section('content')
    @include('partials.subheader', ['title' => 'Users',
                'sub_item' => [
                    ['name' => 'reputation', 'title' => 'Sort users by reputation'],
                    ['name' => 'new users', 'title' => 'Sort users by newest'],
                    ['name' => 'moderators', 'title' => 'Show users who are moderators'],
                    ['name' => 'admins', 'title' => 'Show users who are admins'],
                ],
            ])
@stop
