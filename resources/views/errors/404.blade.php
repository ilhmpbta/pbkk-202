@extends('layouts.app')

@section('title', '404 — Not Found')

@section('content')
    <div class="text-center py-20">
        <p class="text-sm font-medium text-[#f53003] dark:text-[#FF4433]">404</p>
        <h1 class="mt-2 text-3xl font-semibold tracking-tight">Page not found</h1>
        <p class="mt-3 text-[#706f6c] dark:text-[#A1A09A]">
            The page you're looking for doesn't exist or has moved.
        </p>
        <div class="mt-8">
            <a href="{{ route('welcome') }}"
               class="inline-block px-5 py-2 bg-[#1b1b18] dark:bg-[#eeeeec] text-white dark:text-[#1C1C1A] rounded-sm text-sm">
                Back to home
            </a>
        </div>
    </div>
@endsection