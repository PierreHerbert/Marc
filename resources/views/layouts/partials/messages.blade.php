@if(isset ($errors) && count($errors) > 0)
    <div class="alert alert-warning b" role="alert">
        <ul class="list-unstyled mb-0">
            @foreach($errors->all() as $error)
                <li>Vos informations ne sont pas valides</li>
            @endforeach
        </ul>
    </div>
@endif

@if(Session::get('success', false))

    @if (is_array(Session::get('success')))
        @foreach (Session::get('success') as $msg)
            <div class="alert alert-warning g" role="alert">
                <i class="fa fa-check"></i>
                {{ $msg }}
            </div>
        @endforeach
    @else
        <div class="alert alert-warning" role="alert">
            <i class="fa fa-check"></i>
            {{ Session::get('success') }}
        </div>
    @endif
@endif