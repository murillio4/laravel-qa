<?php

namespace App\Http\Controllers;

use App\Question;
use App\Events\ViewQuestion;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Contracts\Validation\Validator;
use Illuminate\Support\Facades\Auth;

class QuestionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return abort(404);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('pages.question.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, array(
            'title' => 'required|between:15,150',
            'q_content' => 'required|min:30',
            'tags' => 'required',
        ));

        if(Auth::check()){
            $q = new Question;

            $q->title = $request->title;
            $q->content = $request->q_content;

            $q->user_id = Auth::id();

            //add tags
            $tags = explode(',', $request->tags);
            $q->tag($tags);

            $q->save();
        }else{
            return redirect()->route('');
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id, $name = null)
    {
        $q = Question::find($id);

        if(!empty($q)){
            event(new ViewQuestion($q));

            $q->comments;
            $a = $q->answers()->with('comments')->paginate(2);

            return view('pages.question.show', ['question' => $q, 'answers' => $a]);
        }

        return abort(404);


    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        return abort(404);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $this->validate($request, array(
            'title' => 'required|between:15,150',
            'q_content' => 'required|min:30',
            'tags' => 'required',
        ));

        if(Auth::check()){
            $q = Question::find($id);

            $q->title = $request->title;
            $q->content = $request->q_content;

            $q->update();
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $q = Question::find($id);
        $q->delete();
    }
}
