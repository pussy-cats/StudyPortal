<?php

namespace App\Http\Controllers;

use App\Mail\TicketCreated;
use App\Models\Subject;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;

class Ticket extends Controller
{
    public function switch(Request $request)
    {
        switch ($request->user()->is_tutor or $request->user()->is_admin)
        {
            case true:
                return $this->tutorview();
                break;
            case false:
                return $this->studentview();
                break;
        }
    }

    public function studentview()
    {
        return view('studenttickets', [
            'tickets' => \App\Models\Ticket::query()
                ->where('student_id', auth()->id())
                ->paginate(20)
        ]);
    }

    public function tutorview()
    {
        return view('tutortickets', [
            'tickets' => \App\Models\Ticket::query()
                ->where('tutor_id', auth()->id())
                ->paginate(20)
        ]);
    }

    public function create()
    {
        return view('createticket', [
            'subjects' => Subject::query()->get(),
            'tutors' => \App\Models\User::query()
                ->where('is_tutor', true)->get()
        ]);
    }

    public function new(Request $request)
    {
        $t = \App\Models\Ticket::query()->create([
            'student_id' => $request->user()->id,
            'tutor_id' => $request->input('tutor'),
            'question' => $request->input('question'),
            'subject_id' => $request->input('subject'),
            'details' => $request->input('details'),
            'status' => 'new'
        ]);

        Mail::to($request->user())->send(new TicketCreated(\App\Models\Ticket::query()->find($t->id)));

        return redirect(route('ticket.id', $t->id));
    }

    public function viewticket($id)
    {
        return view('ticket', [
            'ticket' => \App\Models\Ticket::query()->findOrFail($id)
        ]);
    }
}
