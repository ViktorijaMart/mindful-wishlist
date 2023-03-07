@extends('layouts.app')

@section('content')
    <div class="profile-container">
        <div class="profile_info">
            @include('profile.partials.update-profile-information-form')
        </div>
        <div class="profile_password">
            @include('profile.partials.update-password-form')
        </div>
        <div class="profile_delete">
            @include('profile.partials.delete-user-form')
        </div>
    </div>
@endsection
