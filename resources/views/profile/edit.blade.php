{{-- <x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Profile') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 space-y-6">
            <div class="p-4 sm:p-8 bg-white shadow sm:rounded-lg">
                <div class="max-w-xl">
                    @include('profile.partials.update-profile-information-form')
                </div>
            </div>

            <div class="p-4 sm:p-8 bg-white shadow sm:rounded-lg">
                <div class="max-w-xl">
                    @include('profile.partials.update-password-form')
                </div>
            </div>

            <div class="p-4 sm:p-8 bg-white shadow sm:rounded-lg">
                <div class="max-w-xl">
                    @include('profile.partials.delete-user-form')
                </div>
            </div>
        </div>
    </div>
</x-app-layout> --}}
@extends('layouts.app')

@section('content')
<div class="terminal-profile container">
    <h1 class="terminal-text">_Profile$ <span class="cursor">_</span></h1>
    
    <div class="profile-section container">
        <div class="terminal-box">
            @include('profile.partials.update-profile-information-form')
        </div>
    </div>

    <div class="profile-section container">
        <div class="terminal-box">
            @include('profile.partials.update-password-form')
        </div>
    </div>

    <div class="profile-section container">
        <div class="terminal-box">
            @include('profile.partials.delete-user-form')
        </div>
    </div>
</div>
@endsection
