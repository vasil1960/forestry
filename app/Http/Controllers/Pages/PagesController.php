<?php

namespace App\Http\Controllers\Pages;

use App\Models\Pages\Instruction;
use App\Models\Pages\Issue;
use App\Models\Pages\Journal;
use GrahamCampbell\ResultType\Result;
use Illuminate\Http\Request;

class PagesController extends BaseController
{
    public function homepage()
    {
        // $homepage = Homepage::where('homeID', 1)->get();
        return view('pages.homepage');
    }

    public function news()
    {
        return view('pages.news');
    }

    public function contents()
    {
        $contents =  Journal::where('JournalID', '>', '36')->orderBy('journalID', 'DESC')->get();
        return view('pages.contents', compact('contents'));
    }

    public function issue($id)
    {
        $journal = Journal::find($id);
        $issues =  Journal::find($journal->journalID)->issue()->paginate(5);
        // dd($issues);
        $contents =  Journal::where('JournalID', '>', '36')->orderBy('journalID', 'DESC')->get();
        // dd($issues);
        return view('pages.issue', compact('journal', 'issues', 'contents'));
    }

    public function searchIssue(Request $request, $id)
    {

        $journal = Journal::find($id);
        $issues =  Journal::find($journal->journalID)
            ->issue()
            ->where('issueTitle', 'LIKE', '%' . $request->search . '%')
            ->orWhere('issueSummary', 'LIKE', '%' . $request->search . '%')
            ->orWhere('issueAutor', 'LIKE', '%' . $request->search . '%')
            ->paginate(5)
            ->withQueryString();
        // dd($journal->journalID);
        // dd($issues->withQueryString());
        $contents =  Journal::where('JournalID', '>', '36')->orderBy('journalID', 'DESC')->get();
        return view('pages.issue', compact('journal', 'issues', 'contents'));
    }

    public function instructions()
    {
        return view('pages.instructions', ['instructions' => Instruction::where('instr_id', 1)->get()]);
    }

    public function subscription()
    {
        return view('pages.subscription');
    }

    public function contacts()
    {
        return view('pages.contacts');
    }

    public function conferences()
    {
        return view('pages.conferences');
    }

    public function publication()
    {
        return view('pages.publication');
    }
}
