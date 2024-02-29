@extends('layouts.app')

@section('title')

@section('content')

    <h2>Links</h2>
    @forelse ($links as $link)
        <div>
            <p><a href="{{ route('links.code_redirect', ['code' => $link->short_code]) }}">
                    {{ url('/') . '/' . $link->short_code }}
                </a>
                <span>
                    * Counter: {{ $link->count }}
                </span>
            </p>
        </div>
    @empty
        <p>No Links....</p>
    @endforelse

    @if ($links->count())
        <nav>{{ $links->links() }}</nav>
    @endif

@endsection
