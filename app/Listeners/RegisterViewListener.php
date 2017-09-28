<?php

namespace App\Listeners;

use App\Question;
use App\Events\ViewQuestion;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;

class RegisterViewListener
{
    /**
     * Create the event listener.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    /**
    * Store the question
    */
    private function register_view(Question $question)
    {
        session()->push('viewed', $question->id);

        $question->increment('view_count');
    }

    /**
    * Have the question been viewed before
    */
    private function question_viewed(Question $question)
    {
        return collect(session()->get('viewed', []))->contains($question->id);
    }

    /**
     * Handle the event.
     *
     * @param  ViewQuestion  $event
     * @return void
     */
    public function handle(ViewQuestion $event)
    {
        if(!$this->question_viewed($event->question)){
            $this->register_view($event->question);
        }
    }
}
