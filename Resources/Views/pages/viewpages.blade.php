@extends('core::app')
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
						<th>
							@if(\CMS::permissions()->can('show', 'Seos'))
								<a class="btn btn-default" href='{{ url("admin/seo/show/page/$page->id") }}' role="button">SEO</a>
							@endif
						</th>
					</tr>
				@endforeach
			</tbody>
		</table>
	</div>
</div>
@stop