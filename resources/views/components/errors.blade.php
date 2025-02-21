<div>
    @if ($errors->any())
    <div class="alert">
        <ul>
            @foreach ($errors as $error)
                <li>{{$error}}</li>
            @endforeach

        </ul>
    </div>
    @endif
</div>
