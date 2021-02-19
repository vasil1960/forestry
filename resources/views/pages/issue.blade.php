@extends('layouts.app')

@section('title', 'Issue')

@section('sidebar')
    @parent

    <p>This is appended to the master sidebar.</p>

@endsection

@section('content')

    <div class="row text-right">
        <div class="col-md-12">
            <form class="form-inline" method="get" action="{{ route('issue.search', $journal->journalID) }}">
                @csrf
                <input class="form-control" type="text" name="search" placeholder="Search in Title, Author or Summary">
                <button type="submit" class="btn btn-primary">Go</button>
            </form>
        </div>
    </div>


    {{-- <div class="input-group mb-3">
        <form class="form-inline" method="get" action="{{ route('issue.search', $journal->journalID) }}">
            <input type="text" class="form-control" placeholder="Search in Title, Author or Summary">
            <div class="input-group-append">
                <button class="btn btn-success" type="submit">Go</button>
            </div>
        </form>
    </div> --}}


    {{-- <div class="card mb-5"> --}}
    {{-- <div class="card-header"> --}}
    {{-- <h2 class="mb-5 mt-5 font-weight-bold">{{ $journal->journalTitle }}, Vol. {{ $journal->journalVolume }}, No.
        {{ $journal->journalNr }}, Year {{ $journal->journalYear }}</h2> --}}
    {{-- </div> --}}
    {{-- </div> --}}

    <div class="mt-5">
        {{ $issues->withQueryString()->links() }}
    </div>


    <div class="row mt-3">
        <div class="col-md-8">

            @foreach ($issues as $issue)


                <div class="card mb-3">

                    <div class="card-header">
                        <h5 class="card-title text-uppercase">{!! $issue->issueTitle !!}</h5>
                        <div class="text-right">
                            <small>{{ $journal->journalTitle }}, Vol. {{ $journal->journalVolume }}, No.
                                {{ $journal->journalNr }}, Year {{ $journal->journalYear }}</small>
                        </div>
                    </div>

                    <div class="card-body">

                        <p class="card-text font-weight-bold">{!! strip_tags($issue->issueAutor) !!}</p>
                        <p class="card-text font-weight-bold">{!! strip_tags($issue->issueFrom) !!}</p>
                        <p class="card-text text-justify">{!! strip_tags($issue->issueSummary) !!}</p>

                        <div class="row mt-3">

                            <div class="col-md-6">
                                <small class="card-text text-right">({!! strip_tags($issue->issueFile) !!})</small>
                            </div>

                            <div class="col-md-6 text-right">
                                <small class="card-text">Downloads: {!! $issue->issueCount !!}</small>
                            </div>

                        </div>

                        <div class="mb-3">

                            <a href="#">
                                <i class="bi-download" style="font-size: 1.5rem; color: rgb(5, 110, 92);"></i>
                            </a>

                        </div>

                        <a href="/issue/{{ $issue->issueID }}/edit">Edit</a>

                    </div>
                </div>
            @endforeach

        </div>

        <div class="col-md-4">

            <div class="card">
                <div class="card-header">
                    <div class="h5">CONTENT</div>
                </div>

                <div class="card-body">
                    @foreach ($contents as $content)
                        <a href="{{ url('issue', ['issueJournalID' => $content->journalID]) }}">
                            <h6> {{ $content->journalTitle }}, {{ $content->journalYear }}, Vol.
                                {{ $content->journalVolume }}, No {{ $content->journalNr }}</h6>
                        </a>
                    @endforeach
                </div>

            </div>

        </div>


    </div>

    {{ $issues->withQueryString()->links() }}

@endsection
