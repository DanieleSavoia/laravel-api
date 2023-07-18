@php $user = Auth::user(); @endphp

@extends('admin.layouts.base')

@section('page-title')
	<h1 class="m-0 text-uppercase">{{ $user->name }} - ADMIN PROFILE</h1>
@endsection

@section('contents')
	<div>
		<div class="mx-auto">
			<div class="p-4 shadow rounded mb-3">
				<div class="max-w-xl">
					@include('profile.partials.update-profile-information-form')
				</div>
			</div>

			<div class="p-4 shadow rounded mb-3">
				<div class="max-w-xl">
					@include('profile.partials.update-password-form')
				</div>
			</div>

			<div class="p-4 shadow rounded mb-3">
				<div class="max-w-xl">
					@include('profile.partials.delete-user-form')
				</div>
			</div>
		</div>
	</div>
	</div>
@endsection