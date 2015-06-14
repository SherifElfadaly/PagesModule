@extends('app')
@section('content')

<div class="container">
	<div class="col-sm-9">

		<table class="table table-striped">
			<thead>
				<tr>
					<th>Page id</th>
					<th>Page Title</th>
					<th>Page Slug</th>
					<th>Options</th>
				</tr>
			</thead>
			<tbody>
				@foreach($pages as $page)
					<tr>
						<th>{{ $page->id }}</th>
						<th>{{ $page->title }}</th>
						<th>{{ $page->page_slug }}</th>
					</tr>
				@endforeach
			</tbody>
		</table>
	</div>
</div>
@stop