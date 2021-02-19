@extends('layouts.app')

@section('title', 'Contents')

@section('sidebar')
    @parent

    <p>This is appended to the master sidebar.</p>

@endsection

@section('content')
    <div class="row">
        <div class="col-md-12">
            <div class="card mt-3">
                <div class="card-header">
                    <h3>Contents</h3>
                </div>
                <div class="card-body">
                    {{-- <h5 class="card-title">Title</h5>
                    <p class="card-text">Content</p> --}}

                    <div class="col-md-10">
                        <table class="table table-sm table-striped offset-md-1 mt-3 mb-3">
                            <thead>
                                <tr>
                                    <th scope="col">Title</th>
                                    <th scope="col">Year</th>
                                    <th scope="col">Volume</th>
                                    <th scope="col">Number</th>
                                    <th scope="col"></th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($contents as $key => $content)
                                    <tr>
                                        <th scope="row">{{ $content->journalTitle }}</th>
                                        <td>{{ $content->journalYear }}</td>
                                        <td class="text-left">Vol. {{ $content->journalVolume }}</td>
                                        <td>Nr. {{ $content->journalNr }}</td>
                                        <td class="text-right">
                                            <a href="{{ url('issue', ['issueJournalID' => $content->journalID]) }}">
                                                <i class="bi bi-folder2-open"></i>
                                            </a>
                                        </td>
                                    </tr>
                                @endforeach

                            </tbody>
                        </table>
                    </div>

                    {{-- @foreach ($contents as $content)
                        <a href="{{ url('issue', ['issueJournalID' => $content->journalID]) }}">
                            <h6> {{ $content->journalTitle }}, {{ $content->journalYear }}, Vol.
                                {{ $content->journalVolume }}, No
                                {{ $content->journalNr }}</h6>
                        </a>
                    @endforeach --}}
                </div>
            </div>
        </div>
    </div>



@endsection
