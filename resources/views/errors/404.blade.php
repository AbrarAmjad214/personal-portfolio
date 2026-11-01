@extends('layouts.app')

@section('title', 'Page not found')
@section('description', 'This page does not exist. See live projects or get a free quote from Abrar Amjad instead.')
@section('robots', 'noindex')

@section('content')
    <x-page-hero eyebrow="404" title="This scene didn't make the final cut.">
        The page you're looking for has moved or no longer exists. Here's where to go next.
        <x-slot:actions>
            <a href="{{ route('home') }}" class="btn-primary">Back to home <x-icon name="arrow-right" class="h-4 w-4" /></a>
            <a href="{{ route('portfolio') }}" class="btn-ghost">See live projects</a>
        </x-slot:actions>
    </x-page-hero>
@endsection
