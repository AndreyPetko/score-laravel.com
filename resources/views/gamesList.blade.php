<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
	<link rel="stylesheet" type="text/css" href="{{ url('/css/main.css') }}">
	<link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css" rel="stylesheet">
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
</head>
<body>

	<h1>Игры</h1>

	<table>
		@foreach($games as $game)
			<tr>
				<td>{{$game->day}}</td>
				<td>{{$game->home}}</td>
				<td>{{$game->away}}</td>
				<td>{{$game->stadium_id}}</td>
			</tr>
		@endforeach
	</table>
</body>
</html>