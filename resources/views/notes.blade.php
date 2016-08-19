<!DOCTYPE html>
<html>
<head>
	<title>Laravel</title>
</head>
<body>
	<h2>Notes</h2>
	<ul>
		@foreach ($notes as $note)
		<li>
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
</body>
</html>