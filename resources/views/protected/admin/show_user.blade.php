@extends('protected.admin.master')

@section('title', 'View Profile')

@section('content')

    <h1>{{ $user->first_name }}'s Profile</h1>
    <ul>
        <li>Account Type: {{ $user_role }}</li>
        <li>Email Address: {{ $user->email }}</li>
        <li>First Name: {{ $user->first_name }}</li>
        <li>Last Name: {{ $user->last_name }}</li>
        <li>Contact: {{ $user_details->customers?$user_details->customers->telephone:'' }}</li>
        <li>Owner email: {{ $user_details->companies?$user_details->companies->owner_email:'' }}</li>
        <li>Owner Contact: {{ $user_details->companies?$user_details->companies->owner_contact:'' }}</li>
    </ul>

    @if(Sentinel::check())
        <a href='{{ $user->id }}/edit' class='btn btn-primary'>Edit Profile</a>
    @endif

@endsection