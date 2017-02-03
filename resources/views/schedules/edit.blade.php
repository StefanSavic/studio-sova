@extends('layouts.admin',[$var='Izmeni Termine'])

@section('content')


{!! Form::model($schedules,['method'=>'PATCH', 'action' => ['ScheduleController@update']]) !!}
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

	<tr>
		@foreach($schedules as $schedule)
		<td>
		{{$schedule->reservation_time}}
		</td>

		<td>

			<div class="roundedOne">
				<input name="{{$schedule->id}}[pon]" type="checkbox"@if ($schedule->pon)checked @endif  value="1" id="roundedOne{{$schedule->id}}[pon]">
				<label for="roundedOne{{$schedule->id}}[pon]"></label>
			</div>
		</td>
		<td>
			<div class="roundedOne">
				<input name="{{$schedule->id}}[uto]" type="checkbox"@if ($schedule->uto)checked @endif  value="1" id="roundedOne{{$schedule->id}}[uto]">
				<label for="roundedOne{{$schedule->id}}[uto]"></label>
			</div>
		</td>
		<td>
			<div class="roundedOne">
				<input name="{{$schedule->id}}[sre]" type="checkbox"@if ($schedule->sre)checked @endif  value="1" id="roundedOne{{$schedule->id}}[sre]">
				<label for="roundedOne{{$schedule->id}}[sre]"></label>
			</div>
		</td>	
		<td>
			<div class="roundedOne">
				<input name="{{$schedule->id}}[cet]" type="checkbox"@if ($schedule->cet)checked @endif  value="1" id="roundedOne{{$schedule->id}}[cet]">
				<label for="roundedOne{{$schedule->id}}[cet]"></label>
			</div>
		</td>
		<td>
			<div class="roundedOne">
				<input name="{{$schedule->id}}[pet]" type="checkbox"@if ($schedule->pet)checked @endif  value="1" id="roundedOne{{$schedule->id}}[pet]">
				<label for="roundedOne{{$schedule->id}}[pet]"></label>
			</div>
		</td>
		<td>
			<div class="roundedOne">
				<input name="{{$schedule->id}}[sub]" type="checkbox"@if ($schedule->sub)checked @endif  value="1" id="roundedOne{{$schedule->id}}[sub]">
				<label for="roundedOne{{$schedule->id}}[sub]"></label>
			</div>
		</td>
		<td>
			<div class="roundedOne">
				<input name="{{$schedule->id}}[ned]" type="checkbox"@if ($schedule->ned)checked @endif  value="1" id="roundedOne{{$schedule->id}}[ned]">
				<label for="roundedOne{{$schedule->id}}[ned]"></label>
			</div>
		</td>
	</tr>
	@endforeach
</table>
{!! Form::submit('objavi',['class'=>'btn btn-yellow']) !!}
{!! Form::close() !!}
@stop