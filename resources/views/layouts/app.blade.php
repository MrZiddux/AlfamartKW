<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link href="{{ asset('css/app.css') }}" rel="stylesheet">
	@if($title != Null)
	<title>Ziemidi | {{ $title }}</title>
	@else
	<title>Ziemidi</title>
	@endif
</head>
<body>
	{{ $slug }}
	<script src="/js/jquery.min.js"></script>
</body>
</html>