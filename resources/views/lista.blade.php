@extends('layouts.app')
@section('page', 'List')

@section('content')
    @if (count($produtos) > 0)
        <ul>
            @foreach ($produtos as $todo)
                <li>
                    {{ $produto->description }}
                    <input type="checkbox" @if ($produto->completed) checked @endif>
                    <a href="/edit/{{$produto->id}}"> edit </a>
                    <a href="/delete/{{$produto->id}}"> delete </a>
                </li>
            @endforeach
        </ul>
    @else 
        No data
    @endif
    @if (session('status'))
        @include('layouts.alert')
    @endif
    @endsection