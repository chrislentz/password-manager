<?php $page = 'home'; ?>

@extends('sections.layout-small')

@section('content')

    <div class="row text-left">
        <div class="large-12 columns">
            <h3>Administrator Account</h3>
        </div>

        <div class="large-12 columns">
            @include('partials.messages')
        </div>

        <form method="post">
            <input type="hidden" name="_token" value="<?php echo csrf_token(); ?>">

            <div class="large-6 columns">
                <label>First Name
                    <input name="first_name" type="text" placeholder="First Name" value="{{ Input::old('first_name') }}">
                </label>
            </div>

            <div class="large-6 columns">
                <label>Last Name
                    <input name="last_name" type="text" placeholder="Last Name" value="{{ Input::old('last_name') }}">
                </label>
            </div>

            <div class="form-field large-12 columns">
                <label>Email Address
                    <input name="email" type="email" placeholder="Email Address" value="{{ Input::old('email') }}">
                </label>
            </div>

            <div class="form-field large-12 columns">
                <label>Password
                    <input name="password" type="password" placeholder="Password">
                </label>
            </div>

            <div class="form-field button-container large-12 columns">
                <button class="button small radius left no-margin-bottom" type="submit">Submit</button>
            </div>
        </form>
    </div>

@stop