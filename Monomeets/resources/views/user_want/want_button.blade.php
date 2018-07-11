@if (Auth::id() != $user->id)
    @if (Auth::user()->is_wanting($user->id))
        {!! Form::open(['route' => ['user.unwant', $user->id], 'method' => 'delete']) !!}
            {!! Form::submit('やっぱいらん♪', ['class' => "btn btn-danger btn-block"]) !!}
        {!! Form::close() !!}
    @else
        {!! Form::open(['route' => ['user.want', $user->id]]) !!}
            {!! Form::submit('めっちゃ欲しい💦', ['class' => "btn btn-primary btn-block"]) !!}
        {!! Form::close() !!}
    @endif
@endif
