@extends('layouts.app')

@section('content')

 @if (count($monos) > 0)
                @include('monos.monos', ['monos' => $monos])
            @endif
        
        
        
@endsection