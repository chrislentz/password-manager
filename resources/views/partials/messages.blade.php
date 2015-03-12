<div class="row">
    <div class="medium-12 columns">
        @if (Session::has('message_success'))
            <div class="alert-box success">
                {{ Session::get('message_success') }}
            </div>
        @elseif (Session::has('message_error'))
            <div class="alert-box alert">
                {{ Session::get('message_error') }}
            </div>
        @elseif ($errors->has())
            <div class="alert-box alert">
                <ul>
                    @foreach ($errors->all() AS $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
    </div>
</div>