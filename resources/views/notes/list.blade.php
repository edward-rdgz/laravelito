
@extends('layout')

@section('content');

	<h2>Notes</h2>

	<ul>
		@foreach ($notes as $note)
		<li>
			<!-- 
			{!! $note->note !!} - no escapa html, ni js. Es vunerable a xss como: (<?= $note->note; ?>)

			{{ $note->note }} - escapa html y js. 
			-->

			<!--@if( strlen($note->note) > 14 )
				{{ substr($note->note, 0, 10) }} ...
			@else
				{{ $note->note }}
			@endif-->

			<!--@if( $note->long )
				{{ $note->summary }} ...
			@else
				{{ $note->note }}
			@endif-->

			<!--{{ $note->summary }} ... -->

			{{ $note->note }}

		</li>
		@endforeach
	</ul>

	<form method="POST">
		{!! csrf_field() !!}
		<?php //<input type="hidden" name="_token" value="{{ csrf_token() }}"> ?>
		<textarea></textarea>
		<button type="submit">Create note</button>
	</form>

@endsection