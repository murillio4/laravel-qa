@extends('base.master')

@section('title', 'Ask')

@section('main')
    <form id="test" role="form" method="post" action="{{ route('question.store') }}">
        <div class="form-group">
            <label for="title" class="control-label">Title:</label>
            <input type="text" class="form-control" name="title" id="title" placeholder="What is your programming question? Be spesific.">
        </div>
        </br>
        <div class="form-group">
            <textarea name="q_content" id="q_content" class="form-control"> </textarea>
        </div>
        </b>
        <div class="form-group">
            <label for="tags">Tags:</label>
            <input type="text" class="form-control" name="tags" id="tags" placeholder="At least one tag eg (java sql prognett) with ',' seperator. Max 5 tags.">
        </div>
        <button class="btn btn-primary" id="submit" type="submit">Submit</button>

        {{ csrf_field() }}
    </form>
@stop

@section('sidebar')
    <div class="alert alert-warning" role="contentinfo">
      <strong>Some info</strong>
      <ul class="list-unstyled">
          <li>When you insert the title, questions that may answer your question pops up.</li>
          <li>When asking a question please be clear on what your problem is.</li>
          <li>Try to include as much userfull information as possible.</li>
      </ul>
    </div>
@stop
