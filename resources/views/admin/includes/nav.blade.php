@php $user = Auth::user(); @endphp

<nav class="navbar navbar-expand-lg bg-body-tertiary">
	<div class="container-fluid bg-light.bg-gradient shadow w-100 px-5">
		<a class="navbar-brand h1 text-danger fw-bold me-4" href="{{ route('guests.home') }}">My Projects</a>

		<button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
			aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
			<span class="navbar-toggler-icon"></span>
		</button>

		<div class="collapse navbar-collapse" id="navbarSupportedContent">
			<ul class="navbar-nav me-auto mb-2 mb-lg-0">

				{{-- Dropdown menu for Projects --}}
				<li class="nav-item dropdown">

					<a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
						Projects
					</a>
					<ul class="dropdown-menu">
						<li><a class="dropdown-item" href="{{ route('admin.projects.index') }}">Index</a></li>
						<li><a class="dropdown-item" href="{{ route('admin.projects.create') }}">Create</a></li>
					</ul>


					{{-- Dropdown menu for Types --}}
				<li class="nav-item dropdown">

					<a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
						Types
					</a>
					<ul class="dropdown-menu">
						<li><a class="dropdown-item" href="{{ route('admin.types.index') }}">Index</a></li>
						<li><a class="dropdown-item" href="{{ route('admin.types.create') }}">Create</a></li>
					</ul>
				</li>

				{{-- Dropdown menu for Technlogies --}}
				<li class="nav-item dropdown">

					<a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
						Technologies
					</a>
					<ul class="dropdown-menu">
						<li><a class="dropdown-item" href="{{ route('admin.technologies.index') }}">Index</a></li>
						<li><a class="dropdown-item" href="{{ route('admin.technologies.create') }}">Create</a></li>
					</ul>
				</li>
			</ul>

			<ul class="navbar-nav mb-2 mb-lg-0">
				<li class="nav-item dropdown">
					<a class="nav-link dropdown-toggle text-danger fw-bold fs-5" href="#" role="button"
						data-bs-toggle="dropdown" aria-expanded="false">
						{{ $user->name }}
					</a>
					<ul class="dropdown-menu">
						<li class="nav-item dropdown">
							<a class="dropdown-item" href="{{ route('admin.profile.edit') }}">Profile Config</a>
						</li>
						<li class="nav-item dropdown">
							<form action="{{ route('logout') }}" method="post">
								@csrf
								<button class="btn btn-warning mx-2">Logout</button>
							</form>
						</li>
					</ul>
				</li>
			</ul>
		</div>
	</div>
</nav>
