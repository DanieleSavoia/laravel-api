@extends('admin.layouts.base')

@section('page-title')
	<h1>Create new categories</h1>
@endsection

@section('contents')
	<div class="wrapper w-50 mx-auto">

		<form method="POST" action="{{ route('admin.types.store') }}" novalidate>
			@csrf

			<div class="mb-4">
				<label for="name" class="form-label">Name</label>
				<input type="text" class="form-control @error('name') is-invalid @enderror" id="name" name="name"
					value="{{ old('name') }}">
				@error('name')
					<div class="invalid-feedback">
						{{ $message }}
					</div>
				@enderror
			</div>

			<div class="mb-4">
				<label for="description" class="form-label">Description</label>
				<textarea class="form-control @error('description') is-invalid @enderror" id="description" rows="3"
				 name="description">{{ old('description') }}</textarea>
				@error('description')
					<div class="invalid-feedback">
						{{ $message }}
					</div>
				@enderror
			</div>
			<div class="d-flex justify-content-center">
				<button class="btn btn-success mb-4 text-center">+</button>
			</div>

			
		</form>
	</div>
@endsection
