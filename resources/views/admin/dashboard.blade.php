@php $user = Auth::user(); @endphp

@extends('admin.layouts.base')

@section('page-title')
	<h1 class="m-0">Admin DashBoard</h1>
@endsection

@section('contents')
	<div class="container d-flex align-items-center danger justify-content-center mt-5 mb-5 p-5">
		<h2>
			Welcome back {{ $user->name }}
		</h2>
	</div>
@endsection
