@php
    $siteSetting = \App\Models\SiteSetting::first();
@endphp

@if($siteSetting && $siteSetting->logo)
    <img src="{{ asset($siteSetting->logo) }}" alt="Site Logo" class="h-10 w-auto">
@else
    {{-- Default Breeze SVG Logo --}}
    <svg ...> ... </svg>
@endif