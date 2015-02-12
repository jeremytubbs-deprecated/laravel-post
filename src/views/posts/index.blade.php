@extends('layouts.master')

@section('content')
<div class="container-fluid">
	@foreach($posts as $post)
		{{ link_to_action('JeremyTubbs\LaravelPost\PostsController@show', $post->title, $parameters = array($post->slug)) }}
		@if (! \Auth::guest())
			{{ link_to_action('JeremyTubbs\LaravelPost\PostsController@edit', 'Edit', $parameters = array($post->id)) }}
		@endif
		<br>
	@endforeach
</div>
@stop