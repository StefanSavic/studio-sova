	<!DOCTYPE html>
	<html lang="en">
	<head>
		<meta charset="UTF-8">
		<title>Admin</title>
		<link rel="stylesheet" href="/css/app.css">
		<link rel="shortcut icon" href="favicon.ico" type="image/x-icon">
		<link rel="icon" href="favicon.ico" type="image/x-icon">
	</head>
	<body class="admin">
		<div class="container">
			<body>
				{!! Form::open(['url'=>'/admin/termini','class' => 'forma']) !!}
				<table>
					<thead>
						<tr>
							<th>Vreme</th>
							<th>Ponedeljak</th>
							<th>Utorak</th>
							<th>Sreda</th>
							<th>Četvrtak</th>
							<th>Petak</th>
							<th>Subota</th>
							<th>Nedelja</th>
						</tr>
					</thead>
					@foreach ($schedule as $reservationTime) 
					<tr>
						<td>
							{{$reservationTime->reservation_time}}
						</td>
						<td>
							<input name="pon{{ $reservationTime->id}}" type="checkbox"@if ($reservationTime->pon)checked @endif>
						</td>
						<td>
							<input name="uto{{ $reservationTime->id}}" type="checkbox"@if ($reservationTime->pon)checked @endif>
						</td>
						<td>
							<input name="sre{{ $reservationTime->id}}" type="checkbox"@if ($reservationTime->pon)checked @endif>
						</td>
						<td>
							<input name="cet{{ $reservationTime->id}}" type="checkbox"@if ($reservationTime->pon)checked @endif>
						</td>
						<td>
							<input name="pet{{ $reservationTime->id}}" type="checkbox"@if ($reservationTime->pon)checked @endif>
						</td>
						<td>
							<input name="sub{{ $reservationTime->id}}" type="checkbox"@if ($reservationTime->pon)checked @endif>
						</td>
						<td>
							<input name="ned{{ $reservationTime->id}}" type="checkbox"@if ($reservationTime->pon)checked @endif>
						</td>

					</tr>
					@endforeach 		
				</table>
				{!! Form::submit('objavi',['class'=>'btn btn-primary']) !!}
				{!! Form::close() !!}



			</body>	
			</html>