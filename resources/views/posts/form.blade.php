
	
	{!! Form::label('title','Naslov:') !!}
	{!! Form::text('title',null,[]) !!}



	
	{!! Form::label('body','Text:') !!}
	{!! Form::textarea('body',null,["v-model" => "message"]) !!}



	{!! Form::submit($submitButtonText,
		[
		'class'=>'btn btn-primary',
		'v-show'=> "message"
		]) !!}
		<span class="error" v-show= "!message">
			Moraš uneti tekst obaveštenja!
		</span>



			