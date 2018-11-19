@if ($errors->any())
    <div class="header error-messages">
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    </div>
@endif
@if(Session::has('success'))
    <div class="header">
        <div class="alert alert-success pad-btm1em">
            {{ Session::get('success') }}

            @php
            Session::forget('success');
            @endphp
        </div>
    </div>
@endif
