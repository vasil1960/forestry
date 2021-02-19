@extends('layouts.app')

@section('title', 'Issue')

@section('sidebar')
    @parent

    <p>This is appended to the master sidebar.</p>

@endsection

@section('content')

    <div class="row">
        <div class="col-md-12">
            <div class="card mt-3">
                <div class="card-header">
                    <h3>Instruction To Autors</h3>
                </div>
                <div class="card-body">
                    @foreach ($instructions as $instruction)

                        <p>{!! $instruction->instr_instruction_en !!}</p>

                    @endforeach
                </div>
            </div>
        </div>
    </div>

    <h2 class="mb-5">INSTRUCTION TO AUTHORS</h2>

    {{-- @foreach ($instructions as $instruction)

        <p>{!!  $instruction->instr_instruction_en !!}</p>

    @endforeach --}}

    {{-- {{ $issues->links() }} --}}

@endsection
