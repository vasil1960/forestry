@extends('layouts.app')

@section('title', 'Issue')

@section('sidebar')
    @parent

    <p>This is appended to the master sidebar.</p>

@endsection

@section('content')

    {{-- <h2 class="mb-5">CONTACTS</h2> --}}

    <div class="row">
        <div class="col-md-12">
            <div class="card mt-3">
                <div class="card-header">
                    <h3>Contacts</h3>
                </div>
                <div class="card-body">
                    <div class="row">

                        <div class="col-md-8">
                            <div class="card">

                                <div class="card-header">
                                    <h5>Send Email</h5>
                                </div>

                                <div class="card-body">
                                    {{-- <div class="container pt-3" style=""> --}}

                                    <!-- Alert User -->
                                    @if (Session::has('success'))
                                        <div class="alert alert-success">
                                            {{ Session::get('success') }}
                                        </div>
                                    @endif

                                    <form method="post" action="">
                                        @csrf

                                        <div class="form-group">
                                            <label>Name</label>
                                            <input type="text" class="form-control" name="name" id="name"
                                                value="{{ old('name') }}">

                                            <!-- Show error -->
                                            @if ($errors->has('name'))
                                                <div class="alert alert-danger">
                                                    {{ $errors->first('name') }}
                                                </div>
                                            @endif
                                        </div>

                                        <div class="form-group">
                                            <label>Email</label>
                                            <input type="email" class="form-control" name="email" id="email"
                                                value="{{ old('email') }}">

                                            <!-- Show error -->
                                            @if ($errors->has('email'))
                                                <div class="alert alert-danger">
                                                    {{ $errors->first('email') }}
                                                </div>
                                            @endif
                                        </div>

                                        <div class="form-group">
                                            <label>Phone</label>
                                            <input type="text" class="form-control" name="phone" id="phone"
                                                value="{{ old('phone') }}">

                                            <!-- Show error -->
                                            @if ($errors->has('phone'))
                                                <div class="alert alert-danger">
                                                    {{ $errors->first('phone') }}
                                                </div>
                                            @endif
                                        </div>

                                        <div class="form-group">
                                            <label>Subject</label>
                                            <input type="text" class="form-control" name="subject" id="subject"
                                                value="{{ old('subject') }}">

                                            <!-- Show error -->
                                            @if ($errors->has('subject'))
                                                <div class="alert alert-danger">
                                                    {{ $errors->first('subject') }}
                                                </div>
                                            @endif
                                        </div>

                                        <div class="form-group">
                                            <label>Message</label>
                                            <textarea class="form-control" name="message" id="message"
                                                rows="5">{{ old('message') }}</textarea>

                                            <!-- Show error -->
                                            @if ($errors->has('message'))
                                                <div class="alert alert-danger">
                                                    {{ $errors->first('message') }}
                                                </div>
                                            @endif
                                        </div>

                                        <input type="submit" name="send" value="Send" class="btn btn-dark btn-block">
                                    </form>
                                    {{-- </div> --}}
                                </div>

                            </div>
                        </div>

                        <div class="col-md-4">
                            <div class="card">
                                {{-- <div class="card-header bg-secondary text-white">
                    <h4> To contact with us post to:</h4>
                </div> --}}
                                <div class="card-body">
                                    <h5> University of Forestry</h5>
                                    <h6> Forestry Ideas Journal</h6>
                                    <h6> 10 Kliment Okhridski blvd.</h6>
                                    <h6> 1797 Sofia Bulgaria</h6>
                                    <h6> Editorial Board</h6>
                                    <h6> Phone: +359 2 862 28 54</h6>
                                    <h6>
                                        <a href="http://www.ltu.bg">http://www.ltu.bg</a>
                                    </h6>
                                </div>

                            </div>
                        </div>

                    </div>
                </div>
            </div>

        </div>
    </div>


@endsection
