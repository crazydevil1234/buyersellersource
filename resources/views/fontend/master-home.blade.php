@extends('fontend.layouts.dashboard-home')
	@section('dashboard_content')
@if (Sentinel::check())
	@include('fontend.layouts.header-dashboard')
@else
	@include('fontend.layouts.header-home')
@endif
	@yield('content')
@stop