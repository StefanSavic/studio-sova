@extends('layouts.app')

@section('content')
<h1>Termini</h1>
<hr/>
<a href="{{action('ScheduleController@edit')}}" class=" btn btn-primary">Izmeni Termine</a>
<hr/>

<table class="tableView">
	<thead>
		<tr>
			<th>vreme</th>
			<th>ponedeljak</th>
			<th>utorak</th>
			<th>sreda</th>
			<th>četvrtak</th>
			<th>petak</th>
			<th>subota</th>
			<th>nedelja</th>
		</tr>
	</thead>
@foreach($schedules as $schedule)
	<tr>
		<td>
			{{$schedule->reservation_time}}
		</td>
		
		<td>
			@if($schedule->pon)
			<span class="samara">zauzeto</span>
			@else
			<span>slobodno</span>
			@endif
		</td>
		
		<td>
			@if($schedule->uto)
			<span class="samara">zauzeto</span>
			@else
			<span>slobodno</span>
			@endif
		</td>
		
		<td>
			@if($schedule->sre)
			<span class="samara">zauzeto</span>
			@else
			<span>slobodno</span>
			@endif
		</td>
		
		<td>
			@if($schedule->cet)
			<span class="samara">zauzeto</span>
			@else
			<span>slobodno</span>
			@endif
		</td>
		
		<td>
			@if($schedule->pet)
			<span class="samara">zauzeto</span>
			@else
			<span>slobodno</span>
			@endif
		</td>
		
		<td>
			@if($schedule->sub)
			<span class="samara">zauzeto</span>
			@else
				<span>slobodno</span>
			@endif
		</td>
		<td>
			@if($schedule->ned)
			<span class="samara">zauzeto</span>
			@else
			<span>slobodno</span>
			@endif
		</td>
		@endforeach

	</table>
	@stop