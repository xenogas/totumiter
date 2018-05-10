@push('styles')
<link rel="stylesheet" href="{{ mix('css/about.css') }}">
@endpush
@push('scripts')
<script src="{{ mix('js/about.js') }}"></script>
@endpush

@extends('layouts.master') @section('content')
<main>
	<h1>About</h1>
	<hr>
	<div>
		<p>Versatile, hands on, technical leader with eight years’ experience who propelled company growth by providing scalable software solutions to several Fortune 500 companies.&nbsp; Accomplished Software Engineer specializing in object-oriented development
			with experience in all areas of the SDLC and in providing clear communications across team disciplines.</p>
	</div>
	<div>
		<h3>Summary</h3>
		<div>
			<ul>
				<li>Possesses expertise in Object Oriented Architecture design and development.</li>
				<li>Rapid prototyping providing concept-to-completion development under tight time constraints.</li>
				<li>Provides feasibility analysis on development alternatives including build-vs.-buy assessments.</li>
				<li>Provides guidance and leadership to co-workers, enabling growth and development of professional skills.</li>
				<li>Represents clients internally and coordinates implementation of client projects and manages ongoing support needs.</li>
				<li>Directs semi-weekly meetings by identifying project status and mediating deliberation across senior management and staff to resolve open issue`s.</li>
				<li>Contributes to company growth through hiring talented individuals improving company versatility and culture.</li>
			</ul>
		</div>
	</div>
	<div>
		<h3>Expertise</h3>
		<div id="skill-container">
			@foreach( $expertise as $category)
				<div class="category">
					<div class="label">{{ $category->name }}</div>
					<div class="list">
						@foreach( $category->skills as $skill )
							<span>{{ $skill->name }}</span>
						@endforeach
						{{-- Form to create a new skill within the category --}}
						<form action="/expertise/skill" method="post">
							@csrf
							<input type="hidden" name="category_id" value="{{ $category->id }}">
							<input type="text" name="name" id="skill-name">
							<button type="submit">+</button>
						</form>
					</div>
				</div>
			@endforeach
			<form action="/expertise/category" method="post">
				@csrf
				<input type="text" name="name" id="category-name">
				<button type="submit">New Category</button>
			</form>
		</div>
	</div>
	<hr class="col-10">
	<div>
		<h3>History</h3>
		<div>
			<div id="work-history">
				@foreach( $experience as $job )
					<div class="work-entry">
						<div class="job-meta">
							<span class="title">{{ $job->position }}</span>
							<span class="dates">{{ $job->span_dates }}</span>
						</div>
						<div class="company">
							<span class="name">
								{{-- 
									Only show this link if it actually exists.
									Possibly style this link to not show up.
									<a href="{{ $job->company->url }}">
								--}}
									{{ $job->company->name }}
								{{-- </a> --}}
							</span>
							<span class="location">{{ $job->company->location }}</span>
						</div>
						<div class="job-details">
							<div class="slugs">
								@foreach( $job->slugs as $slug )
									<span class="slug">{{ $slug->description }}</span>
								@endforeach
							</div>
							<div class="job-summary">
								<p>{{ $job->summary }}</p>
								<ul>
									@foreach( $job->details as $detail )
									<li>{{ $detail->description }}</li>
									@endforeach
								</ul>
							</div>
						</div>
					</div>
				@endforeach

				<hr class="col-10">

				<form action="/experience" method="post">
					<div class="work-entry">
						<div class="job-meta">
							<span class="title">
								<label for="job-title">Position:</label>
								<input type="text" name="title" id="job-title">
							</span>
							<span class="dates">
								<label for="job-start-date">From:</label>
								<input type="date" name="start-date" id="job-start-date">
								<label for="job-until-date">Until:</label>
								<input type="date" name="until-date" id="job-until-date">
							</span>
						</div>
						<div class="company">
							<span class="name">
								<label for="job-company-name">Company:</label>
								<input type="text" name="company-name" id="job-company-name">
							</span>
							<span class="location">
								<label for="job-location">Location:</label>
								<input type="text" name="location" id="job-location">
							</span>
						</div>
						<div class="job-details">
							<div class="slugs">
								{{-- will need to start with 3 or allow expansion --}}
								<label for="job-slug">Descriptors:</label>
								<span class="slug">
										<input type="text" name="slug" id="job-slug1">
									</span>
									<span class="slug">
										<input type="text" name="slug" id="job-slug2">
									</span>
									<span class="slug">
										<input type="text" name="slug" id="job-slug3">
									</span>
							</div>
							<div class="job-summary">
								<label for="job-summary">Summary:</label>
								<br>
								<textarea name="summary" id="job-summary" cols="80" rows="4"></textarea>
								<br>
								<label for="job-detail">Details:</label>
								<ul>
									{{-- Will need to start with multiple and/or allow expansion --}}
									<li><textarea name="detail" id="job-detail" cols="80" rows="2"></textarea></li>
								</ul>
							</div>
						</div>
					</div>
					<button type="submit">Add Experience</button>
				</form>
			</div>
		</div>
	</div>
</main>
@endsection