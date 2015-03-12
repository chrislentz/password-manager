<?php $page = 'home'; ?>

@extends('sections.layout-small')

@section('content')

    <div class="row text-left">
        <div class="large-12 columns">
            <h3>Sign In</h3>
        </div>

        <div class="large-12 columns">
            @include('partials.messages')
        </div>

        <form method="post">
            <input type="hidden" name="_token" value="<?php echo csrf_token(); ?>">

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
                <button class="button small radius left no-margin-bottom" type="submit">Sign In</button>

                <p><a href="/forgot-password/">Forgot Password?</a></p>
            </div>
        </form>
    </div>

@stop